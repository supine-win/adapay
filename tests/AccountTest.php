<?php
use PHPUnit\Framework\TestCase;

class AccountTest extends TestCase
{
    // public function testOne()
    // {
    //     $this->assertTrue(false);
    // }



    public function testPayment()
    {
        // 查询账户余额
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'page';
        $obj = new SupineWin\Adapay\AdapaySdk\Account();
        $account_params = array(
            # 商户的应用 id
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            # 用户ID
            'order_no'=> "WL_". date("YmdHis").rand(100000, 999999),
            # 订单总金额（必须大于0）
            'pay_amt'=> '0.10',
            # 3 位 ISO 货币代码，小写字母
            'currency'=> 'cny',
            # 商品标题
            'goods_title'=> '12314',
            # 商品描述信息
            'goods_desc'=> '123122123',
        );
        $obj->payment($account_params);
        // var_dump($account->result);
        print($obj->isError().'=>'.json_encode($obj->result));
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }

}
