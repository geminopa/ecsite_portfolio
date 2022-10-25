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
        Schema::create('order_histories', function (Blueprint $table) {
            $table->increments('id', true)->unsigned()->comment('ID');
            $table->integer('user_id')->unsigned()->comment('ユーザーID');
            $table->integer('item_id')->unsigned()->comment('アイテムID');
            $table->integer('items_detail_id')->unsigned()->comment('アイテム詳細ID');
            $table->integer('quantity')->comment('数量');
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
        Schema::dropIfExists('order_histories');
    }
};
