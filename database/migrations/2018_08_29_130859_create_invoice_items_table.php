<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedDecimal('unit_price');
            $table->unsignedDecimal('tax_amount')->default(0);
            $table->unsignedInteger('quantity');
            $table->unsignedDecimal('total');
            $table->unsignedBigInteger('invoice_id');
            $table->text('description');
            $table->timestamps();
            $table->index('invoice_id');
            $table->index('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_items');
    }
}
