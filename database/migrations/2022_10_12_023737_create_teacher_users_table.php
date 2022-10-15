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
        Schema::create('teacher_users', function (Blueprint $table) {
            $table->id();
            
            $table->string("name");
            $table->string("lastname");
            $table->string("address");
            $table->string("email");
            $table->string("phone");
            $table->string("specialty");
            $table->string("birthday");
            $table->string("gender");
            $table->string("id_identifier");

            $table->string("subject_id")->nullable();

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
        Schema::dropIfExists('teacher_users');
    }
};
