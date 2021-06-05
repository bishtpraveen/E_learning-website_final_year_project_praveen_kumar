<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_orders', function (Blueprint $table) {
            $table->id();
            
            $table->string('user_id')->default(0)->comment('0=NA,1=present');
            $table->string('user_email');
            $table->string('pro_id_obj');
            $table->string('pro_name_obj');
            $table->string('pro_price_obj');
            $table->string('total_amount');
            $table->string('order_id');
            $table->string('transaction_id')->nullable();
            $table->string('payment_status')->default(0)->comment('0=in_process,1=payment_done');
          

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
        Schema::dropIfExists('my_orders');
    }
}
