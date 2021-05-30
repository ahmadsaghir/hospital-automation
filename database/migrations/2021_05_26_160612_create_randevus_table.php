<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRandevusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('randevus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("hastaTC")->unique();
            $table->string("hastaAd");
            $table->string("hastaSad");
            $table->unsignedBigInteger('poliklinikID');
            $table->string('randevuTarihi');
            $table->string('saat');
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
        Schema::dropIfExists('randevus');
    }
}
