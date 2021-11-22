<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashOutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_outs', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("designation");
            $table->string("contact")->nullable();
            $table->string("cnic")->nullable();
            $table->string("salary")->nullable();
            $table->string("rental")->nullable();
            $table->string("utility_bills")->nullable();
            $table->string("purchases")->nullable();
            $table->string("repair_maintenance")->nullable();
            $table->string("total")->nullable();
            $table->string("paid")->nullable();
            $table->string("balance")->nullable();
            $table->string("rec_no")->nullable();
            $table->string("date")->nullable();
            $table->string("campus")->nullable();
            $table->string("payment_mode")->nullable();
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
        Schema::dropIfExists('cash_outs');
    }
}
