<?php
/**
 * AdaPay 订单退款
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2019/08/03 13:05
 */

# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";



# 初始化退款对象
$refund = new \SupineWin\Adapay\AdapaySdk\Utils\Refund();

$refund_params = array(
    # 原交易支付对象ID
    'payment_id'=> '002112019101519194610030140730621550592',
    # 退款订单号
    'refund_order_no'=> '20190919071231283468359213',
    # 退款金额
    'refund_amt'=> '0.01',
    # 退款描述
    'reason'=> '退款描述',
    # 扩展域
    'expend'=> '',
    # 设备静态信息
    'device_info'=> ''
);

# 发起退款
$refund->create($refund_params);

# 对退款结果进行处理
# $refund->result 类型为数组
if ($refund->isError()){
    //失败处理
    var_dump($refund->result);
} else {
    //成功处理
    var_dump($refund->result);
}
