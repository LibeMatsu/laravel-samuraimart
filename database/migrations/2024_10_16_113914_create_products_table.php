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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->integer('price')->unsigned();
            // ↑unsigned()を追加することで、-5000などのマイナスの値が保存できないようになる
            $table->integer('category_id')->unsigned();
            // ↑Eloquentは外部キーカラムを自動的に決定します。
            // 規約により、親モデルの小文字クラス名に「_id」という接尾辞を付けます。
            // この場合では、Categoryモデルに対する外部キーカラムはcategory_idとなり、商品とカテゴリが紐づきます。
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
};
