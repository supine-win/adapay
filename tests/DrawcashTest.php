<?php
use PHPUnit\Framework\TestCase;

class DrawcashTest extends TestCase
{

    public function testCreate()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\Drawcash();
        $obj_params = array(
            'order_no'=> "CS_". date("YmdHis").rand(100000, 999999),
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            'cash_type'=> 'T1',
            'cash_amt'=> '0.02',
            'member_id'=> 'user_00008',
            'notify_url'=> ''
        );
        $obj->create($obj_params);

        print("创建取现对象".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($obj->isError());
    }

    public function testQuery()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\Drawcash();
        $obj_params = array(
            'order_no'=> "CS_20200720081844501083"
        );
        $obj->query($obj_params);

        print("查询取现对象".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }


}
