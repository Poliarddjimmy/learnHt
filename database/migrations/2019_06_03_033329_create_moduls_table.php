<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moduls', function (Blueprint $table) {
            $table->engine = ' MyISAM';
            $table->bigIncrements('id')->unique()->unsigned();
            $table->integer('cours_id')->unsign();
            $table->string('titre');
            $table->text('description');
            $table->longtext('content');
            $table->string('_token');
            $table->timestamps();
 
            $table->foreign('cours_id')->references('id')->on('cours')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moduls');
    }
}
