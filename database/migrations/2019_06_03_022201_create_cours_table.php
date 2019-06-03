<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->engine = ' MyISAM';
            $table->bigIncrements('id')->unique()->unsigned();
            $table->integer('user_id')->unsign();
            $table->string('nom_cours');
            $table->string('category');
            $table->string('photo')->default('assets/images/livre.png');
            $table->text('description_cours');
            $table->integer('price');
            $table->string('token');
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
        Schema::dropIfExists('cours');
    }
}
