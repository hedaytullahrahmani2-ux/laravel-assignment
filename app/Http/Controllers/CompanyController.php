<?php

namespace App\Http\Controllers;

use App\Services\JsonDatabase;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    private JsonDatabase $database;

    public function __construct(JsonDatabase $database)
    {
        $this->database = $database;
    }

    // Show all companies
    public function index()
    {
        $companies = $this->database->all('companies');

        return view('companies.index', compact('companies'));
    }

    // Show create form
    public function create()
    {
        return view('companies.create');
    }

    // Save new company
    public function store(Request $request)
    {
        $this->database->create(
            'companies',
            $request->except(['_token', '_method'])
        );

        return redirect()->route('companies.index');
    }

    // Show one company
    public function show(string $company)
    {
        $companyData = $this->database->find(
            'companies',
            (int) $company
        );

        abort_if(!$companyData, 404);

        return view('companies.show', [
            'company' => $companyData
        ]);
    }

    // Show edit form
    public function edit(string $company)
    {
        $companyData = $this->database->find(
            'companies',
            (int) $company
        );

        abort_if(!$companyData, 404);

        return view('companies.edit', [
            'company' => $companyData
        ]);
    }

    // Update company
    public function update(Request $request, string $company)
    {
        $this->database->update(
            'companies',
            (int) $company,
            $request->except(['_token', '_method'])
        );

        return redirect()->route('companies.index');
    }

    // Delete company
    public function destroy(string $company)
    {
        $this->database->delete('companies', (int) $company);

        return redirect()->route('companies.index');
    }
}
