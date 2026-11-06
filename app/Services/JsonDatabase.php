<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use InvalidArgumentException;

class JsonDatabase
{
    private string $path;

    private array $entities = [
        'students',
        'companies',
        'internships',
        'applications',
        'reports',
        'users'
    ];

    public function __construct()
    {
        $this->path = storage_path('data/database.json');

        File::ensureDirectoryExists(dirname($this->path));

        if (!File::exists($this->path)) {
            $this->write([]);
        }
    }

    private function checkEntity(string $entity): void
    {
        if (!in_array($entity, $this->entities)) {
            throw new InvalidArgumentException('Invalid entity');
        }
    }

    private function read(): array
    {
        $data = json_decode(File::get($this->path), true);

        return is_array($data) ? $data : [];
    }

    private function write(array $data): void
    {
        file_put_contents(
            $this->path,
            json_encode(
                $data,
                JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
            ),
            LOCK_EX
        );
    }

    // Show all records
    public function all(string $entity): array
    {
        $this->checkEntity($entity);

        $data = $this->read();

        return $data[$entity] ?? [];
    }

    // Show one record
    public function find(string $entity, int $id): ?array
    {
        $this->checkEntity($entity);

        foreach ($this->all($entity) as $record) {
            if ($record['id'] == $id) {
                return $record;
            }
        }

        return null;
    }

    // Create a new record
    public function create(string $entity, array $values): array
    {
        $this->checkEntity($entity);

        $data = $this->read();

        $records = $data[$entity] ?? [];

        $ids = array_column($records, 'id');

        $newId = empty($ids) ? 1 : max($ids) + 1;

        $record = array_merge($values, ['id' => $newId]);

        $data[$entity][] = $record;

        $this->write($data);

        return $record;
    }

    // Update a record
    public function update(
        string $entity,
        int $id,
        array $values
    ): bool {
        $this->checkEntity($entity);

        $data = $this->read();

        foreach ($data[$entity] ?? [] as $index => $record) {
            if ($record['id'] == $id) {

                $data[$entity][$index] = array_merge(
                    $record,
                    $values,
                    ['id' => $id]
                );

                $this->write($data);

                return true;
            }
        }

        return false;
    }

    // Delete a record
    public function delete(string $entity, int $id): bool
    {
        $this->checkEntity($entity);

        $data = $this->read();

        foreach ($data[$entity] ?? [] as $index => $record) {
            if ($record['id'] == $id) {

                unset($data[$entity][$index]);

                $data[$entity] = array_values($data[$entity]);

                $this->write($data);

                return true;
            }
        }

        return false;
    }
}
