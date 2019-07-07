<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatesToCertificateTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('certificate_types', function (Blueprint $table) {
            $table->string('type_ara');
            $table->string('type_eng');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('certificate_types', function (Blueprint $table) {
            $table->dropColumn('type_ara');
            $table->dropColumn('type_eng');
        });
    }
}
