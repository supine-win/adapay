<?php
/**
 * AdaPay 查询普通用户
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2019/09/17
 */

# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";


# 初始化用户对象类
$member = new \SupineWin\Adapay\AdapaySdk\Member();

# 查询用户对象
$member->query(['app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6', 'member_id'=> 'hf_prod_member_20190920']);

# 对查询用户对象结果进行处理
if ($member->isError()){
    //失败处理
    var_dump($member->result);
} else {
    //成功处理
    var_dump($member->result);
}