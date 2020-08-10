<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_staff', function (Blueprint $table) {
            $table->bigInteger('id_manajer')->unsigned();
            $table->bigInteger('id_staff')->unsigned();
            $table->timestamps();

            $table->foreign('id_manajer')
                ->references('id')
                ->on('jabatan');

            $table->foreign('id_staff')
                ->references('id')
                ->on('jabatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_staff');
    }
}
