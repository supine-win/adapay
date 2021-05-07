<?php
# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";



# 初始化快捷支付绑卡对象
$fast_pay_card = new \SupineWin\Adapay\AdapaySdk\Utils\FastPayCard();

$fpc_params = array(
    'sms_code'=> '0177857511167541248',
    'apply_id'=> '123456',
    'notify_url'=> '"https://xxxx.com/xxxx',
);

# 创建快捷支付绑卡确认对象
$fast_pay_card->cardBindConfirm($fpc_params);

# 对创建快捷支付绑卡确认对象结果进行处理
if ($fast_pay_card->isError()){
    //失败处理
    var_dump($fast_pay_card->result);
} else {
    //成功处理
    var_dump($fast_pay_card->result);
}