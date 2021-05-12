<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttentionsCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attentions_cats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            
            $table->unsignedBigInteger('attention_id')->comment('注意事項ID');//外部キー
            $table->unsignedBigInteger('cat_id')->comment('猫ID');//外部キー
            
            // 外部キー制約
            $table->foreign('attention_id')->references('id')->on('attentions')->onDelete('cascade');
            $table->foreign('cat_id')->references('id')->on('cats')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attentions_cats');
    }
}
