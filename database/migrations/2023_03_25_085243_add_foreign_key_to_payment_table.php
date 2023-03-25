<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payment', function (Blueprint $table) {
            $table->bigInteger('customer_id')->unsigned()->change();
            $table->bigInteger('mechanic_id')->unsigned()->change();
            $table->bigInteger('service_id')->unsigned()->change();

            $table->foreign('customer_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('mechanic_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payment', function (Blueprint $table) {
            //
        });
    }
};
