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
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id', true)->unsigned()->comment('ID');
            $table->integer('brand_id')->comment('ブランドID');
            $table->integer('category_id')->comment('カテゴリID');
            $table->string('item_name', 40)->comment('商品名');
            $table->string('item_detail', 200)->comment('商品詳細');
            $table->integer('price')->comment('金額');
            $table->string('image_1', 200)->comment('画像1');
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
        Schema::dropIfExists('items');
    }
};
