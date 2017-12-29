<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_master', function (Blueprint $table) {
            $table->increments('artist_id')->primary();
            $table->string('name')->nullable(false);
            $table->string('category')->nullable(false);
            $table->string('area')->nullable(false);
            $table->string('office')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artist_master');
    }
}
