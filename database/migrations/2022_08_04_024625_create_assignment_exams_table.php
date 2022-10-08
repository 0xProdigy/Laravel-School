<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_exams', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("timeStart");
            $table->string("timeEnd");
            $table->string("date");
            $table->string("calification");

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
        Schema::dropIfExists('assignment_exams');
    }
};
