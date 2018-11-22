<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImsShopUserAuthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ims_shop_user_auth', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->increments('auth_id')->comment('用户认证id');
            $table->integer('user_id')->comment('用户id');
            $table->string('nickname', 50)->comment('用户昵称');
            $table->text('avatar')->nullable()->comment('用户头像');
            $table->string('auth_type')->default(0)->comment('认证类型');
            $table->string('auth_appid')->default(0)->comment('认证appid');
            $table->string('openid')->comment('认证的第三方id');
            $table->string('unionid')->default(0)->comment('认证的第三方id');
            $table->dateTime('created_at')->nullable()->comment('创建日期');
            $table->dateTime('deleted_at')->nullable()->comment('删除日期');
            $table->index(['auth_appid', 'openid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ims_shop_user_auth');
    }
}
