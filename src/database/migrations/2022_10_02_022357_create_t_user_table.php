<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user', function (Blueprint $table) {
            $table->increments('id', true)->unsigned()->comment('ID');
            $table->string('user_last_name', 40)->comment('姓');
            $table->string('user_first_name', 40)->comment('名');
            $table->string('user_last_name_kana', 40)->comment('姓カナ');
            $table->string('user_first_name_kana', 40)->comment('名カナ');
            $table->string('email')->unique('email')->comment('メールアドレス');
            $table->string('password')->comment('パスワード');
            $table->integer('post_code')->comment('郵便番号');
            $table->string('prefecture', 40)->comment('都道府県');
            $table->string('city', 40)->comment('市区町村');
            $table->string('address')->comment('それ以降の住所');
            $table->integer('tel_1')->comment('電話番号1');
            $table->integer('tel_2')->comment('電話番号2');
            $table->integer('tel_3')->comment('電話番号3');
            $table->timestamps();
            $table->softDeletes()->comment('削除日時');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_user');
    }
};
