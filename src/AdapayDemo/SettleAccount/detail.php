<?php
/**
 * AdaPay 查询结算账户明细
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2019/09/17
 */
# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";



# 初始化结算账户对象类
$account = new \SupineWin\Adapay\AdapaySdk\Utils\SettleAccount();

$account_params = array(
    'app_id'=> 'app_P000002052092068',
    'member_id'=> 'hf_test_member_id_account5',
    'settle_account_id'=> '0006017543466816',
    'begin_date'=> '20190705',
    'end_date'=> '20190806'
);

# 查询结算账户
$account->detail($account_params);

# 对查询结算账户结果进行处理
if ($account->isError()){
    //失败处理
    var_dump($account->result);
} else {
    //成功处理
    var_dump($account->result);
}