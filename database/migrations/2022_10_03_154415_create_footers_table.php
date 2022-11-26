<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('nama_perusahaan');
            $table->string('alamat_icon');
            $table->string('alamat_deskripsi');
            $table->string('email_icon');
            $table->string('email_deskripsi');
            $table->string('message_icon');
            $table->string('message_deskripsi');


            $table->string('sosial_1_icon');
            $table->text('sosial_1_link')->nullable();

            $table->string('sosial_2_icon');
            $table->text('sosial_2_link')->nullable();


            $table->string('sosial_3_icon');
            $table->text('sosial_3_link')->nullable();

            $table->string('copyright');

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
        Schema::dropIfExists('footer');
    }
}
