<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosArticuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos_articulo', function (Blueprint $table) {
            $table->foreignId('articulo_id_1')
                ->constrained('articulos')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();
            $table->foreignId('articulo_id_2')
                ->constrained('articulos')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos_articulo');
    }
}
