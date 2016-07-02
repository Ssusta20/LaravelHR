@extends('layouts.form')
@extends('layouts.master')
@section('title')
    HR - Edit employee
@endsection

@section('content')
    @include('include.error_template')
    @section('form')
            <form role = "form" method="post" action ="{{ route('employeeEditSave') }}">
               <div class="form-group">
                   <label for="emp_no">Emp No:</label>
                   <input class="form-control" type="text" name="emp_no" id ="emp_no" value="{{ $employee->emp_no }}"/>
               </div>
              
               <div class="form-group">
                   <label for="fist_name">First Name:</label>
                   <input class="form-control" type="text" name="fist_name" id ="fist_name" value="{{ $employee->fist_name }}"/>
               </div>
              
              <div class="form-group">
                   <label for="last_name">Last Name:</label>
                   <input class="form-control" type="text" name="last_name" id ="last_name" value="{{ $employee->last_name }}"/>
              </div>
               
               <div class="form-group">
                   <label for="email">Email:</label>
                   <input class="form-control" type="text" name="email" id ="email" value="{{ $employee->email }}"/>
               </div>
               
               <div class="form-group">
                   <label for="phone_number">Phone Number:</label>
                   <input class="form-control" type="text" name="phone_number" id ="phone_number" value="{{ $employee->phone_number }}"/>
               </div>
               
               <div class="form-group">
                   <label for="hire_date">Hire Date:</label>
                   <input class="form-control" type="date" name="hire_date" id ="hire_date" value="{{ $employee->hire_date }}"/>
               </div>
               
               @if($deptLOV)
                   <div class="form-group">
                       <label for="department_id">Department:</label>
                       <select class="form-control" name="department_id" id="department_id">
                           @foreach($deptLOV as $dept)
                               <option value="{{ $dept->id }}">{{ $dept->dept_name }}</option>
                           @endforeach
                       </select>
                    </div>
               @else
                   <input type="hidden" name="department_id" id="department_id" value="{{$employee->department_id}}"/>
               @endif
           
               <input type="hidden" value="{{ Session::token() }}" name="_token"/>
               <input type="hidden" name="id" id="id" value="{{$employee->id}}"/>
               
               
               <input class="btn btn-primary" type="submit" name = "btn_submit" id ="btn_submit" value="Save Changes"/>
               <input class="btn btn-danger" type="submit" name = "btn_submit" id ="btn_submit" value="Delete"/>
            </form>
    @endsection
@endsection

