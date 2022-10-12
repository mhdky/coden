<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('poster');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('date');
            $table->string('author');
            $table->text('body');
            $table->text('twitter');
            $table->text('facebook');
            $table->text('linkedin');
            $table->text('pinterest');
            $table->text('telegram');
            $table->text('whatsapp');
            $table->string('youtube_on_off');
            $table->text('youtube')->nullable();
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
        Schema::dropIfExists('contents');
    }
};
