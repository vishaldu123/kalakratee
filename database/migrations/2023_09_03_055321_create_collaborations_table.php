<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaborationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborations', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->text('project_details')->nullable();
            $table->date('creation_date');
            $table->timestamps();

            // Users participating in the collaboration
            $table->unsignedBigInteger('user_id'); // Foreign key for the collaboration creator
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Define other relationships and foreign key constraints as needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collaborations');
    }
}
