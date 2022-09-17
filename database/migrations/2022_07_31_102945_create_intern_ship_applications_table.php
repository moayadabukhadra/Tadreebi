<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternShipApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intern_ship_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_user_id')->constrained()->onDelete('cascade');
            $table->foreignId('intern_ship_post_id')->constrained()->onDelete('cascade');
            $table->string('status')->default('pending');
            $table->string('feedback')->nullable();
            $table->string('cover_letter')->nullable();
            $table->string('resume')->nullable();
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
        Schema::dropIfExists('intern_ship_applications');
    }
}
