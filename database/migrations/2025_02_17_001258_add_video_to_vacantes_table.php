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
            $table->string('video')->nullable()->after('imagen5'); // Nuevo campo
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
            $table->dropColumn('video');
        });
    }
};
