<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    if (Auth::guest()){
        return Redirect::to('auth/login');
    }else {
        return Redirect::to('departments');
    }  
});


/*-----Departments-----*/
Route::get('departments', 
        [ 
           'uses' => 'DepartmentController@getAllDepartments',
           'as'   => 'departments'
       ]);
       
Route::get('departmentEdit/{id}', 
      [
            'uses' =>'DepartmentController@editDepartment',
            'as' =>'departmentEdit'  

      ]);

Route::get('departmentEmployees/{id}', 
      [
            'uses' =>'DepartmentController@departmentEmployees',
            'as' =>'departmentEmployees'  

      ]);

Route::get('departmentDelete/{id}', 
      [
            'uses' =>'DepartmentController@deleteDepartment',
            'as' =>'departmentDelete'  

      ]);      
      
Route::post('departmentEditSave', 
      [
            'uses' =>'DepartmentController@editSaveDepartment',
            'as' =>'departmentEditSave'  

      ]);
      
/*-----Employees-----*/      
Route::get('employees', 
        [ 
           'uses' => 'EmployeeController@getAllEmployees',
           'as'   => 'employees'
       ]);      


Route::get('employeeDelete/{id}', 
      [
            'uses' =>'EmployeeController@deleteEmployee',
            'as' =>'employeeDelete'  

      ]);

Route::get('employeeEdit/{id}/{dept_id?}', 
      [
            'uses' =>'EmployeeController@editEmployee',
            'as' =>'employeeEdit'  

      ]);
      
Route::post('employeeEditSave', 
      [
            'uses' =>'EmployeeController@editSaveEmployee',
            'as' =>'employeeEditSave'  

      ]);
      
      
Route::get('searchEmployee/{search?}', 
        [ 
           'uses' => 'EmployeeController@searchEmployee',
           'as'   => 'searchEmployee'
       ]); 

      
      

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
//Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/logout', 'Auth\AuthController@logout')->name('logout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister')->name('registration');
