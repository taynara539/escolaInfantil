<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('nomecompleto');
            $table->date('nascimento');
            $table->binary('foto');
            $table->text('pai');
            $table->text('mae');
            $table->text('logradouro');
            $table->text('numero');
            $table->text('complemento');
            $table->text('bairro');
            $table->text('cidade');
            $table->text('estado');
            $table->text('pais');
            $table->string('cep', 9);
            $table->date('inicio');
            $table->string('telefone', 15);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno');
    }
}
