<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUrlTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('url', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name_site');
			$table->string('code')->nullable();
			$table->timestamp('create_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('view')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('url');
	}

}
