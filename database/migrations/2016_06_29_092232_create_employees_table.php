    <?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_no',6);
            $table->string('fist_name',20);
            $table->string('last_name',25);
            $table->string('email',25);
            $table->string('phone_number',20)->nullable();
            $table->date('hire_date');
            $table->integer('department_id')->unsigned();
            $table->timestamps();
            
            
            $table->unique('email');
            
            $table->foreign('department_id')->references('id')->on('departments');
            
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}
