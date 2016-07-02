<?php

use Illuminate\Database\Seeder;
use App\Department;
use App\Employee;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dept1 = new Department();
        $dept1->dept_id = 'd001';
        $dept1->dept_name ='Marketing';
        $dept1->save();
        
        $employee = new Employee();
        
        $employee->emp_no ="198";
        $employee->fist_name="Donald";
        $employee->last_name="OConnell";
        $employee->email="DOCONNEL";
        $employee->hire_date="1999-06-21";
        
        $dept1->employees()->save($employee);
        
        $employee = new Employee();
        $employee->emp_no ="200";
        $employee->fist_name="Mary";
        $employee->last_name="Whalen";
        $employee->email = "JWHALEN";
        $employee->hire_date="1999-06-21";
        
        $dept1->employees()->save($employee);
        
     
        $dept1 = new Department();
        $dept1->dept_id = 'd002';
        $dept1->dept_name ='Finance';
        $dept1->save();
        
        $employee = new Employee();
        $employee->emp_no ="201";
        $employee->fist_name="Michael";
        $employee->last_name="Hartstein";
        $employee->email = "MHARTSTE";
        $employee->hire_date="1996-02-17";
        
        $dept1->employees()->save($employee);

        
        $dept1 = new Department();
        $dept1->dept_id = 'd003';
        $dept1->dept_name ='Human resources';
        $dept1->save();
        
        $dept1 = new Department();
        $dept1->dept_id = 'd004';
        $dept1->dept_name ='Development';
        $dept1->save();
    }
}
