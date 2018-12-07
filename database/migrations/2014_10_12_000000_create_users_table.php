<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::create('users', function (Blueprint $table) {
         $table->increments('id');
         $table->string('name');
         $table->string('userName')->unique();
         $table->string('email')->unique();
         $table->string('avatar')->nullable()->default('avatars/default.jpg');
         $table->string('password');
         $table->string('country')->nullable();
         $table->string('age')->nullable();
         $table->timestamp('email_verified_at')->nullable();
         $table->rememberToken();
         $table->timestamps();
          $table->unsignedInteger('adress_id')->nullable();
         //$table->foreign('adress_id')->references('id')->on('adress');
       });


   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
       Schema::dropIfExists('users');
   }
}
