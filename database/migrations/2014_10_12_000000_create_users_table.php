<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->string('country')->nullable();
            $table->string('profession')->nullable();
            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('bio')->nullable();
            $table->string('phone')->nullable();


            $table->integer('is_writer')->default(0);
            $table->integer('is_advertiser')->default(0);
            $table->integer('is_admin')->default(0);


            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
