<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImsShopGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ims_shop_goods', function (Blueprint $table) {
            $table->increments('good_id')->comment('商品id');
            $table->integer('cid')->comment('分类id');
            $table->integer('uniacid')->nullable()->comment('公众号id');
            $table->string('title')->nullable()->comment('商品标题');
            $table->string('thumb')->nullable()->comment('商品大图');
            $table->string('description')->nullable()->comment('商品描述');
            $table->text('detail')->nullable()->comment('商品详情（代码）');
            $table->tinyInteger('is_address')->default(0)->comment('是否需要物流');
            $table->integer('old_buyer')->default(0)->comment('已购买用户');
            $table->string('tpl')->default('detail')->comment('商品应用模板');
            $table->decimal('old_price', 8, 2)->default(0)->comment('原价');
            $table->decimal('price', 8, 2)->default(0)->comment('售价');
            $table->dateTime('created_at')->nullable()->comment('创建日期');
            $table->dateTime('updated_at')->nullable()->comment('更新日期');
            $table->dateTime('deleted_at')->nullable()->comment('删除日期');
            $table->index('uniacid', 'uniacid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ims_shop_goods');
    }
}
