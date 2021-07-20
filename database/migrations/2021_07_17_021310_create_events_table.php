<?php

use App\Enums\EventStatus;
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
        Schema::create('Event', function (Blueprint $table) {
            $table->id();
            $table->string('eventName');
            $table->string('bandName');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('portfolio');
            $table->string('ticketPrice');
            $table->integer('status')->default(EventStatus::UP_COMING);
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
        Schema::dropIfExists('Event');
    }
}
