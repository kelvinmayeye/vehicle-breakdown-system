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
        Schema::table('requests', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('mechanic_service_id')->references('id')->on('mechanic_service')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('request', function (Blueprint $table) {
        // $table->dropForeign(['customer_id']);
        // $table->dropForeign(['mechanic_id']);
        // $table->dropForeign(['service_id']);

        // $table->bigInteger('customer_id')->change();
        // $table->bigInteger('mechanic_id')->change();
        // $table->bigInteger('service_id')->change();
        });
    }
};
