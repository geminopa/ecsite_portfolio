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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id', true)->unsigned()->comment('ID');
            $table->string('name', 40)->comment('名前');
            $table->string('email')->unique('email')->comment('メールアドレス');
            $table->string('password')->comment('パスワード');
            $table->string('post_code', 10)->nullable()->comment('郵便番号');
            $table->string('prefecture', 40)->nullable()->comment('都道府県');
            $table->string('city', 40)->nullable()->comment('市区町村');
            $table->string('address')->nullable()->comment('それ以降の住所');
            $table->string('tel', 15)->nullable()->comment('電話番号');
            $table->timestamps();
            $table->softDeletes()->nullable()->comment('削除日時');
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
};
