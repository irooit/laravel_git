<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImsRooitClassFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ims_rooit_class_fields', function (Blueprint $table) {
            $table->increments('fieldid')->comment('字段id');
            $table->integer('formid')->comment('表单id');
            $table->string('title')->comment('字段名');
            $table->string('type')->comment('字段类型');
            $table->tinyInteger('required')->default(0)->comment('是否必须');
            $table->text('value')->nullable()->comment('字段赋值');
            $table->integer('displayorder')->default(100)->comment('展示顺序');
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
        Schema::dropIfExists('ims_rooit_class_fields');
    }
}
