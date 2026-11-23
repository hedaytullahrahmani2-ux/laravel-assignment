<?php

namespace App\Http\Controllers;

use App\Services\JsonDatabase;
use Illuminate\Http\Request;

class InternshipController extends Controller
{
    private JsonDatabase $database;

    public function __construct(JsonDatabase $database)
    {
        $this->database = $database;
    }

    // Show all internships
    public function index()
    {
        $internships = $this->database->all('internships');

        return view('internships.index', compact('internships'));
    }

    // Show create form
    public function create()
    {
        return view('internships.create');
    }

    // Save new internship
    public function store(Request $request)
    {
        $this->database->create(
            'internships',
            $request->except(['_token', '_method'])
        );

        return redirect()->route('internships.index');
    }

    // Show one internship
    public function show(string $internship)
    {
        $internshipData = $this->database->find(
            'internships',
            (int) $internship
        );

        abort_if(!$internshipData, 404);

        return view('internships.show', [
            'internship' => $internshipData
        ]);
    }

    // Show edit form
    public function edit(string $internship)
    {
        $internshipData = $this->database->find(
            'internships',
            (int) $internship
        );

        abort_if(!$internshipData, 404);

        return view('internships.edit', [
            'internship' => $internshipData
        ]);
    }

    // Update internship
    public function update(Request $request, string $internship)
    {
        $this->database->update(
            'internships',
            (int) $internship,
            $request->except(['_token', '_method'])
        );

        return redirect()->route('internships.index');
    }

    // Delete internship
    public function destroy(string $internship)
    {
        $this->database->delete('internships', (int) $internship);

        return redirect()->route('internships.index');
    }
}
