<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImsRooitClassFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ims_rooit_class_forms', function (Blueprint $table) {
            $table->increments('formid')->comment('表单id');
            $table->tinyInteger('uniacid')->default(0)->comment('微信公众号id');
            $table->string('title', 255)->comment('标题');
            $table->string('subtitle', 255)->nullable()->comment('子标题');
            $table->string('description', 500)->nullable()->comment('描述');
            $table->text('content')->nullable()->comment('说明');
            $table->string('information', 500)->nullable()->comment('提交后信息');
            $table->string('thumb', 500)->nullable()->comment('封面图片');
            $table->text('success')->nullable()->comment('提交成功');
            $table->dateTime('start_time')->nullable()->comment('开始时间');
            $table->dateTime('end_time')->nullable()->comment('结束时间');
            $table->integer('typeid')->default(0)->comment('课程类型id');
            $table->string('remind_tpl', 50)->nullable()->comment('模板消息提醒');
            $table->tinyInteger('is_class')->default(0)->comment('是否为约课表单');
            $table->text('first_date')->nullable()->comment('第一时间段');
            $table->text('second_date')->nullable()->comment('第二时间段');
            $table->tinyInteger('status')->default(0)->comment('状态');
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
        Schema::dropIfExists('ims_rooit_class_forms');
    }
}
