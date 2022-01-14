<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeploitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deploits', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->float('ver',4,2);
            $table->unsignedBigInteger('leader_id');
            $table->date('startDate');
            $table->unsignedBigInteger('info_id');
            $table->unsignedBigInteger('credential_is');
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
        Schema::dropIfExists('deploits');
    }
}
