@extends('layouts.master')

@section('title')
    HR - Departments list
@endsection

@section('content')
    <span class="glyphicon glyphicon-plus-sign"></span> <a href="{{{ route('departmentEdit',['id' => 0]) }}}">New</a>
    <table class="table table-hover">
        <th>Department ID</th>
        <th>Department Name</th>
        <th></th>
       @foreach($departments as $department)
            <tr>
                <td><a href="{{{ route('departmentEmployees',['id' => $department->id]) }}}">{{{ $department->dept_id }}}</a></td>
                <td>{{{ $department->dept_name }}}</td>
                <td>
                <span class="glyphicon glyphicon-pencil"></span> <a href="{{{ route('departmentEdit',['id' => $department->id]) }}}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
    
    {!! $departments->render() !!}
    
@endsection

