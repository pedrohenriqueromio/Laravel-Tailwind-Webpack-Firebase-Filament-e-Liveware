<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');// Id da tabela (chave primária e incremento)

            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->text('meta_description')->nullable();
            $table->text('image')->nullable();
            $table->boolean('is_published')->default(false);
   
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
        Schema::dropIfExists('posts');
    }
}
