<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnvioDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envio_documentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf')->nullable();
            $table->string('nome_devedor');
            $table->string('cpf_devedor')->nullable();
            $table->string('num_processo');
            $table->string('telefone_credor')->nullable();
            $table->string('email_credor')->nullable();
            $table->string('tipo_arquivo')->default('H');
            $table->text('mensagem')->nullable();
            $table->string('cliente_ip')->nullable();
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
        Schema::dropIfExists('envio_documentos');
    }
}
