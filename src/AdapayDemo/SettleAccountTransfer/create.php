<?php
/**
 * AdaPay 创建结算账户
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2019/09/17
 */

# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";



# 初始化结算账户对象类
$account_transfer = new \SupineWin\Adapay\AdapaySdk\Utils\SettleAccountTransfer();

$params = array(
    'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
    'order_no'=> "TF_". date("YmdHis").rand(100000, 999999),
    'trans_amt'=> '0.10',
    'out_member_id'=> '0',
    'in_member_id' => 'user_000031'
);

# 创建结算账户
$account_transfer->create($params);

# 对创建结算账户结果进行处理
if ($account_transfer->isError()){
    //失败处理
    var_dump($account_transfer->result);
} else {
    //成功处理
    var_dump($account_transfer->result);
}