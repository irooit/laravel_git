<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    //提交
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('栏目标识|input');
            $table->string('title')->comment('栏目名称|input');
            $table->integer('pid')->comment('父级栏目');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    //回滚
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
