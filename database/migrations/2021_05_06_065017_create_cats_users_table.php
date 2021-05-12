<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            
<<<<<<< HEAD
<<<<<<< HEAD
            $table->unsignedBigInteger('user_id')->unsigned()->comment('ユーザーID');//外部キー
            $table->unsignedBigInteger('cat_id')->unsigned()->comment('猫ID');//外部キー
            
            // 外部キー制約
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('cat_id')->references('id')->on('cats')->onDelete('cascade');
    });
}
=======
=======
>>>>>>> origin/master
            $table->integer('user_id')->comment('ユーザーID');
            $table->integer('cat_id')->comment('猫ID');
        });
    }
<<<<<<< HEAD
>>>>>>> origin/master
=======
>>>>>>> origin/master

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cats_users');
    }
}
