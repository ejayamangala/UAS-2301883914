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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->integer('account_id')->autoIncrement();
            $table->integer('role_id')->nullable($value = false);
            $table->integer('gender_id')->nullable($value = false);
            $table->string('first_name',25)->nullable($value = false);
            $table->string('middle_name',25)->nullable($value = true);
            $table->string('last_name',25)->nullable($value = false);
            $table->string('email',50)->unique()->nullable($value = false);
            $table->string('password',255)->nullable($value = false);
            $table->string('display_picture_link',255)->nullable($value = false);
            $table->integer('delete_flag');
            $table->date('modified_at');
            $table->string('modified_by',255);
            $table->foreign('role_id')->references('role_id')->on('role')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('gender_id')->references('gender_id')->on('gender')->onUpdate('cascade')->onDelete('cascade');
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
