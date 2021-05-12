<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttentionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        Schema::create('attentions', function (Blueprint $table) {
=======
        Schema::create('attention', function (Blueprint $table) {
>>>>>>> origin/master
=======
        Schema::create('attention', function (Blueprint $table) {
>>>>>>> origin/master
            $table->bigIncrements('id');
            $table->string('hininkyosei')->comment('避妊去勢済');
            $table->string('byouki')->comment('病気になっている');
            $table->string('kega')->comment('怪我をしている');
            $table->string('ninsin')->comment('妊娠中お腹が大きい');
            $table->string('koneko')->comment('子猫');
            $table->string('jyouto')->comment('譲渡対象');
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
<<<<<<< HEAD
<<<<<<< HEAD
        Schema::dropIfExists('attentions');
=======
        Schema::dropIfExists('attention');
>>>>>>> origin/master
=======
        Schema::dropIfExists('attention');
>>>>>>> origin/master
    }
}
