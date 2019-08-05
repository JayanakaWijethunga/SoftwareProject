<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllowanceTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allowance_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('allowance_type');
            $table->timestamps();
        });

        DB::table('allowance_types')->insert(
            array(
                'allowance_type' => 'Travelling',
                
            ),

        );

        DB::table('allowance_types')->insert(
            array(
                'allowance_type' => 'Meals',
                
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
        Schema::dropIfExists('allowance_types');
    }
}
