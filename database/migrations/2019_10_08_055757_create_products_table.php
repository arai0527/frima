<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBiginteger('user_id');
            $table->unsignedBiginteger('category_id');
            $table->unsignedBiginteger('brand_id');
            $table->unsignedBiginteger('condition_id');
            $table->unsignedBiginteger('delivery_payment_id');
            $table->unsignedBiginteger('delivery_method_id');
            $table->unsignedBiginteger('area_id');
            $table->unsignedBiginteger('delivery_day_id');
            $table->Biginteger('price');
            $table->string('text');
            $table->Biginteger('sold_flg');
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
        Schema::dropIfExists('products');
    }
}
