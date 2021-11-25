<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCashInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_ins', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->bigInteger("user_id");
            $table->string("program");
            $table->string("reg_no");
            $table->string("semester");
            $table->string("particulars")->nullable();
            $table->string("admission_fee")->nullable();
            $table->string("registration_fee")->nullable();
            $table->string("security_fee")->nullable();
            $table->string("tuition_fee")->nullable();
            $table->string("semester_enrollment_fee")->nullable();
            $table->string("student_fee")->nullable();
            $table->string("examination_fee")->nullable();
            $table->string("library_fee")->nullable();
            $table->string("others")->nullable();
            $table->string("total")->nullable();
            $table->string("total_in_words")->nullable();
            $table->string("rec_no")->nullable();
            $table->string("date")->nullable();
            $table->string("campus")->nullable();
            $table->string("payment_mode")->nullable();
            $table->string("paid")->nullable();
            $table->string("balance")->nullable();
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
        Schema::dropIfExists('cash_ins');
    }
}
