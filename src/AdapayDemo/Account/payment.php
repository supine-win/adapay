<?php
/**
 * AdaPay 钱包用户登录
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2019/08/03 13:05
 */

/**
 * init方法参数介绍
 * 第一个是配置文件路径或者配置数组对象
 * 第二个参数是SDK模式
 * 第三个是标识第一个参数的类型 true为数组对象 false为文件路径
 **/
/**
 * $config_object = [
 *    "api_key_live" => "api_live_9c14f264-e390-41df-984d-df15a6952031",
 *    "rsa_private_key" => "MIICdwIBADANBgkqhkiG9w0BAQEFAASCAmEwggJdAgEAAoGBAMQhsygJ2pp4nCiDAXiqnZm6AzKSVAh+C0BgGR6QaeXzt0TdSi9VR0OQ7Qqgm92NREB3ofobXvxxT+wImrDNk6R6lnHPMTuJ/bYpm+sx397rPboRAXpV3kalQmbZ3P7oxtEWOQch0zV5B1bgQnTvxcG3REAsdaUjGs9Xvg0iDS2tAgMBAAECgYAqGFmNdF/4234Yq9V7ApOE1Qmupv1mPTdI/9ckWjaAZkilfSFY+2KqO8bEiygo6xMFCyg2t/0xDVjr/gTFgbn4KRPmYucGG+FzTRLH0nVIqnliG5Ekla6a4gwh9syHfstbOpIvJR4DfldicZ5n7MmcrdEwSmMwXrdinFbIS/P1+QJBAOr6NpFtlxVSGzr6haH5FvBWkAsF7BM0CTAUx6UNHb+RCYYQJbk8g3DLp7/vyio5uiusgCc04gehNHX4laqIdl8CQQDVrckvnYy+NLz+K/RfXEJlqayb0WblrZ1upOdoFyUhu4xqK0BswOh61xjZeS+38R8bOpnYRbLf7eoqb7vGpZ9zAkEAobhdsA99yRW+WgQrzsNxry3Ua1HDHaBVpnrWwNjbHYpDxLn+TJPCXvI7XNU7DX63i/FoLhOucNPZGExjLYBH/wJATHNZQAgGiycjV20yicvgla8XasiJIDP119h4Uu21A1Su8G15J2/9vbWn1mddg1pp3rwgvxhw312oInbHoFMxsQJBAJlyDDu6x05MeZ2nMor8gIokxq2c3+cnm4GYWZgboNgq/BknbIbOMBMoe8dJFj+ji3YNTvi1MSTDdSDqJuN/qS0="
 * ];
 * \AdaPay\AdaPay::init($config_object, "live", true);
 **/
\SupineWin\Adapay\AdapayCore\AdaPay::init(dirname(__FILE__). '/../config/config.json', "live", false);


# 初始化账户对象
$account = new \SupineWin\Adapay\AdapaySdk\Account();

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
