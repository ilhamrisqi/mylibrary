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
        Schema::create('writers', function (Blueprint $table) {
            $table->id();

            //kita masukkan data yang udah kita create di models/writers
            $table->string("nama");
            $table->string("negara");
            $table->string("deskripsi");
            $table->string("contact");
            $table->string("image");

            $table->timestamps();
        });

        //file migration akan membuat tabel yang bernama writer dan kolom"
        // di definisikan dengan $table
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('writers');
    }
};
