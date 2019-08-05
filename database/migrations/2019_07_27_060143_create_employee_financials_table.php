<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeFinancialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_financials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bank');
            $table->string('bbranch');
            $table->string('acc');
            $table->string('fixed_allowances');
            $table->string('fixed_deductions');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_financials');
    }
}
