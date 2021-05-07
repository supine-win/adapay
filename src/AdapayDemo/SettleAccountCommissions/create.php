<?php
/**
 * AdaPay 创建分账账户
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2021/01/28
 */

# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";



# 初始化分账账户对象类
$account_commissions = new \SupineWin\Adapay\AdapaySdk\Utils\SettleAccountCommissions();

$params = array(
    'payment_id'=> '002112021012814392510200754865217691648',
    'order_no'=> "CMS_". date("YmdHis").rand(100000, 999999),
    'trans_amt'=> '0.10'
);

# 创建分账账户
$account_commissions->create($params);

# 对创建分账账户结果进行处理
if ($account_commissions->isError()){
    //失败处理
    var_dump($account_commissions->result);
} else {
    //成功处理
    var_dump($account_commissions->result);
}