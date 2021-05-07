<?php
/**
 * AdaPay 退款订单查询
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2019/08/03 13:05
 */

# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";



# 初始化退款对象
$refund = new \SupineWin\Adapay\AdapaySdk\Utils\Refund();
# refund_id或charge_id二选一
# 发起退款查询
$refund->query(['payment_id'=> '002112019101519194610030140730621550592']);

# 对退款结果进行处理
# $refund->result 类型为数组
if ($refund->isError()){
    //失败处理
    var_dump($refund->result);
} else {
    //成功处理
    var_dump($refund->result);
}