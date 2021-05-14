<?php
/**
 * AdaPay 对账单下载
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2019/09/17
 */

# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";


# 初始化账户对象
$obj = new \SupineWin\Adapay\AdapaySdk\AdapayTools();

# 对账单下载
$obj->download("20190905");

# 对账单下载结果进行处理
if ($obj->isError()){
    //失败处理
    var_dump($obj->result);
} else {
    //成功处理
    var_dump($obj->result);
}