<?php
/**
 * AdaPay 钱包用户登录
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2019/08/03 13:05
 */

# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";


# 初始化钱包对象
$wallet = new \SupineWin\Adapay\AdapaySdk\Utils\Wallet();

$wallet_params = array(
    # 应用ID
    'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
    # 用户ID
    'member_id'=> 'hf_prod_member_20191013',
    # IP
    'ip'=> '192.168.1.152'
);

# 发起退款
$wallet->login($wallet_params);

# 对钱包进行处理
# $wallet->result 类型为数组
if ($wallet->isError()){
    //失败处理
    var_dump($wallet->result);
} else {
    //成功处理
    var_dump($wallet->result);
}
