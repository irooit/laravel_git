<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImsShopOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ims_shop_orders', function (Blueprint $table) {
            $table->increments('order_id')->comment('订单id');
            $table->integer('uniacid')->default(0)->comment('公众号id');
            $table->string('order_sn', 30)->comment('订单号');
            $table->integer('user_id')->comment('用户id');
            $table->string('order_type')->default('FORMAL_CLASS')->comment('订单类型');
            $table->decimal('good_money', 8, 2)->default(0)->comment('商品总价');
            $table->decimal('total_money', 8, 2)->default(0)->comment('总价包含运费');
            $table->decimal('discount', 8, 2)->default(0)->comment('优惠金额');
            $table->decimal('real_money', 8, 2)->default(0)->comment('实际要支付的金额');
            $table->decimal('balance_pay', 8, 2)->default(0)->comment('余额支付');
            $table->decimal('real_pay', 8, 2)->default(0)->comment('实际支付金额');
            $table->string('pay_type', 50)->default('WECHAT')->comment('支付方式');
            $table->integer('pay_id')->default(0)->comment('支付订单号');
            $table->string('status', 20)->default('CREATE')->comment('CREATE  创建订单 PAID 已付款 FINISH 完成 REFUND 退款');
            $table->dateTime('created_at')->nullable()->comment('创建日期');
            $table->dateTime('updated_at')->nullable()->comment('更新日期');
            $table->dateTime('deleted_at')->nullable()->comment('删除日期');
            $table->unique('order_sn', 'order_sn_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ims_shop_orders');
    }
}
