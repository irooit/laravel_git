<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImsRooitClassDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ims_rooit_class_data', function (Blueprint $table) {
            $table->increments('dataid')->comment('数据id');
            $table->integer('formid')->comment('表单id');
            $table->integer('reid')->comment('记录id');
            $table->integer('fieldid')->comment('字段id');
            $table->string('type')->comment('字段类型');
            $table->string('data', 500)->comment('字段内容');
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
        Schema::dropIfExists('ims_rooit_class_data');
    }
}
