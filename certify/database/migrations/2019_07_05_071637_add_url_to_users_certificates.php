<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUrlToUsersCertificates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_certificates', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('template_id');
            $table->string('url');
            $table->string('issuer');
            $table->boolean('deleted');
			$table->boolean('signed');         
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_certificates', function (Blueprint $table) {
			
			$table->dropColumn('user_id');
            $table->dropColumn('template_id');
            $table->dropColumn('url');
            $table->dropColumn('issuer');
            $table->dropColumn('deleted');
			$table->dropColumn('signed');     
            //
			
        });
    }
}
