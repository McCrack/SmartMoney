<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagesetTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('imagesets', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->char('language', 2)
              ->default('en');
            $table->string('category');
            $table->json('content')
              ->nullable();
            $table->timestamps();
            //$table->softDeletes();

            $table->unique(['name', 'language']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('imagesets');
    }
}
