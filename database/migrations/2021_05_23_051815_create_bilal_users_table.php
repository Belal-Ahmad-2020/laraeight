<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilalUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bilal_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bilal_post_id');
            $table->string('name');
            $table->string('lname');
            $table->timestamps();

            $table->foreign('bilal_post_id')->references('id')->on('bilal_posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bilal_users');
    }
}
