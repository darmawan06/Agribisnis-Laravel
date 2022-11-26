<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlasanMembelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alasan_membeli', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');

             $table->string('alasan_1_icon');
            $table->text('alasan_1_deskripsi');

            $table->string('alasan_2_icon');
            $table->text('alasan_2_deskripsi');

            $table->string('alasan_3_icon');
            $table->text('alasan_3_deskripsi');
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
        Schema::dropIfExists('alasan_membeli');
    }
}
