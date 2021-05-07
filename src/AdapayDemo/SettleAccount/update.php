<?php
/**
 * AdaPay 修改结算账户
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
    'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
    'member_id'=> 'hf_test_201999999999',
    'settle_account_id'=> '0006124815051328',
    'min_amt'=> '',
    'remained_amt'=> '',
    'channel_remark'=> '123'
);

# 修改结算账户
$account->update($account_params);

# 对修改结算账户结果进行处理
if ($account->isError()){
    //失败处理
    var_dump($account->result);
} else {
    //成功处理
    var_dump($account->result);
}