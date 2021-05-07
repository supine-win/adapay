<?php
/**
 * AdaPay 查询账户余额
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2020/01/17
 */

# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";


# 初始化结算账户对象类
$account = new \SupineWin\Adapay\AdapaySdk\Utils\SettleAccount();


$account_params = array(
    'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
    'member_id'=> 'user_00008',
    'settle_account_id'=> '0035172521665088'
);

# 查询账户余额
$account->balance($account_params);


# 对查询账户余额结果进行处理
if ($account->isError()){
    //失败处理
    var_dump($account->result);
} else {
    //成功处理
    var_dump($account->result);
}