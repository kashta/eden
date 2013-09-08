<?php

use Illuminate\Database\Migrations\Migration;

class Init extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function ($table) {
            $table->increments('id')->index()->unsigned();
            $table->string('email', 1000);
            $table->string('password', 1000);
            $table->timestamps();
        });

        //create employee table
        Schema::create('contactUs', function ($table) {
            $table->increments('id')->index()->unsigned();
            $table->string('name', 1000);
            $table->string('email', 1000);
            $table->string('mobile')->nullable();
            $table->string('source');
            $table->text('message');
            $table->timestamps();
        });

        Schema::create('subscribe', function ($table) {
            $table->increments('id')->index()->unsigned();
            $table->string('email', 1000);
            $table->timestamps();
        });
        DB::table('users')->insert(
            array(array('id' => 1,
                'email' => 'admin@admin.com', 'password' => Hash::make('mummypapa1'), 'created_at' => new DateTime(), 'updated_at' => new DateTime()
            )));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('subscribe');
        Schema::drop('contactUs');
    }

}