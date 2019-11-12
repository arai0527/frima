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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_users');
        Schema::dropIfExists('like_products');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('image_product');
        Schema::dropIfExists('image_user');
        Schema::dropIfExists('images');
        Schema::dropIfExists('areas');
        Schema::dropIfExists('conditions');
        Schema::dropIfExists('delivery_payments');
        Schema::dropIfExists('delivery_methods');
        Schema::dropIfExists('delivery_days');
        Schema::dropIfExists('products');
        Schema::dropIfExists('brands');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('users');

    }
}
