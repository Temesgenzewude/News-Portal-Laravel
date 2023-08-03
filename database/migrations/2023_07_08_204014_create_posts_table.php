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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table -> string('title');
            $table -> text('short_desc');
            $table -> longText('desc');
            $table -> string('image')->nullable();

            $table->boolean('is_special')->default(0);
            $table->boolean('is_breaking')->default(0);

            $table->integer('views')->default(0);



            $table -> unsignedBigInteger('category_id');
            //$table -> foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table -> unsignedBigInteger('user_id');
            //$table -> foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('posts');
    }
};
