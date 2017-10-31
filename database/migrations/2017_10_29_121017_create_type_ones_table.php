<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeOnesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_ones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('section_id');
            $table->string('type');
            $table->integer('lang_id');
            $table->string('image');
            $table->string('sound');
            $table->string('key_true');
            $table->text('text_body');
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
        Schema::dropIfExists('type_ones');
    }
}
