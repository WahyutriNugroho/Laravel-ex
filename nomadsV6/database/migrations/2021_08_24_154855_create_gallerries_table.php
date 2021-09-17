<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGallerriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('travel_packages_id'); // untuk relasi
            $table->text('image');
            $table->softDeletes(); // agar data dapat restore kembali
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *down method should reverse the operations performed by the up method.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}
