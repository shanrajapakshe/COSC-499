<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('prof', function (Blueprint $table) {
            // Primary Key
            $table->increments('id');
            // $table->increments('professorNo');

            // 
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique()->nullable();
            // $table->tinyInteger('admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('prof');
    }
}