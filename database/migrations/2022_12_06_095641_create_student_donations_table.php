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
        Schema::create('student_donations', function (Blueprint $table) {
            $table->id();
            $table->string(column:'title');
            $table->string(column:'name');
            $table->string(column:'email');
            $table->string(column:'phone_number');
            $table->string(column:'account_number');
            $table->string(column:'amount');
            $table->string(column:'institute',length:100);
            $table->text(column:'address');
            $table->text(column:'cause');
            $table->text(column:'status')->default('pending');
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
        Schema::dropIfExists('student_donations');
    }
};
