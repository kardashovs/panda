<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeSections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('typeable_id')->unsigned();
            $table->string('typeable_type');
            $table->integer('section_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('type_sections', function (Blueprint $table) {
            $table->foreign('section_id')
                ->references('id')->on('sections')
                ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_sections');
    }
}
