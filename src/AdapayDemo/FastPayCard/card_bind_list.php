<?php
# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";



# 初始化快捷支付绑卡对象
$fast_pay_card = new \SupineWin\Adapay\AdapaySdk\Utils\FastPayCard();

$fpc_params = array(
    'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
    'token_no'=> '10000067502',
    'member_id'=> 'member_id_test'
);

# 创建快捷支付绑卡列表对象
$fast_pay_card->queryCardList($fpc_params);

# 对创建快捷支付绑卡列表结果进行处理
if ($fast_pay_card->isError()){
    //失败处理
    var_dump($fast_pay_card->result);
} else {
    //成功处理
    var_dump($fast_pay_card->result);
}