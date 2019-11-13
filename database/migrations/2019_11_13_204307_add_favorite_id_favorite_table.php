<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFavoriteIdFavoriteTable extends Migration
{
    public function up()
    {
        Schema::table('favorite', function (Blueprint $table) {
            $table->integer('favorite_id')->unsigned()->index();
            $table->foreign('favorite_id')->references('id')->on('microposts')->onDelete('cascade');
        });
    }

    public function down()
    {
        \Schema::dropIfExists( 'favorite' );
    }
}
