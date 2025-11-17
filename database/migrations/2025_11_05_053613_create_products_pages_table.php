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
        Schema::create('products_pages', function (Blueprint $table) {
            $table->id();
            $table->string('header');
            $table->string('sub_header');
            $table->string('para');
            $table->string('title1');
            $table->string('title2');
            $table->string('title3');
            $table->string('manager_image');
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
        Schema::dropIfExists('products_pages');
    }
};
