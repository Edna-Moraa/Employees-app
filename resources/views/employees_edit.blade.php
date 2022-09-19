@extends('layouts.app')


@section('content')



<div class="container">
    <div class="card">
        <div class="card-header">
            <h5>Edit {{ $employee->name }}'s Details</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                          <label for="first_name" class="form-label">First Name</label>
                          <input type="text" class="form-control" value="{{ $employee->first_name }}" name="first_name" id="first_name" aria-describedby="helpId" placeholder="Enter your First Name">
                          @error('first_name')
                          <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                          <label for="last_name" class="form-label">Last Name</label>
                          <input value="{{ $employee->last_name }}" type="text" class="form-control" name="last_name" id="last_name" aria-describedby="helpId" placeholder="Enter your Last Name">
                          @error('last_name')
                          <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                          <label for="email" class="form-label">Email Address</label>
                          <input type="text" value="{{ $employee->email }}" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Enter your Email Address">
                          @error('email')
                          <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                          <label for="phone_number" class="form-label">Phone Number</label>
                          <input type="text" value="{{ $employee->phone_number }}" class="form-control" name="phone_number" id="phone_number" aria-describedby="helpId" placeholder="Enter your Phone Number">
                          @error('phone_number')
                          <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                          <label for="gender" class="form-label">Gender</label>
                          <select class="form-control" name="gender" id="gender">
                            <option  disabled>Select Your Gender</option>
                            <option @if($employee->gender == 'male')selected @endif value="male">Male</option>
                            <option @if($employee->gender == 'female')selected @endif value="female">Female</option>
                          </select>
                          @error('gender')
                          <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                          <label for="date" class="form-label">Date of Birth</label>
                          <input type="date"
                            class="form-control" value="{{ $employee->birth_date }}" name="birth_date" id="date" aria-describedby="date" placeholder="">
                            @error('birth_date')
                            <small id="date" class="form-text text-danger">{{ $message }}</small>
                                
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                          <label for="designation" class="form-label">Designation</label>
                          <input type="text" class="form-control" value="{{ $employee->designation }}" name="designation" id="designation" aria-describedby="helpId" placeholder="Enter your Designation">
                          @error('designation')
                          <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control" value="{{ $employee->title }}" name="title" id="title" aria-describedby="helpId" placeholder="Enter your Title">
                          @error('title')
                          <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-3">
                          <label for="monthly_salary_kes" class="form-label">Monthly Salary (KES)</label>
                          <input type="number" class="form-control" value="{{ $employee->monthly_salary_kes }}" name="monthly_salary_kes" id="monthly_salary_kes" aria-describedby="helpId" placeholder="Enter your Monthly Salary (KES)">
                          @error('monthly_salary_kes')
                          <small id="helpId" class="form-text text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                    </div>
                </div>
    
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>




@endsection