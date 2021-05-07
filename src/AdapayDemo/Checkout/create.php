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

$checkout_params = array(
    # 应用ID
    'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
    # 用户ID
    'member_id'=> 'user_00013',
    # 订单号
    'order_no'=>  "CK_". date("YmdHis").rand(100000, 999999),
    # 支付金额
    'pay_amt'=> '0.01',
    # 商品标题
    'goods_title'=> '收银台测试',
    # 商品描述
    'goods_desc'=> '收银台测试',
    # 分账人员列表
    'div_members'=> [],
    # ISO货币代码 默认为cny
    'currency'=> '',
    # 订单失效时间
    'time_expire'=> '',
    # 附加说明
    'description'=> '',
    # 异步通知地址
    'notify_url'=> '',
    # 支付成功回调页面
    'callback_url'=> ''
);

# 调用钱包收银台方法
$checkout->create($checkout_params);

# 对钱包进行处理
# $checkout->result 类型为数组
if ($checkout->isError()){
    //失败处理
    var_dump($checkout->result);
} else {
    //成功处理
    var_dump($checkout->result);
}
