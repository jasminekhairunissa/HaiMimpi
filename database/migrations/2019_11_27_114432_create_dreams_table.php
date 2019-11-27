<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDreamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dreams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('category_id')->unsigned();
            $table->bigInteger('user_id');
            $table->enum('status', ['COMPLETE', 'PROGRESS', 'UNSTARTED'])->default('UNSTARTED');
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
        Schema::dropIfExists('dreams');
    }
}
