<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::paginate(10);
        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyRequest $request)
    {
        $inputs = $request->validated();
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('company', 'public');
            $inputs['logo'] = $logoPath;
        }
        $company = Company::create($inputs);
        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Company $company)
    // {
    //     return view('company.show', compact('company'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyRequest $request, Company $company)
    {
        $inputs = $request->validated();
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('company', 'public');
            $inputs['logo'] = $logoPath;
        }
        $company->update($inputs);
        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index');
    }
}
