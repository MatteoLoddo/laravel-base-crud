<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 100);
            $table->string('description', 255);
            $table->integer('price');
            $table->string('series', 50);
            $table->date('sales_date');
            $table->string('type', 50);
            $table->string('artist', 255);
            $table->string('writers', 255);
            $table->string('thumb', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
