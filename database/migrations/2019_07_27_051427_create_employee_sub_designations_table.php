<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeSubDesignationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_sub_designations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sub_designation');
            $table->timestamps();
        });

        DB::table('employee_sub_designations')->insert(
            array(
                'sub_designation' => 'Team Manager',
                
            ),

        );

        DB::table('employee_sub_designations')->insert(
            array(
                'sub_designation' => 'Project Engineer',
                
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
        Schema::dropIfExists('employee_sub_designations');
    }
}
