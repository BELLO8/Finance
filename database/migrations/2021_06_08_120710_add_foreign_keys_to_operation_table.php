<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOperationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('operation', function (Blueprint $table) {
            $table->foreign('idtypeoperation', 'et')->references('idtypeoperation')->on('typeoperation')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('idmodeoperation', 'qt')->references('idmodeoperation')->on('modeoperation')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('numerocompte', 'tt')->references('numerocompte')->on('compte')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('idagence', 'zt')->references('idagence')->on('agence')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('operation', function (Blueprint $table) {
            $table->dropForeign('et');
            $table->dropForeign('qt');
            $table->dropForeign('tt');
            $table->dropForeign('zt');
        });
    }
}
