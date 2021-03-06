<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormAdminstrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_adminstrasis', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis', ['Pertanyaan','Permintaan','Pengaduan']);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');;
            $table->string('name');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('judul');
            $table->text('deskripsi');
            $table->enum('status', ['Diproses','Selesai']);
            $table->string('PIC')->nullable();
            $table->string('jawaban')->nullable(); 
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
        Schema::dropIfExists('form_adminstrasis');
    }
}
