<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImsShopUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ims_shop_users', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->increments('user_id')->comment('用户id');
            $table->string('nickname')->comment('用户昵称');
            $table->string('avatar')->nullable()->comment('用户昵称');
            $table->string('realname')->nullable()->comment('用户真实姓名');
            $table->string('mobile')->nullable()->comment('用户手机号');
            $table->tinyInteger('gender')->default(0)->comment('0女生1男生');
            $table->dateTime('created_at')->nullable()->comment('创建日期');
            $table->dateTime('updated_at')->nullable()->comment('更新日期');
            $table->dateTime('deleted_at')->nullable()->comment('删除日期');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ims_shop_users');
    }
}
