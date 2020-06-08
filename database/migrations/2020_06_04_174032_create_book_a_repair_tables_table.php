<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookARepairTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_a_repair_tables', function (Blueprint $table) {
            $table->id();
            $table->integer('phone_id');
            $table->string('phone_problem');
            $table->string('selected_phone_type');
            $table->string('selected_phone_color');
            $table->string('customer_name');
            $table->string('customer_address');
            $table->string('date');
            $table->string('time');
            $table->string('customer_location');
            $table->string('customer_number');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('book_a_repair_tables');
    }
}
