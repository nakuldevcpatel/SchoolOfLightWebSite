<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColumnsToContents extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		  Schema::table('contents',function(Blueprint $table){         
	      $table->string('header1')->after('slug');
	      $table->string('header2')->after('header1');
	      $table->string('header_img')->after('header2');
	      $table->string('icon_img')->after('header_img');
	      $table->text('title')->after('icon_img');
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contents',function(Blueprint $table){         
      $table->dropColumn('header1');
      $table->dropColumn('header2');
      $table->dropColumn('header_img');
      $table->dropColumn('icon_img');
      $table->dropColumn('title');
    });
	}

}
