@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row m-auto">
            <div class="col-6 ">
                <a href="{{ route('employees.index') }}" class="btn btn-warning m-auto">
                    Show the List of Employees
                </a>
            </div>
            <div class="col-6">
                <a href="{{ route('employees.create') }}" class="btn btn-warning m-auto">
                Create a new Employee
                </a>
            </div>
        </div>
    </div>

@endsection