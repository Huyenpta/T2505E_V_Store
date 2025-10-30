<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
            {
                Schema::create('item_sale', function (Blueprint $table) {
                    $table->id(); 
                    $table->string('item_code', 6); 
                    $table->string('item_name', 50);
                    $table->decimal('quantity', 8, 2); 
                    $table->date('expired_date'); 
                    $table->string('note', 60)->nullable(); 
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
        Schema::dropIfExists('item_sales');
    }
}
