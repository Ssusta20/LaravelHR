@extends('layouts.master')
@section('title')
    HR - Department Employees list
@endsection
@section('content')
        <div>
            <label for="">Department ID:</label><b>{{{ $department->dept_id }}}</b>
            </br>
            <label for="">Department Name:</label><b>{{{ $department->dept_name }}}</b>
            </br>
            </br>
        </div>
      <span class="glyphicon glyphicon-plus-sign"></span> <a href="{{{ route('employeeEdit',['id' => 0,'dept_id'=>$department->id]) }}}">New</a> 
      <table class="table table-hover">
            <th>Emp No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Hire Date</th>
            <th> </th>
            @foreach($department->pageEmployees() as $employee)
                <tr>
                    <td>{{{ $employee->emp_no }}}</td>
                    <td>{{{ $employee->fist_name }}}</td>
                    <td>{{{ $employee->last_name }}}</td>
                    <td>{{{ $employee->email }}}</td>
                    <td>{{{ $employee->phone_number }}}</td>
                    <td>{{{ $employee->hire_date }}}</td>
                    <td>
                        <span class="glyphicon glyphicon-pencil"></span> <a href="{{{ route('employeeEdit',['id' => $employee->id]) }}}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
       
        <div class="pagination">
            {{ $department->pageEmployees()->links() }}
        </div>
@endsection

