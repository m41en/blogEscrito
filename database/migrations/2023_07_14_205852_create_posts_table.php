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
            $table->id('id_post');
            $table->unsignedBigInteger('fk_id_user');
            //$table->unsignedBigInteger('fk_id_publicity')->nullable();
            $table->string('title');
            $table->string('body');
            $table->dateTime('datetime');

            $table->foreign('fk_id_user')->references('id_user')->on('users');
            //$table->foreign('fk_id_publicity')->references('id_publicity')->on('publicity');

            $table->timestamps();
            $table->softDeletes();
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
