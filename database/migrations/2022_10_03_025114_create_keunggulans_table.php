<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeunggulansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keunggulan', function (Blueprint $table) {
            $table->id();
            $table->string('judul');

            $table->string('keunggulan_1_icon');
            $table->text('keunggulan_1_deskripsi');

            $table->string('keunggulan_2_icon');
            $table->text('keunggulan_2_deskripsi');

            $table->string('keunggulan_3_icon');
            $table->text('keunggulan_3_deskripsi');

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
        Schema::dropIfExists('keunggulan');
    }
}
