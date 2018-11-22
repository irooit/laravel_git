<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImsRooitClassLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ims_rooit_class_logs', function (Blueprint $table) {
            $table->increments('logid')->comment('日志id');
            $table->string('type', 255)->default(0)->comment('日志类型');
            $table->text('detail')->nullable()->comment('日志详情');
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
        Schema::dropIfExists('ims_rooit_class_logs');
    }
}
