<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',100);
            $table->string('jabatan',100);
            $table->enum('jenis_kelamin', array ('Laki-laki','Perempuan'))->default('Perempuan');
             $table->string('bagian',100);
              $table->string('alamat',100);
              $table->unsignedBigInteger('id_barang')->nullable();
            $table->foreign('id_barang')->references('id')->on('goods')->onDelete('cascade')->onUpdate('no action');
            $table->unsignedBigInteger('id_category')->nullable();
            $table->foreign('id_category')->references('id')->on('categorys')->onDelete('cascade')->onUpdate('no action');
            $table->unsignedBigInteger('id_detail')->nullable();
            $table->foreign('id_detail')->references('id')->on('details')->onDelete('cascade')->onUpdate('no action');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('no action');
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
        Schema::dropIfExists('works');
    }
}
