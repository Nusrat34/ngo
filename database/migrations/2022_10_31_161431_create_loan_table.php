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
        Schema::create('loan', function (Blueprint $table) {
            $table->id();
            $table->string(column:'name',length:100);
            $table->string(column:'email',length:50);
            $table->string(column:'password',length:50);
            $table->string(column:'phone_number',length:50);
            $table->string(column:'nid',length:50);
            $table->string(column:'amount',length:50);
            $table->text(column:'occupation',);
            $table->text(column:'apply',);
            

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
        Schema::dropIfExists('loan');
    }
};
