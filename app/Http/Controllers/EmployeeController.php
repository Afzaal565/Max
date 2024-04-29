<?php

namespace App\Http\Controllers;

use App\Models\{Employee, Company};
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Support\Facades\Gate;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('viewAny', Employee::class);
        $employees = Employee::paginate(10);
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create', Employee::class);
        $companies = Company::all()->pluck('name', 'id');
        return view('employee.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        Gate::authorize('create', Employee::class);
        $inputs = $request->validated();
        $employee = Employee::create($inputs);
        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Employee $employee)
    // {
    //     return view('employee.show', compact('company'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        Gate::authorize('update', $employee);
        $companies = Company::all()->pluck('name', 'id');
        return view('employee.edit', compact('employee', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        Gate::authorize('update', $employee);
        $inputs = $request->validated();
        $employee->update($inputs);
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        Gate::authorize('delete', $employee);
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
