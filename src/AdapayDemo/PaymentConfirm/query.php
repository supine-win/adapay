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


# 参数
$payment_params = array(
    "payment_confirm_id"=> "100000000000012312344"
);

# 查询支付确认对象
$payment->query($payment_params);

# 对支付结果进行处理
if ($payment->isError()){
    //失败处理
    var_dump($payment->result);
} else {
    //成功处理
    var_dump($payment->result);
}