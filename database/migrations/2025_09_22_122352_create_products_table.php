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
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price');
            $table->decimal('discount_price')->nullable();
            $table->integer('stock')->default(0);  // الكمية المتاحة
            $table->string('sku')->unique();    //كود المنتج
            $table->string('image');
            $table->json('images')->nullable();
            $table->enum('status',['active' , 'inactive'])->default('active');
            $table->boolean('featured')->default(false);   //مميز او لا 
            $table->decimal('weight',8,2)->nullable();
            $table->string('dimensions')->nullable();
            $table->date('expire_date')->nullable();
            $table->unsignedBigInteger('views_count')->default(0); //عدد المشاهدات
            $table->unsignedBigInteger('sold_count')->default(0);  // عدد المبيعات
            $table->foreignId('created_by')->constrained('users','id')->cascadeOnDelete();
            $table->foreignId('department_id')->constrained('departments','id')->cascadeOnDelete();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
