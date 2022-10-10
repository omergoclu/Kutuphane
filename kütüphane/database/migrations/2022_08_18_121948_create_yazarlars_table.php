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
        Schema::create('yazarlars', function (Blueprint $table) {
            $table->id();
            $table->string('YazarAdi');
            $table->string('YazarSoyadi');
            $table->BigInteger('Yasi')->nullable();
            $table->date('DogumTarihi');
            $table->date('OlumTarihi')->nullable();
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
        Schema::dropIfExists('yazarlars');
    }
};
