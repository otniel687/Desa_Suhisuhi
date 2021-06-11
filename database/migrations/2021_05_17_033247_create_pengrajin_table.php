<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengrajinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengrajin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama')->nullable();
            $table->string('alamat',100);
            $table->string('kontak')->nullable();
            $table->enum('kerajinan',['Ulos Batak Toba','Ulos Batak Karo', 'Ulos Batak Toba dan Karo (pewarna sintesis)', 'Ulos Batak Toba dan Karo (pewarna alami)']);
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('pengrajin');
    }
}
