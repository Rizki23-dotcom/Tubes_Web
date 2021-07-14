<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableJenisBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenisBuku', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_buku');
            $table->timestamps();
        });
        Schema::table('books',function(Blueprint $table){
            $table->integer('id_jenis')->unsigned();
            $table->foreign('id_jenis')
             ->references('id')
             ->on('jenisBuku')
             ->onDelete('cascade')
             ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenisBuku');
        $table->dropForeign('books_bd_jenis_foreign');

    }
}
