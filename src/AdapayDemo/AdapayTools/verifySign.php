<?php
/**
 * AdaPay 更新普通用户
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2019/09/17
 */

# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";


# 初始化账户对象
$adapay_tools = new \SupineWin\Adapay\AdapaySdk\AdapayTools();

# 获取银联云闪付用户标识
$params = array(
    # app_id
    'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
    # 用户授权码
    'user_auth_code'=> '5yRGbi+IRda5khIQoQf1Hw==',
    # App 标识
    'app_up_identifier'=> 'CloudPay',
    # 订单号
    'order_no'=> "_". date("YmdHis").rand(100000, 999999)
);
# 获取银联云闪付用户标识
$check_sign = $adapay_tools->verifySign(json_encode($params, JSON_UNESCAPED_UNICODE),'5Dw5DnLSWv42e83goYttXnlZxYk');

# 获取银联云闪付用户标识结果进行处理
var_dump($check_sign);