<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')
              ->references('id')->on('users')
              ->onDelete('cascade');
            $table->string('title')->unique()->nullable();
            $table->longText('content')->nullable();
            $table->string('category', 30)->nullable();
            $table->string('slug')->unique()->nullable();
            $table->boolean('active');
            $table->string('image')->nullable();
            $table->bigInteger('hits')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
