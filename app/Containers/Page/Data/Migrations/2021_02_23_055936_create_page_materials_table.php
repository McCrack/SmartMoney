<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePageMaterialsTable extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('page_material', function (Blueprint $table) {

            $table->unsignedInteger('page_id');
            $table->unsignedInteger('material_id');

            $table->foreign('page_id')
              ->references('id')
              ->on('pages')
              ->onDelete('cascade')
              ->onUpdate('cascade');

            $table->foreign('material_id')
              ->references('id')
              ->on('materials')
              ->onDelete('cascade')
              ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('page_materials');
    }
}
