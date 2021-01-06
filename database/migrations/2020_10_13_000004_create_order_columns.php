<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $model = config('razorpay.order_model');
        $table = (new $model)->getTable();
        Schema::connection(config('razorpay.db_connection'))->table($table, function (Blueprint $table) {
            $table->string('razorpay_order_id')->nullable()->index();
        });
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function down()
    {}
}