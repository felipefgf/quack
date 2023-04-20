<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarRoupas extends Migration {

    public function up()
    {
        Schema::create("roupas", function(Blueprint $table) {
            $table->increments("id");
            $table->integer("categoria_id");
            $table->text('tamanho');
            $table->text('cor');
            $table->text('nome');
            $table->text('preco');
            $table->text('precocomdesconto');
            $table->text('marca');


            $table->timestamps(); // Cria o created_at e updated_at
            $table->softDeletes(); // Cria o deleted_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("roupas");
    }
}
