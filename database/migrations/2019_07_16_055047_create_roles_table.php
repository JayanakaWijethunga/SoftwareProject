<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('roles')->insert(
            array(
                'name' => 'super_admin',
                
            ),

        );

        DB::table('roles')->insert(
            array(
                'name' => 'admin',
                
            ),

        );

        DB::table('roles')->insert(
            array(
                'name' => 'user',
                
            ),

        );

        DB::table('roles')->insert(
            array(
                'name' => 'employee',
                
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
        Schema::dropIfExists('roles');
    }
}
