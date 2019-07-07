<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_certificates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->int('user_id');
            $table->int('template_id');
            $table->string('url');
            $table->string('issuer');
            $table->bit('deleted');
			$table->bit('signed');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_certificates');
    }
}
