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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string(column:'father_name',length:100);
            $table->string(column:'mother_name',length:100);
            $table->string(column:'father_occupation',length:100);
            $table->string(column:'family_member',length:100);
            $table->string(column:'amount',length:50);
            $table->string(column:'institute',length:100);
            $table->text(column:'address');
            $table->text(column:'name');
            $table->text(column:'email');
            $table->text(column:'phone_number');
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
        Schema::dropIfExists('loans');
    }
};
