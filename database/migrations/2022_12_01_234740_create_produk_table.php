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
        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('name');
            $table->string('price');
            $table->integer('stock');
            $table->string('desc');
            $table->unsignedbiginteger('cathegory_id')->require();
            $table->foreign('cathegory_id')->references('id')->on('cathegory')->onDelete('restrict');
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
        Schema::table('produk', function (Blueprint $table) {
            $table->dropForeign(['chategory_id']);
            $table->dropColumn('chategory_id');
        });
        Schema::dropIfExists('produk');
    }
};
