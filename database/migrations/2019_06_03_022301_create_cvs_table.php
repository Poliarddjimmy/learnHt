<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->engine = ' MyISAM';
            $table->bigIncrements('id')->unique()->unsigned();
            $table->integer('user_id')->unsign();
            $table->string('last_name')->nullable();
            $table->string('first_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('photo')->default('assets/images/user_image.png');
            $table->string('city')->nullable();
            $table->string('email')->nullable();
            $table->string('post1')->nullable();
            $table->string('post2')->nullable();
            $table->string('post3')->nullable();
            $table->string('etude1')->nullable();
            $table->string('champ1')->nullable();
            $table->string('niveau1')->nullable();
            $table->string('year_etude1')->nullable();
            $table->string('country_etude1')->nullable();
            $table->string('city_etude1')->nullable();
            $table->string('bac1')->nullable();
            $table->string('city_bac1')->nullable();
            $table->string('country_bac1')->nullable();
            $table->string('year_bac1')->nullable();
            $table->string('bac2')->nullable();
            $table->string('city_bac2')->nullable();
            $table->string('country_bac2')->nullable();
            $table->string('year_bac2')->nullable();
            $table->string('company_experience1')->nullable();
            $table->string('task_experience1')->nullable();
            $table->string('year_experience1')->nullable();
            $table->string('position_experience1')->nullable();
            $table->string('city_experience1')->nullable();
            $table->string('country_experience1')->nullable();
            $table->string('company_experience2')->nullable();
            $table->string('task_experience2')->nullable();
            $table->string('year_experience2')->nullable();
            $table->string('position_experience2')->nullable();
            $table->string('city_experience2')->nullable();
            $table->string('country_experience2')->nullable();
            $table->string('company_experience3')->nullable();
            $table->string('year_experience3')->nullable();
            $table->string('position_experience3')->nullable();
            $table->string('city_experience3')->nullable();
            $table->string('country_experience3')->nullable();
            $table->string('langue1')->nullable();
            $table->string('langue2')->nullable();
            $table->string('langue3')->nullable();
            $table->string('langue4')->nullable();
            $table->string('interet')->nullable();
            $table->string('aptitude')->nullable();
            $table->string('reference_name')->nullable();
            $table->string('reference_occupation')->nullable();
            $table->string('reference_email')->nullable();
            $table->string('reference_phone')->nullable();
            $table->longtext('objective')->nullable();
            $table->string('skill')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('Users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cvs');
    }
}
