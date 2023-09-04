<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInteractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interactions', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['like', 'comment', 'share']);
            $table->timestamps();

            // User who performed the interaction
            $table->unsignedBigInteger('user_id'); // Foreign key for the interacting user
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            // Artwork associated with the interaction (if applicable)
            $table->unsignedBigInteger('artwork_id')->nullable(); // Foreign key for the associated artwork
            $table->foreign('artwork_id')->references('id')->on('artworks')->onDelete('cascade');

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
        Schema::dropIfExists('interactions');
    }
}
