<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableIdentityBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identity_book', function (Blueprint $table) {
            $table->integer('id_book')->unsigned()->index();
            $table->integer('id_identity')->unsigned()->index();
            $table->timestamps();
            $table->primary(['id_book','id_identity']);
            
            $table->foreign('id_book')
                 ->references('id')
                 ->on('books')
                 ->onDelete('cascade')
                 ->onUpdate('cascade');

            $table->foreign('id_identity')
                ->references('id')
                ->on('identity')
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
        Schema::dropIfExists('identity_book');
    }
}
