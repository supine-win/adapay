<?php
/**
 * AdaPay 关闭订单
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2019/08/03 13:05
 */

# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";


# 初始化支付类
$payment = new \SupineWin\Adapay\AdapaySdk\Utils\Payment();
$payment_params = array(
    # 设置支付对象ID
    'payment_id'=> '002112019101517084010030107738472407040',
    # 设置描述
    'reason'=> '关单描述',
    # 设置扩展域
    'expend'=> '{"key": "1233"}'
);

# 发起关单
$payment->close($payment_params);

# 对关单结果进行处理
# $charge->result 类型为数组
if ($payment->isError()){
    //失败处理
    var_dump($payment->result);
} else {
    //成功处理
    var_dump($payment->result);
}