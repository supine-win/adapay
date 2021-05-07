<?php
use PHPUnit\Framework\TestCase;

class CheckoutTest extends TestCase
{

    public function testCreate()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'page';
        $obj = new SupineWin\Adapay\AdapaySdk\Checkout();

        $obj_params = array(
            # 应用ID
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            # 用户ID
            'member_id'=> 'user_00013',
            # IP
            'order_no'=>  "CK_". date("YmdHis").rand(100000, 999999),
            'pay_amt'=> '0.01',
            'goods_title'=> '收银台测试',
            'goods_desc'=> '收银台测试',
            'div_members'=> [],
            'currency'=> '',
            'time_expire'=> '',
            'description'=> '',
            'notify_url'=> '',
            'callback_url'=> ''
        );
        $obj->create($obj_params);

        print("创建收银台对象".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals($obj_params['app_id'], $obj->result['app_id']);
        // $this->assertTrue($obj->isError());
    }

    public function testQueryList()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'page';
        $obj = new SupineWin\Adapay\AdapaySdk\Checkout();
        $obj_params = array(
            # 商户的应用 id
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            # 用户ID
            'order_no'=> "WL_". date("YmdHis").rand(100000, 999999),
            # 商户用户id
            'member_id'=> 'hf_prod_member_20190920',
            "page_index"=> "",
            "page_size"=> "",
            "created_gte"=> "",
            "created_lte"=> ""
        );
        $obj->queryList($obj_params);

        print("查询收银台对象列表".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }


}
