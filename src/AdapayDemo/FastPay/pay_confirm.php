<?php
# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";



# 初始化快捷支付对象
$fast_pay = new \SupineWin\Adapay\AdapaySdk\Utils\FastPay();

$fp_params = array(
    'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
    'payment_id'=> '002112020012010545810065165317376983040',
    'sms_code'=> '123456'
);

# 创建快捷支付确认
$fast_pay->payConfirm($fp_params);

# 对创建快捷支付确认结果进行处理
if ($fast_pay->isError()){
    //失败处理
    var_dump($fast_pay->result);
} else {
    //成功处理
    var_dump($fast_pay->result);
}