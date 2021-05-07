<?php
/**
 * AdaPay 查询结算账户
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2019/09/17
 */

# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";



# 初始化结算交易账户对象类
$account_transfer = new \SupineWin\Adapay\AdapaySdk\Utils\SettleAccountTransfer();

$params = array(
    'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
    'order_no'=> '',
    'status'=> '',
    'page_index'=> '1',
    'page_size'=> '10',
    'created_gte'=> '',
    'created_lte'=> ''
);

# 查询结算交易账户
$account_transfer->queryList($params);

# 对查询结算交易账户结果进行处理
if ($account_transfer->isError()){
    //失败处理
    var_dump($account_transfer->result);
} else {
    //成功处理
    var_dump($account_transfer->result);
}