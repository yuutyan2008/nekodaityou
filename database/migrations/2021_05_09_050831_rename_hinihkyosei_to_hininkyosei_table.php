<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameHinihkyoseiToHininkyoseiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinihkyosei', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });
        
        Schema::rename('hinihkyosei','hininkyosei');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinihkyosei');
        
        Schema::rename('hininkyosei','hinihkyosei');
    }
}
