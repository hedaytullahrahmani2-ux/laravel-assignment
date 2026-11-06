<?php

namespace App\Http\Controllers;

use App\Services\JsonDatabase;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    private JsonDatabase $database;

    public function __construct(JsonDatabase $database)
    {
        $this->database = $database;
    }

    // Show all students
    public function index()
    {
        $students = $this->database->all('students');

        return view('students.index', compact('students'));
    }

    // Show create form
    public function create()
    {
        return view('students.create');
    }

    // Save new student
    public function store(Request $request)
    {
        $this->database->create(
            'students',
            $request->except(['_token', '_method'])
        );

        return redirect()->route('students.index');
    }

    // Show one student
    public function show(string $student)
    {
        $studentData = $this->database->find('students', (int) $student);

        abort_if(!$studentData, 404);

        return view('students.show', [
            'student' => $studentData
        ]);
    }

    // Show edit form
    public function edit(string $student)
    {
        $studentData = $this->database->find('students', (int) $student);

        abort_if(!$studentData, 404);

        return view('students.edit', [
            'student' => $studentData
        ]);
    }

    // Update student
    public function update(Request $request, string $student)
    {
        $this->database->update(
            'students',
            (int) $student,
            $request->except(['_token', '_method'])
        );

        return redirect()->route('students.index');
    }

    // Delete student
    public function destroy(string $student)
    {
        $this->database->delete('students', (int) $student);

        return redirect()->route('students.index');
    }
}
