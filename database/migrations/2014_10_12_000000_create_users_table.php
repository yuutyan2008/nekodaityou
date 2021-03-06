<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('UserID');
            $table->string('name')->comment('User名');
            $table->string('email')->unique()->comment('メールアドレス');
            //timestampメソッド：Blueprintにより作成日時と更新日時を自動設定
            //メールの認証機能。登録確認メール受信で日時が自動入力される
            $table->timestamp('email_verified_at')->nullable()->comment('メールアドレス確認用');
            $table->string('password')->comment('パスワード');
            $table->rememberToken();//ログイン情報を保持
            $table->timestamps();
            $table->integer('belonging_id')->comment('所属ID');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
