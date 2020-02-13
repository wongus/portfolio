<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('course_id');
            $table->text('test');
            $table->string('weighting');
            $table->float('score')->default(0);
            $table->boolean('passed')->default(false);
            $table->timestamps();

            $table->foreign('course_id')
                ->references('id')
                ->on('grades')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
