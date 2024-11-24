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
        Schema::table('vacantes', function (Blueprint $table) {
            $table->dropForeign('vacantes_salario_id_foreign');
            $table->dropForeign('vacantes_categoria_id_foreign');
            $table->dropColumn([ 'salario_id', 'categoria_id', 'empresa', 'ultimo_dia']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vacantes', function (Blueprint $table) {
            $table->foreignId('salario_id')->constrained()->onDelete('cascade');
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
            $table->string('empresa');
            $table->date('ultimo_dia');
        });
    }
};
