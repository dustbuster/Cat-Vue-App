<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
    1. Name
    2. Image (You can use ​https://thecatapi.com/​ or any other image system)
    3. Breed
    4. Age
    5. Color
    6. Active/Inactive status of the listing.

     * @return void
     */
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->id();
            $table->string('image_url')->nullable();
            $table->string('breed')->nullable();
            $table->string('age')->nullable();
            $table->string('color')->nullable();
            $table->integer('active')->default(1);
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
        Schema::dropIfExists('cats');
    }
}
