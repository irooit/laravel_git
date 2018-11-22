<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImsShopPaylogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ims_shop_paylog', function (Blueprint $table) {
            $table->increments('pay_id')->comment('支付日志id');
            $table->string('pay_type')->default('WECHAT')->comment('支付方式');
            $table->integer('user_id')->comment('用户id');
            $table->decimal('fee')->comment('费用');
            $table->string('order_sn')->comment('订单号');
            $table->string('pay_sn')->comment('支付订单号');
            $table->string('uniontid')->comment('商户订单号');
            $table->text('notify')->nullable()->comment('返回日志');
            $table->tinyInteger('status')->default(0)->comment('-1 未成功 1支付成功 0 订单创建');
            $table->dateTime('created_at')->nullable()->comment('创建日期');
            $table->dateTime('updated_at')->nullable()->comment('更新日期');
            $table->dateTime('deleted_at')->nullable()->comment('删除日期');
            $table->index('uniontid');
            $table->index('pay_sn');
            $table->index('order_sn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ims_shop_paylog');
    }
}
