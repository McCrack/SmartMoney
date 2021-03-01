<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageTables extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('parent_id')->nullable();
            $table->unsignedSmallInteger('sort_id')
              ->index()
              ->default(1);
            $table->string('name', 128);
            $table->string('slug', 128);
            $table->char('language', 2)->default('en');
            $table->enum('type', ['page','category','landing','application'])
              ->default('page');
            $table->string('title', 128)
              ->nullable();
            $table->string('description', 180)
              ->nullable();
            $table->string('preview', 128)
              ->nullable();
            $table->string('template', 32)
              ->nullable();
            $table->json('specifics')
                ->nullable();
            $table->boolean('published')
              ->default(false);
            $table->timestamps();
            //$table->softDeletes();

            $table->unique(['slug','language']);
            $table->foreign('parent_id', 'parent')
              ->references('id')
              ->on('pages')
              ->onDelete('cascade')
              ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
