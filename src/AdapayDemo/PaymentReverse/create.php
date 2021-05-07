<?php
/**
 * AdaPay 发起扫码或者app支付
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2019/09/17
 */

# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";


# 初始化支付类
$payment = new \SupineWin\Adapay\AdapaySdk\Utils\PaymentReverse();

# 支付设置
$payment_params = array(
    'payment_id'=> '002112020102614582910166695202499047424',
    'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
    'order_no'=> "R".date("YmdHis").rand(100000, 999999),
    'reverse_amt'=> '0.01',
    'notify_url'=> '',
    'reason'=> '订单支金额错误',
    'expand'=> '',
    'device_info'=> '',
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