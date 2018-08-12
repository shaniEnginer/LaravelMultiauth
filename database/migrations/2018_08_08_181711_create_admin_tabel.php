<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('admins' ,function( Blueprint $tabel)
       {
$tabel->increments('id');
$tabel->string('name');
$tabel->string('email')->unique();
$tabel->string('password');
$tabel->string('titel');
$tabel->timestamps();

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
