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
        Schema::create('kitaplars', function (Blueprint $table) {
            $table->id();
            $table->string('KitapAdi');
            $table->string('Url');
            $table->BigInteger('BarkodNo');
            $table->BigInteger('SayfaSayisi');
            $table->decimal('SatisFiyati')->nullable();
            $table->string('image')->nullable();
            $table->bigInteger('kategori_id')->unsigned()->nullable();
            $table->bigInteger('yazar_id')->unsigned()->nullable();
            $table->enum('kiraliMi',['Evet','Hayır'])->default('Hayır');
            $table->timestamps();
            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
            $table->foreign('yazar_id')->references('id')->on('yazarlars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kitaplars');
    }
};
