<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->string('category');
            $table->string('host_name');
            $table->string('location');
            $table->json('ticket_type')->nullable();
            $table->json('total_ticket')->nullable();
            $table->json('section_seat')->nullable();
            $table->json('benefit')->nullable();
            $table->json('wallet')->nullable();
            $table->json('percentage')->nullable();
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
        Schema::dropIfExists('request_events');
    }
}
