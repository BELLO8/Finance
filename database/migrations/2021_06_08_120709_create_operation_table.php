<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation', function (Blueprint $table) {
            $table->integer('numerooperation', true);
            $table->date('dateoperation');
            $table->text('visaoperation');
            $table->text('obsoperation');
            $table->string('numerocompte', 24)->index('tt');
            $table->integer('idtypeoperation')->index('et');
            $table->integer('idmodeoperation')->index('qt');
            $table->integer('idagence')->index('zt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operation');
    }
}
