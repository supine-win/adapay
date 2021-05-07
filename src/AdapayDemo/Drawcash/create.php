<?php
/**
 * AdaPay 结算账户取现
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2020/01/17
 */

# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";


# 初始化取现对象
$drawcash = new \SupineWin\Adapay\AdapaySdk\Utils\Drawcash();


$drawcash_params = array(
    'order_no'=> "CS_". date("YmdHis").rand(100000, 999999),
    'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
    'cash_type'=> 'T1',
    'cash_amt'=> '0.02',
    'member_id'=> 'user_00008',
    'notify_url'=> ''
);

# 账户取现
$drawcash->create($drawcash_params);

# 对账户取现结果进行处理
if ($drawcash->isError()){
    //失败处理
    var_dump($drawcash->result);
} else {
    //成功处理
    var_dump($drawcash->result);
}