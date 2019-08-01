<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodoTable extends Migration
{

    public function up()
    {
        Schema::create('todo', function(Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('url_image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('todo');
    }
}
