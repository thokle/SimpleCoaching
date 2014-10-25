<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title');
            $table->string('firstname',40);
            $table->string('middelname',40);
            $table->string('lastname',50);
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('street',100);



			$table->timestamps();


		});




        Schema::create('coaches', function(Blueprint $table)
        {
            $table->increments('coach_id');

            $table->unsignedInteger('fk_athlete_id');

            $table->foreign('fk_athlete_id')->references('id')->on('users');


            $table->string('coach_type',20);
            $table->text('bio');

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
        Schema::drop('users');

        Schema::drop('user_schema');
        Schema::drop('coach');

	}

}
