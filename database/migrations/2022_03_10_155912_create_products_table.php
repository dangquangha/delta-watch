<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('po_name')->nullable();
            $table->string('po_slug')->unique();
            $table->string('po_image')->nullable();
            $table->text('po_description')->nullable();
            $table->tinyInteger('po_gender')->default(0)->comment("0: both, 1: male, 2: female");
            $table->tinyInteger('po_hot')->default(0);
            $table->longText('po_content')->nullable();
            $table->longText('po_policy')->nullable();
            $table->integer('po_quantity')->default(0);
            $table->integer('po_brand')->default(0);
            $table->string('po_category')->default(0);
            $table->integer('po_price')->default(0);
            $table->integer('po_status')->default(1);
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
        Schema::dropIfExists('products');
    }
}
