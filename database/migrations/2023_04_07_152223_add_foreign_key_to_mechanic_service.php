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
        Schema::table('mechanic_service', function (Blueprint $table) {
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
        Schema::table('mechanic_service', function (Blueprint $table) {
            //
        });
    }
};
