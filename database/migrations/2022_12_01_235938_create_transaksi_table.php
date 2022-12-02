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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedbiginteger('produk_id')->require();
            $table->foreign('produk_id')->references('id')->on('produk')->onDelete('restrict');
            $table->unsignedbiginteger('pengguna_id')->require();
            $table->foreign('pengguna_id')->references('id')->on('pengguna')->onDelete('restrict');
            $table->string('qty')->require();
            $table->string('total_payment')->require();
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
        Schema::table('transaksi', function (Blueprint $table) {
            $table->dropForeign(['produk_id']);
            $table->dropColumn('produk_id');

            $table->dropForeign(['pengguna_id']);
            $table->dropColumn('pengguna_id');
        });
        
        Schema::dropIfExists('transaksi');
    }
};
