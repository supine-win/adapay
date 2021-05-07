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



# 初始化支付确认对象类
$payment = new \SupineWin\Adapay\AdapaySdk\Utils\PaymentConfirm();

# 支付设置
$payment_params = array(
    'payment_id'=> '002112020102614582910166695202499047424',
    'order_no'=> date("YmdHis").rand(100000, 999999),
    'confirm_amt'=> '0.01',
    'description'=> '附件说明',
    'div_members'=> '' //分账参数列表 默认是数组List
);

# 创建支付确认对象
$payment->create($payment_params);

# 对支付结果进行处理
if ($payment->isError()){
    //失败处理
    var_dump($payment->result);
} else {
    //成功处理
    var_dump($payment->result);
}