<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImsRooitClassTimelistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ims_rooit_class_timelist', function (Blueprint $table) {
            $table->increments('timeid')->comment('时间id');
            $table->integer('formid')->comment('表单id');
            $table->string('type')->comment('日期类型（第几时间）');
            $table->string('weekday', 50)->comment('星期');
            $table->string('start', 50)->comment('开始时间');
            $table->string('end', 50)->comment('结束时间');
            $table->integer('number')->comment('总预约数');
            $table->integer('order')->comment('展示顺序');
            $table->integer('used')->comment('预约数');
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
        Schema::dropIfExists('ims_rooit_class_timelist');
    }
}
