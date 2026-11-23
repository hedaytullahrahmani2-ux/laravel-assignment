<?php

namespace App\Http\Controllers;

use App\Services\JsonDatabase;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    private JsonDatabase $database;

    public function __construct(JsonDatabase $database)
    {
        $this->database = $database;
    }

    // Show all applications
    public function index()
    {
        $applications = $this->database->all('applications');

        return view('applications.index', compact('applications'));
    }

    // Show create form
    public function create()
    {
        return view('applications.create');
    }

    // Save new application
    public function store(Request $request)
    {
        $this->database->create(
            'applications',
            $request->except(['_token', '_method'])
        );

        return redirect()->route('applications.index');
    }

    // Show one application
    public function show(string $application)
    {
        $applicationData = $this->database->find(
            'applications',
            (int) $application
        );

        abort_if(!$applicationData, 404);

        return view('applications.show', [
            'application' => $applicationData
        ]);
    }

    // Show edit form
    public function edit(string $application)
    {
        $applicationData = $this->database->find(
            'applications',
            (int) $application
        );

        abort_if(!$applicationData, 404);

        return view('applications.edit', [
            'application' => $applicationData
        ]);
    }

    // Update application
    public function update(Request $request, string $application)
    {
        $this->database->update(
            'applications',
            (int) $application,
            $request->except(['_token', '_method'])
        );

        return redirect()->route('applications.index');
    }

    // Delete application
    public function destroy(string $application)
    {
        $this->database->delete('applications', (int) $application);

        return redirect()->route('applications.index');
    }
}
