<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id('id_admin')->index();
            $table->char('nama');
            $table->char('email')->unique();
            $table->char('foto');
            $table->integer('telepon');
            $table->char('password');
            $table->integer('id_akses');
            $table->enum('status', ['aktif', 'nonaktif'])->default('aktif');
            $table->dateTime('time_in_user')->nullable();
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
        Schema::dropIfExists('admin');
    }
}
