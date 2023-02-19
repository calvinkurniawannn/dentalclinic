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
        Schema::create('haris', function (Blueprint $table) {
            $table->id();
            // $table->string('hari');
            $table->string('tanggal');
            
            $table->unsignedBigInteger('jam_id');
            $table->foreign('jam_id')->references('id')->on('jams')->onUpdate('cascade')->onDelete('cascade');
    
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('haris');
    }
};