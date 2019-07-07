<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('templates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->json('body_ara');
			$table->json('body_eng');
			$table->longText('description');
			$table->longText('status');
			$table->int('refrence_id');
			$table->int('user_id');
			$table->bit('requires_signature');
			$table->bit('deleted');
			$table->json('layout');
			$table->softDeletes();
			

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('templates');
		Schema::table('templates',function(Blueprint $table){
			$table->dropColumen('description');

					
		});

    }
}
