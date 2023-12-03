<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->longText('description');
            $table->date('startDate');
            $table->date('finishDate')->nullable();
            $table->time('startTime');
            $table->time('finishTime');
            $table->string('place');
            $table->string('link')->nullable();
            $table->boolean('registration')->default(false);
            $table->boolean('countdown')->default(false);
            $table->boolean('available_time')->default(false);
            $table->boolean('photo')->default(false);
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
        Schema::dropIfExists('events');
    }
}
