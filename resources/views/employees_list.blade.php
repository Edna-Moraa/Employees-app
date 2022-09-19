@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="text-center">Employees List</h5>
            <form class="d-flex my-2 my-lg-0">
                <input class="form-control me-sm-2" name="search" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="card-body table-responsive">
            
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Title</th>
                            <th scope="col">Age</th>
                            <th class="text-center" scope="col">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($employees as $employee)
                        <tr class="">
                            <td scope="row">{{$employee->id}}</td>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->phone_number}}</td>
                            <td>{{$employee->designation}}</td>
                            <td>{{$employee->title}}</td>
                            <td>{{$employee->age}}</td>
                            <td>
                                <div class="d-flex flex-row justify-content-center">
                                    <div class="flex-col m-2"><a href="{{route('employees.edit',$employee->id)}}" class="btn btn-secondary">
                                        EDIT
                                    </a></div>
                                    <div class="flex-col m-2">
                                        <form method="POST" id="delete-employee" action="{{route('employees.destroy',$employee->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            

                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            
            

        </div>
    </div>
</div>
@endsection