<?php
# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";



# 初始化快捷支付对象
$fast_pay = new \SupineWin\Adapay\AdapaySdk\Utils\FastPay();

$fp_params = array(
    'payment_id'=> '20190912'
);

# 创建快捷支付短信发送
$fast_pay->paySmsCode($fp_params);

# 对创建快捷支付短信发送结果进行处理
if ($fast_pay->isError()){
    //失败处理
    var_dump($fast_pay->result);
} else {
    //成功处理
    var_dump($fast_pay->result);
}