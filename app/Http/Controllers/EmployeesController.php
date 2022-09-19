<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy('id', 'DESC')->paginate(10);

        if (request('search')) {
            $employees = Employee::where('last_name', 'like', '%'.request('search').'%')->orWhere('first_name','like','%'.request('search').'%')->paginate(10);
        }
        return view('employees_list')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'birth_date'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required',
            'gender'=>'required',
            'title'=>'required',
            'designation'=>'required',
            'monthly_salary_kes'=>'required',

        ]);
        $employee = new Employee();
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->birth_date = $request->birth_date;
        $employee->email = $request->email;
        $employee->phone_number = $request->phone_number;
        $employee->gender = $request->gender;
        $employee->title = $request->title;
        $employee->designation = $request->designation;
        $employee->monthly_salary_kes = $request->monthly_salary_kes;

        $employee->save();

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('employees_show')->with('employee', Employee::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('employees_edit')->with('employee', Employee::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'birth_date'=>'required',
            'email'=>'required|email',
            'phone_number'=>'required',
            'gender'=>'required',
            'title'=>'required',
            'designation'=>'required',
            'monthly_salary_kes'=>'required',

        ]);
        $employee = Employee::find($id);
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->birth_date = $request->birth_date;
        $employee->email = $request->email;
        $employee->phone_number = $request->phone_number;
        $employee->gender = $request->gender;
        $employee->title = $request->title;
        $employee->designation = $request->designation;
        $employee->monthly_salary_kes = $request->monthly_salary_kes;

        $employee->save();

        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::find($id)->delete();
        return redirect()->route('employees.index');
    }
}
