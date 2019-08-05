<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeductionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deduction_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('deduction_type');
            $table->timestamps();
        });

        DB::table('deduction_types')->insert(
            array(
                'deduction_type' => 'Travelling',
                
            ),

        );

        DB::table('deduction_types')->insert(
            array(
                'deduction_type' => 'Meals',
                
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
        Schema::dropIfExists('deduction_types');
    }
}
