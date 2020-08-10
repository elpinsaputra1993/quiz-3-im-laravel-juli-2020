<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamProyekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_proyek', function (Blueprint $table) {
            $table->bigInteger('id_proyek')->unsigned();
            $table->bigInteger('id_karyawan')->unsigned();
            $table->timestamps();

            $table->foreign('id_proyek')
                ->references('id')
                ->on('proyek');
            $table->foreign('id_karyawan')
                ->references('id')
                ->on('karyawan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_proyek');
    }
}
