<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMutationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mutations', function (Blueprint $table) {
            $table->id();
            $table->string('id_mut');
            $table->enum('type_mut', ['masuk', 'keluar']);
            $table->timestamp('date_mut');
            $table->string('petugas');
            $table->foreignId('item_id');
            $table->integer('diameter')->nullable();
            $table->integer('tebal')->nullable();
            $table->integer('lebar')->nullable();
            $table->integer('panjang')->nullable();
            $table->integer('pcs');
            $table->float('vol_m3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mutations');
    }
}
