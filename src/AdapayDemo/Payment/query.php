<?php
/**
 * AdaPay 查询支付对象列表
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2019/08/03 13:05
 */

# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";



# 初始化支付类
$payment = new \SupineWin\Adapay\AdapaySdk\Utils\Payment();

# 支付设置
$payment_params = array(
    "payment_id"=> "002112020102614582910166695202499047424",
);

# 发起支付
$payment->query($payment_params);

# 对支付结果进行处理
if ($payment->isError()){
    //失败处理
    var_dump($payment->result);
} else {
    //成功处理
    var_dump($payment->result);
}