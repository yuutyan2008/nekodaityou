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
        Schema::create('attention', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hininkyosei')->comment('避妊去勢済');
            $table->string('kaze')->comment('風邪をひいている');
            $table->string('kega')->comment('怪我をしている');
            $table->string('gennkiganai')->comment('元気がない');
            $table->string('ninsin')->comment('妊娠中お腹が大きい');
            $table->string('koneko')->comment('子猫');
            $table->string('jyoutotaisyou')->comment('譲渡対象');
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
        Schema::dropIfExists('attention');
    }
}
