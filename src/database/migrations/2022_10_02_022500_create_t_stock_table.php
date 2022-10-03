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
        Schema::create('t_stock', function (Blueprint $table) {
            $table->increments('id', true)->unsigned()->comment('ID');
            $table->integer('item_id')->comment('アイテムID');
            $table->integer('total_amount')->comment('総量');
            $table->integer('sales_amount')->comment('販売数量');
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
        Schema::dropIfExists('t_stock');
    }
};
