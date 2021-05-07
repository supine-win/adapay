<?php
/**
 * AdaPay 查询企业用户
 * author: adapay.com https://docs.adapay.tech/api/04-trade.html
 * Date: 2019/09/17
 */

# 加载SDK需要的文件
include_once  dirname(__FILE__). "/../../AdapaySdk/init.php";
# 加载商户的配置文件
include_once  dirname(__FILE__). "/../config.php";


# 初始化用户对象类
$corp_member = new \SupineWin\Adapay\AdapaySdk\Utils\CorpMember();

# 查询企业用户
$corp_member->query(['app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6', 'member_id'=> 'hf_prod_member_20190920']);

# 对查询企业用户结果进行处理
if ($corp_member->isError()){
    //失败处理
    var_dump($corp_member->result);
} else {
    //成功处理
    var_dump($corp_member->result);
}