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
        Schema::create('order', function (Blueprint $table) {

            $table->integer('order_id')->autoIncrement();
            $table->integer('account_id')->nullable($value = false);
            $table->integer('ebook_id')->nullable($value = false);
            $table->date('order_date')->nullable($value = false);;
            // $table->foreign('account_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('ebook_id')->references('ebook_id')->on('ebook')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('order');
    }
};
