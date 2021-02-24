<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CtreatePageImagesetsTable extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('page_imagesets', function (Blueprint $table) {

            $table->unsignedInteger('page_id');
            $table->unsignedInteger('imageset_id');

            $table->foreign('page_id')
              ->references('id')
              ->on('pages')
              ->onDelete('cascade')
              ->onUpdate('cascade');

            $table->foreign('imageset_id')
              ->references('id')
              ->on('imagesets')
              ->onDelete('cascade')
              ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('page_imagesets');
    }
}
