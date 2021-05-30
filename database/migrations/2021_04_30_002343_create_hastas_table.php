<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHastasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hastas', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->bigInteger("hastaTC")->unique();
            $table->bigInteger("hastaTel");
            $table->string("hastaAd");
            $table->string("hastaSad");
            $table->string("dogumTarihi");
            $table->string("dogumYeri");
            $table->string("cinsiyet");
            $table->string("medeniHal");
            $table->text("adres");
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
        Schema::dropIfExists('hastas');
    }
}
