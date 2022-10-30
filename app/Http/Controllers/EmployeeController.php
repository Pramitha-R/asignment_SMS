<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_employee(){
        $employee=Employee::all();
        return view('admin/employee',compact('employee'));
    }
    public function index()
    {
        return view('admin/employee/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'empId'=>'required',
            'title'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'address'=>'required',
            'mobile'=>'required',
            'password'=>'required|min:5'
        ]);
        Employee::create($request->all());
        return redirect('/clickCreate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('admin/employee/edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $request ->validate([
            'empId'=>'required',
            'title'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'address'=>'required',
            'mobile'=>'required',
            'password'=>'required|min:5'
        ]);
    $employee->update($request->all());
    return redirect('/clickCreate');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
