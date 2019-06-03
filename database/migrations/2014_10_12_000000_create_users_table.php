<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = ' MyISAM';
            $table->bigIncrements('id')->unique()->unsigned();
            $table->string('code');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('pseudo')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 60);
            $table->string('address')->default('');
            $table->string('phone')->default('');
            $table->string('country')->default('');
            $table->string('photo')->default('assets/images/user_image.png');
            $table->string('city')->default('');
            $table->string('dob')->default('');
            $table->string('cover')->default('');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
