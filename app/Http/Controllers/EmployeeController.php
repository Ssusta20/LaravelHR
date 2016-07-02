<?php

    namespace App\Http\Controllers;
    
    use DB;
    use \Illuminate\http\Request;
    use App\Employee;
    use App\Department;
    
    
    class EmployeeController extends Controller{
        
        public function getAllEmployees(){
            $employees = Employee::orderBy('emp_no')->paginate(20);
            
            return view('employees',['employees'=> $employees]);     
            
        }
        
        public function searchEmployee(Request $request){
            
            if ($request['search'] == ''){
                return redirect()->route('employees');
            }
            
            $employees = Employee::where('last_name','like', '%' . $request['search'] . '%')->paginate(20);
               
            return view('employees',['employees'=> $employees]);     
            
        }
        
        
        public function deleteEmployee($id){
            $employee =Employee::find($id);
            $employee->delete();
            return redirect()->route('departmentEmployees', $employee->department_id);        
        }
        
        public function editEmployee($id, $dept_id = null){
            $deptLOV = null;
            
            if ($id == 0){ //new employee
                $employee = new Employee();
                
                if ($id == 0 && $dept_id == null){ //from employees tab
                    
                    $deptLOV = Department::all();
                    
                } else {
                    
                    $employee->department_id=$dept_id;
                    
                }
            }  else { //edit employee
                $employee = Employee::find($id);
            }
            
            return view('edit_employee',['employee'=> $employee,'deptLOV'=>$deptLOV]);
            
        }
        
        public function editSaveEmployee(Request $request){
            $this->validate($request,
                    [
                        'emp_no'       =>'required',
                        'fist_name'    =>'required',
                        'last_name'    =>'required',
                        'email'        =>'required',
                        'phone_number' =>'numeric',
                        'hire_date'    =>'required|date'
                    ]);
                    
            if($request['btn_submit']=="Delete"){
                
                if($request['id']==''){
                    return redirect()->route('departmentEmployees', $request['department_id']);
                }else{
                    return redirect()-> route('employeeDelete',['id' =>  $request['id']]);
                }
                
            } else if ($request['id']==''){
                $employee = new Employee();
                $employee->department_id = $request['department_id'];
            } else {        
                $employee =  Employee::find($request['id']);
            }
            
            $employee->emp_no       = $request['emp_no'];
            $employee->fist_name    = $request['fist_name'];
            $employee->last_name    = $request['last_name'];
            $employee->email        = $request['email'];
            $employee->phone_number = $request['phone_number'];
            $employee->hire_date    = $request['hire_date'];
            
            $employee->save();
            return redirect()->route('departmentEmployees', $request['department_id']);
        
        
        }
        
    }