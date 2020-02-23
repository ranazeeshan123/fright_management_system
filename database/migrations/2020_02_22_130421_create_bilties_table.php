<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bilties', function (Blueprint $table) {
            $table->string('id');
            $table->string('bilty_no');
            $table->string('customer_id')->nullable();
            $table->string('challan_id')->nullable();
            $table->timestamps();

            $table->primary('id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('challan_id')->references('id')->on('challans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bilties');
    }
}
