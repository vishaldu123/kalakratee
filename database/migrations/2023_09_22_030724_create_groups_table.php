<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->date('creation_date');
            $table->timestamps();

            // Users who are members of the group
            $table->unsignedBigInteger('creator_id'); // Foreign key for the group creator
            $table->foreign('creator_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('groups');
    }
}
