<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('cod_prod',100);
            $table->string('nombre',100);
            $table->integer('precio');
            $table->integer('cant');
            $table->date('fec_venc');
            $table->char('edo',2);
            $table->foreignId('id_marca')->constrained('marcas');
            $table->foreignId('id_categ')->constrained('categorias');
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
        Schema::dropIfExists('productos');
    }
}
