<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table){
            $table->increments('id');
            $table->string('judul');
            $table->text('isi');
            $table->string('kategori');
            $table->string('foto');
            $table->string('screenshoot1');
            $table->string('screenshoot2');
            $table->string('screenshoot3');
            $table->string('screenshoot4');
            $table->string('screenshoot5');
            $table->integer('author');
            $table->integer('status');
            $table->dateTime('tanggal');
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
        Schema::dropIfExists('article');
    }
}
