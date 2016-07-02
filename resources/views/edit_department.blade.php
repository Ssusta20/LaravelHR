@extends('layouts.form')
@extends('layouts.master')

@section('title')
    HR - Edit department
@endsection

@section('content')
    @include('include.error_template')

    @section('form')
        <form role = "form" method="post" action ="{{ route('departmentEditSave') }}">
            <div class="form-group">
                <label for="dept_id">Department ID:</label>
                <input class="form-control" type="text" name="dept_id" id="dept_id" value="{{$department->dept_id}}"/>
            </div>
            <div class="form-group">
                <label for="dept_name">Department Name:</label>
                <input class="form-control" type="text" name="dept_name" id="dept_name" value="{{$department->dept_name}}"/>
            
            </div>
            <input type="hidden" value="{{ Session::token() }}" name="_token"/>
            <input type="hidden" name="id" id="id" value="{{$department->id}}"/>
            <input class="btn btn-primary" type="submit" name = "btn_submit" id ="btn_submit" value="Save Changes"/>
            <input class="btn btn-danger" type="submit" name = "btn_submit" id ="btn_submit" value="Delete"/>
        </form>
        
    @endsection

@endsection

