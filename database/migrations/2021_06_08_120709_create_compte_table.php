<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compte', function (Blueprint $table) {
            $table->string('numerocompte', 24)->primary();
            $table->date('dateouverture');
            $table->text('visaouverture');
            $table->date('datefermeture');
            $table->text('visafermeture');
            $table->text('obscpte');
            $table->integer('soldecpte');
            $table->integer('idclient')->index('rt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compte');
    }
}
