<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {     //كل منتج بيتم اضافتة في الكارت بيتم اضافتة ايضا هنا
          //  ودا  مفصل اكتر علشان الكارت ممكن يكون فية اكتر من منتجو دا بيكون مفصل اكتر علشان بكون واصل للمنتجات من خلال االعلاقة بين الجدولين
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity')->default(1);
            $table->decimal('price' ,10 ,2);
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->foreignId('cart_id')->constrained('carts')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
