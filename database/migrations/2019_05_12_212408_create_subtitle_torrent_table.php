<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubtitleTorrentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtitle_torrent', function (Blueprint $table) {
            $table->bigInterger('subtitle_id')->index();
            $table->foreign('subtitle_id')->references('id')->on('subtitles');

            $table->bigInterger('torrent_id')->index();
            $table->foreign('torrent_id')->references('id')->on('torrents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtitle_torrent');
    }
}
