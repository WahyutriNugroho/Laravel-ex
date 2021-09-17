<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsernameFieldToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // php artisan make:migration add_username_field_to_user_table --table=users
        //jalankan dengan php artisan make:migration
        Schema::table('users', function (Blueprint $table) {
            //menambahkan kolom username kedalam tabel user
            $table->string('username');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
        });
    }
}
