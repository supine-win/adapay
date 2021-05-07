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


# 初始化账户对象
$checkout = new \SupineWin\Adapay\AdapaySdk\Utils\Checkout();

#请求参数
$checkout_params = array(
    # 商户的应用 id
    'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
    # 用户ID
    'order_no'=> "WL_". date("YmdHis").rand(100000, 999999),
    # 商户用户id
    'member_id'=> 'hf_prod_member_20190920',
    "page_index"=> "",
    "page_size"=> "",
    "created_gte"=> "",
    "created_lte"=> ""

);

$checkout->queryList($checkout_params);

# 对结果进行处理
# $checkout->result 类型为数组
if ($checkout->isError()){
    //失败处理
    var_dump($checkout->result);
} else {
    //成功处理
    var_dump($checkout->result);
}
