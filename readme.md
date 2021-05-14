# adapay
> base on adapay official php-skd v1.3.1

# quick start
- Firstly, setting the timezone.
```
ini_set('date.timezone','Asia/Shanghai');
```
in laravel`config/app.php`
```
"timezone" => "Asia/Shanghai",
```
- Then,use it 
```php
<?php
//first of all, call init
\SupineWin\Adapay\AdapayCore\AdaPay::init(dirname(__FILE__). '/config/config.json', "live");
//then, use
# 初始化账户对象
$union_user = new \SupineWin\Adapay\AdapaySdk\AdapayTools();

# 获取银联云闪付用户标识
$union_params = array(
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
$union_user->unionUserId($union_params);

# 获取银联云闪付用户标识结果进行处理
if ($union_user->isError()){
    //失败处理
    var_dump($union_user->result);
} else {
    //成功处理
    var_dump($union_user->result);
}
# demo尚未修改仅供参考
```
