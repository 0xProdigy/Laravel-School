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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string("trayecto");
            $table->string("name");
            $table->string("status");

            $table->string("startDate");
            $table->string("endDate");

            $table->string("id_identifier");

            // $table->foreignId("id_identifier_assignment")->nullable()->constrained("assignment_exams")->cascadeOnUpdate()->nullOnDelete(); 
            
            $table->string("id_identifier_teacher");

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
        Schema::dropIfExists('subjects');
    }
};
