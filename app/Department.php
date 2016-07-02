<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function employees()
    {
        return $this->hasMany('App\Employee')->orderBy('emp_no');
        
    }
    
    //For pagination of employees
    public function pageEmployees() {
         return $this->employees()->paginate(10);
    }
}
