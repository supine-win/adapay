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
$account = new \SupineWin\Adapay\AdapaySdk\Utils\SettleAccount();

$account_params = array(
    'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
    'member_id'=> 'hf_prod_member_20191013',
    'channel'=> 'bank_account',
    'account_info'=> [
        'card_id' => '622202170300169222',
        'card_name' => '余益兰',
        'cert_id' => '310109200006068391',
        'cert_type' => '00',
        'tel_no' => '18888818881',
        'bank_code' => '03060000',
        'bank_name' => '建hua',
        'bank_acct_type' => 1,
        'prov_code' => '0031',
        'area_code' => '3100',
    ]
);

# 创建结算账户
$account->create($account_params);

# 对创建结算账户结果进行处理
if ($account->isError()){
    //失败处理
    var_dump($account->result);
} else {
    //成功处理
    var_dump($account->result);
}