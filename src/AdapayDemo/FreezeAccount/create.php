<?php
# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";



# 初始化账户冻结对象
$fz_account = new \SupineWin\Adapay\AdapaySdk\Utils\FreezeAccount();

$fz_params = array(
    'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
    'order_no'=> 'FZ_'. date("YmdHis").rand(100000, 999999),
    'trans_amt'=> '0.10',
    'member_id'=> 'member_id_test'
);

# 创建账户冻结对象
$fz_account->create($fz_params);

# 对创建账户冻结对象结果进行处理
if ($fz_account->isError()){
    //失败处理
    var_dump($fz_account->result);
} else {
    //成功处理
    var_dump($fz_account->result);
}