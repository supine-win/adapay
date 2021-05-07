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
$account = new \SupineWin\Adapay\AdapaySdk\Utils\Account();

#钱包支付接口参数
$account_params = array(
    # 商户的应用 id
    'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
    # 用户ID
    'order_no'=> "WL_". date("YmdHis").rand(100000, 999999),
    # 订单总金额（必须大于0）
    'pay_amt'=> '0.10',
    # 3 位 ISO 货币代码，小写字母
    'currency'=> 'cny',
    # 订单附加说明
//    'description'=> '12313',
    # 分账对象信息列表，可用于用户分账
//    'div_members'=> '',
    # 商品标题
    'goods_title'=> '12314',
    # 商品描述信息
    'goods_desc'=> '123122123',
    # 支付成功后跳转地址
//    'callback_url'=> '',
    # IP
//    'notify_url'=> '',

);

# 创建钱包支付对象
$account->payment($account_params);

# 对钱包进行处理
# $wallet->result 类型为数组
if ($account->isError()){
    //失败处理
    var_dump($account->result);
} else {
    //成功处理
    var_dump($account->result);
}
