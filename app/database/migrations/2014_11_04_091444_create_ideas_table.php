<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ideas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->index();
			$table->string('title');
			$table->string('author');
			$table->string('content');
			$table->string('img_url');
			$table->integer('subscribers');
			$table->integer('likes')->unsigned();
			$table->integer('views')->unsigned();
			$table->integer('comments')->unsigned();
			$table->boolean('promoted_to_project');
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
		Schema::drop('ideas');
	}

}
