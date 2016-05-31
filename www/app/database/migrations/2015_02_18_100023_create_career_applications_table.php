<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCareerApplicationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('career_applications', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('phone');
			$table->string('email');
			$table->string('description');
			$table->integer('posting_id');
			$table->string('cv');

			$table->string('experience', 1024);
			$table->string('location', 1024);
			$table->string('salary', 1024);
			$table->string('industry', 1024);
			$table->string('education', 1024);
			$table->string('functional_area', 1024);

			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('career_applications');
	}

}
