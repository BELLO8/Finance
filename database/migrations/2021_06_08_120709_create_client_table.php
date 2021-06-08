<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->integer('idclient', true);
            $table->string('cni', 20);
            $table->string('nomclient', 20);
            $table->string('prenomsclient', 50);
            $table->date('datenaissance');
            $table->string('profession', 20);
            $table->string('telephone', 20);
            $table->string('email', 25);
            $table->text('lienphoto');
            $table->text('liensignature');
            $table->integer('idsexe')->index('sx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client');
    }
}
