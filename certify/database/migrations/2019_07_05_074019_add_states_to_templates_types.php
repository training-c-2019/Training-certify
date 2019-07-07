<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatesToTemplatesTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('templates', function (Blueprint $table) {
            //
					$table->integer('refrence_id');
			$table->integer('user_id');
			$table->boolean('requires_signature');
			$table->boolean('deleted');
			$table->Json('layout');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('templates', function (Blueprint $table) {
            //
					$table->dropColumn('refrence_id');
			$table->dropColumn('user_id');
			$table->dropColumn('requires_signature');
			$table->dropColumn('deleted');
			$table->dropColumn('layout');
        });
    }
}
