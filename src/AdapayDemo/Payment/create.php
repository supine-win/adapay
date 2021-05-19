<?php
/**
 * AdaPay 发起扫码或者app支付
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2019/08/03 13:05
 */

# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";



# 初始化支付类
$payment = new \SupineWin\Adapay\AdapaySdk\Payment();

# 支付设置
$payment_params = array(
    'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
//    'app_id'=> 'app_f7841d17-8d4e-469f-82da-1c3f43c3e470',
    'order_no'=> "PY_". date("YmdHis").rand(100000, 999999),
    'pay_channel'=> 'alipay',
    'time_expire'=> date("YmdHis", time()+86400),
    'pay_amt'=> '0.01',
    'goods_title'=> 'subject',
    'goods_desc'=> 'body',
    'description'=> 'description',
    'device_id'=> ['device_id'=>"1111"],
    'expend'=> [
        'buyer_id'=> '1111111',              // 支付宝卖家账号ID
        'buyer_logon_id'=> '22222222222',   // 支付宝卖家账号
        'promotion_detail'=>[              // 优惠信息
            'cont_price'=> '100.00',      // 订单原价格
            'receipt_id'=> '123',        // 商家小票ID
            'goodsDetail'=> [           // 商品信息集合
                ['goods_id'=> "111", "goods_name"=>"商品1", "quantity"=> 1, "price"=> "1.00"],
                ['goods_id'=> "112", "goods_name"=>"商品2", "quantity"=> 1, "price"=> "1.01"]
            ]
        ]
    ]
);

# 发起支付
$payment->create($payment_params);

# 对支付结果进行处理
if ($payment->isError()){
    //失败处理
    var_dump($payment->result);
} else {
    //成功处理
    var_dump($payment->result);
}