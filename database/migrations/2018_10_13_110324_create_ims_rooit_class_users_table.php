<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImsRooitClassUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ims_rooit_class_users', function (Blueprint $table) {
            $table->increments('userid')->comment('用户id');
            $table->string('openid', 100)->comment('用户openid');
            $table->string('unionid', 100)->nullable()->comment('用户的联合id');
            $table->string('mobile', 50)->comment('用户手机');
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
        Schema::dropIfExists('ims_rooit_class_users');
    }
}
