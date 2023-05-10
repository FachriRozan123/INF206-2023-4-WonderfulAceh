<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('tour_guide', function (Blueprint $table) {
        $table->bigIncrements('id')->comment('The Primary Key for the table.');
        $table->string('nama');
        $table->string('alamat');
        $table->string('nomor_hp');
        $table->foreignId('nama_tempat_id');
        $table->text('deskripsi');
        $table->string('image');
        $table->timestamps();
    });
    
}
public function down()
{
    Schema::dropIfExists('tour_guide');
}


};
