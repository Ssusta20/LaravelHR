@extends('layouts.master')

@section('title')
    HR - All Employee list
@endsection
@section('content')
    <form role="form" method="GET" action="{{ route('searchEmployee') }}">
        <label for="search">Search Employee Last Name:</label>
        <input type="text" name="search" id="search"/>
        <input class="btn btn-primary" type="submit" value="Search"/>
    </form>
    </br>
    <span class="glyphicon glyphicon-plus-sign"></span> <a href="{{{ route('employeeEdit',['id' => 0]) }}}">New</a>
    </br>
    <table class="table table-hover">
            <th>Emp No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone number</th>
            <th>Hire Date</th>
            <th>Department</th>
            @foreach($employees as $employee)
                <tr>
                    <td>{{{ $employee->emp_no }}}</td>
                    <td>{{{ $employee->fist_name }}}</td>
                    <td>{{{ $employee->last_name }}}</td>
                    <td>{{{ $employee->email }}}</td>
                    <td>{{{ $employee->phone_number }}}</td>
                    <td>{{{ $employee->hire_date }}}</td>
                    <td>{{{ $employee->department->dept_name }}}</td>
                </tr>
            @endforeach
        </table>
    
    {!! $employees->render() !!}
@endsection

