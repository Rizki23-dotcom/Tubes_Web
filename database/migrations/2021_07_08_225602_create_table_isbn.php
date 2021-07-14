<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableIsbn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isbn', function (Blueprint $table) {
            $table->integer('id_isbn')->unsigned()->primary('id_isbn');
            $table->string('no_isbn')->unique();
            $table->timestamps();
        
            $table->foreign('id_isbn')
                ->references('id')->on('books')
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
        Schema::dropIfExists('isbn');
    }
}
