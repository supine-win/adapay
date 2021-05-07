<?php
/**
 * AdaPay 查询分账账户
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
    'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
    'order_no'=> '',
    'status'=> '',
    'page_index'=> '1',
    'page_size'=> '10',
    'created_gte'=> '',
    'created_lte'=> ''
);

# 查询分账交易账户
$account_commissions->queryList($params);

# 对查询分账账户结果进行处理
if ($account_commissions->isError()){
    //失败处理
    var_dump($account_commissions->result);
} else {
    //成功处理
    var_dump($account_commissions->result);
}