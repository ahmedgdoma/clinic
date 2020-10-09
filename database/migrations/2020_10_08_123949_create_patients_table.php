<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('pain_id');
            $table->foreign('pain_id')->references('id')->on('pains');
            $table->string('first_name' ,100);
            $table->string('last_name' ,100);
            $table->string('mobile' ,50);
            $table->date('birth_date');
            $table->enum('gender', ['male', 'female']);
            $table->string('country' ,60);
            $table->string('occupation' ,255);
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
        Schema::dropIfExists('patients');
    }
}
