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


# 请求参数
$payment_params = array(
    "app_id"=> "app_7d87c043-aae3-4357-9b2c-269349a980d6",
    "payment_id"=> "10000000000000001",
    "order_no"=> "20190919071231283468359213",
    "page_index"=> "",
    "page_size"=> "",
    "created_gte"=> "",
    "created_lte"=> ""
);

$payment->queryList($payment_params);

# 对支付结果进行处理
if ($payment->isError()){
    //失败处理
    var_dump($payment->result);
} else {
    //成功处理
    var_dump($payment->result);
}