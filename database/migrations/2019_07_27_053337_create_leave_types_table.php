<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('leave_type');
            $table->timestamps();
        });

        DB::table('leave_types')->insert(
            array(
                'leave_type' => 'Casual',
                
            ),

        );

        DB::table('leave_types')->insert(
            array(
                'leave_type' => 'Annual',
                
            ),

        );

        DB::table('leave_types')->insert(
            array(
                'leave_type' => 'Sick',
                
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
        Schema::dropIfExists('leave_types');
    }
}
