<?php

namespace App\Http\Controllers;

use App\Services\JsonDatabase;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    private JsonDatabase $database;

    public function __construct(JsonDatabase $database)
    {
        $this->database = $database;
    }

    // Show all reports
    public function index()
    {
        $reports = $this->database->all('reports');

        return view('reports.index', compact('reports'));
    }

    // Show create form
    public function create()
    {
        return view('reports.create');
    }

    // Save new report
    public function store(Request $request)
    {
        $this->database->create(
            'reports',
            $request->except(['_token', '_method'])
        );

        return redirect()->route('reports.index');
    }

    // Show one report
    public function show(string $report)
    {
        $reportData = $this->database->find(
            'reports',
            (int) $report
        );

        abort_if(!$reportData, 404);

        return view('reports.show', [
            'report' => $reportData
        ]);
    }

    // Show edit form
    public function edit(string $report)
    {
        $reportData = $this->database->find(
            'reports',
            (int) $report
        );

        abort_if(!$reportData, 404);

        return view('reports.edit', [
            'report' => $reportData
        ]);
    }

    // Update report
    public function update(Request $request, string $report)
    {
        $this->database->update(
            'reports',
            (int) $report,
            $request->except(['_token', '_method'])
        );

        return redirect()->route('reports.index');
    }

    // Delete report
    public function destroy(string $report)
    {
        $this->database->delete('reports', (int) $report);

        return redirect()->route('reports.index');
    }
}
