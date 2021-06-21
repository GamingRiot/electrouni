<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('description')->default("")->nullable();
            $table->text('hobby')->default("")->nullable();
            $table->text('skills')->default("")->nullable();
            $table->string('gender')->default("")->nullable();
            $table->string('profile_photo')->nullable();
            $table->string('cover_photo')->nullable();
            $table->string('facebook')->default("")->nullable();
            $table->string('twitter')->default("")->nullable();
            $table->string('linkedin')->default("")->nullable();
            $table->integer('user_id');
            $table->timestamps();
        });
    }
    //new
    /*

            

    /**

     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
