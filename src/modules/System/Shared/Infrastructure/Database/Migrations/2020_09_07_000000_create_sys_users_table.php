<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysUsersTable extends Migration
{
    public function up()
    {
        Schema::create('sys_users', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->nullable()->default(null);
            $table->string('email',100);
            $table->string('phone',20);
            $table->string('password',32);
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_users');
    }
}
