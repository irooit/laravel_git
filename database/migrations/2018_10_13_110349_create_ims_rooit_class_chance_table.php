<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImsRooitClassChanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ims_rooit_class_chance', function (Blueprint $table) {
            $table->increments('cid')->comment('用户报名名额id');
            $table->integer('userid')->comment('用户id');
            $table->string('type', 50)->default('FORMAL_CLASS')->comment('名额类型');
            $table->integer('total')->default(0)->comment('名额总数');
            $table->integer('used')->default(0)->comment('已使用数量');
            $table->integer('res')->default(0)->comment('剩余数量');
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
        Schema::dropIfExists('ims_rooit_class_chance');
    }
}
