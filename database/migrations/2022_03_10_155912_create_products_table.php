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
            $table->string('po_name');
            $table->string('po_slug')->unique();
            $table->string('po_image');
            $table->text('po_description');
            $table->tinyInteger('po_gender')->default(0)->comment("0: both, 1: male, 2: female");
            $table->tinyInteger('po_hot')->default(0);
            $table->longText('po_content');
            $table->longText('po_policy')->nullable();
            $table->integer('po_quantity');
            $table->integer('po_brand')->default(0);
            $table->string('po_category')->default(0);
            $table->integer('po_price');
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
