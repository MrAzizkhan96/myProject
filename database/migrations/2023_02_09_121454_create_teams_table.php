<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('image', 200);
            $table->string('employee', 50);
            $table->string('position', 80);
            $table->longText('description');
            $table->string('facebook', 130);
            $table->string('twitter', 130);
            $table->string('linkedin', 130);
            $table->string('gmail', 130);
            $table->enum('status', ['Aktiv', 'Passiv'])->default('Passiv');
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
        Schema::dropIfExists('teams');
    }
}
