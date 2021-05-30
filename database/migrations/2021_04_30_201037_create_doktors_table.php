<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoktorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doktors', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->bigInteger("doktorTc")->unique();
            $table->bigInteger("doktorTel");
            $table->string("doktorAd");
            $table->string("doktorSad");
            $table->text("doktorAdres");
            $table->text("email");
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
        Schema::dropIfExists('doktors');
    }
}
