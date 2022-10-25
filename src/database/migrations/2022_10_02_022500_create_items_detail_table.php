<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $table = 'items_detail';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_detail', function (Blueprint $table) {
            $table->increments('id', true)->unsigned()->comment('ID');
            $table->integer('item_id')->comment('アイテムID');
            $table->string('color', 20)->comment('カラー');
            $table->string('size', 5)->comment('サイズ');
            $table->integer('total_quantity')->comment('総量');
            $table->integer('sales_quantity')->comment('販売数量');
            $table->integer('stock')->comment('在庫');
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
        Schema::dropIfExists('items_detail');
    }
};
