<?php

    namespace App\Http\Controllers;
    
    use DB;
    use \Illuminate\http\Request;
    use App\Department;
    
    
    class DepartmentController extends Controller{
        
       public function getAllDepartments(){
            $departments = Department::orderBy('dept_id')->paginate(7);
            
            return view('departments',['departments'=> $departments]);     
            
        }
        
        
        public function editDepartment($id){
            
            if ($id == 0){
                $department = new Department();
            } else {
                $department = Department::find($id);
            }

            return view('edit_department',['department'=> $department]);
        }
        
        public function deleteDepartment($id){
            
            $department = Department::find($id);
            $department->delete();
            
            return redirect()->route('departments');
        }
        
        public function editSaveDepartment(Request $request){
            $this->validate($request,
                    [
                        'dept_id'  =>'required',
                        'dept_name'  =>'required'
                    ]);
                    
            if($request['btn_submit']=="Delete"){
                
                if($request['id']==''){
                    return redirect()->route('departments');
                }else{
                    return redirect()-> route('departmentDelete',['id' =>  $request['id']]);
                }
                
            } else if ($request['id']==''){
                $department = new Department();
            }else {        
                $department =  Department::find($request['id']);
            }
            
            $department->dept_id = $request['dept_id'];
            $department->dept_name = $request['dept_name'];
            $department->save();
            
            return redirect()->route('departments');
        
        
        }
        
        public function departmentEmployees($id){
            
           $department = Department::find($id);
           
           return view('department_employees',['department'=> $department]);  
            
        }
        
        
        
    }