<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeDesignationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_designations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('designation');
            $table->timestamps();
        });

        DB::table('employee_designations')->insert(
            array(
                'designation' => 'CEO',
                
            )
        );

        DB::table('employee_designations')->insert(
            array(
                'designation' => 'COO',
                
            ),

        );

        DB::table('employee_designations')->insert(
            array(
                'designation' => 'Director',
                
            ),

        );

        DB::table('employee_designations')->insert(
            array(
                'designation' => 'HR Manager',
                
            ),

        );

        DB::table('employee_designations')->insert(
            array(
                'designation' => 'HR Executive',
                
            ),

        );

        DB::table('employee_designations')->insert(
            array(
                'designation' => 'Software Engineer',
                
            ),

        );

        DB::table('employee_designations')->insert(
            array(
                'designation' => 'ASE',
                
            ),

        );

        DB::table('employee_designations')->insert(
            array(
                'designation' => 'QA',
                
            ),

        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_designations');
    }
}
