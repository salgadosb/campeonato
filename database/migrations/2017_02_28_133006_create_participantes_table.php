<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cedula')->unique();
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('genero');
            $table->date('fecha');
            $table->integer('peso');
            $table->decimal('altura');
            $table->integer('kyu_id')->unsigned();
            $table->integer('club_id')->unsigned();
            $table->integer('categ_id')->unsigned();
            $table->integer('modal_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            /* LLAVE FORANEA */
            $table->foreign('kyu_id')->references('id')->on('kyus');
            $table->foreign('club_id')->references('id')->on('clubs');
            $table->foreign('categ_id')->references('id')->on('categorias');
            $table->foreign('modal_id')->references('id')->on('modalidads');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('participantes');
    }
}
