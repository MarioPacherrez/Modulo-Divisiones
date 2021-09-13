<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisions', function (Blueprint $table) {
            $table->bigIncrements('id_division');
            $table->string('name',45)->unique();
            $table->integer('level')->nullable();
            $table->integer('collaborators')->nullable();
            $table->string('ambassador',150)->nullable();
            $table->unsignedSmallInteger('id_upper_division')->nullable();
            $table->unsignedSmallInteger('id_subdivision')->nullable();
            $table->timestamps();

            $table->foreign('id_upper_division')->references('id_division')->on('divisions');
            $table->foreign('id_subdivision')->references('id_division')->on('divisions');

            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('divisions');
    }
}