<?php
use PHPUnit\Framework\TestCase;

class SettleAccountCommissionsTest extends TestCase
{


    public function testCreate()
    {
        $obj = new \SupineWin\Adapay\AdapaySdk\SettleAccountCommissions();
        $obj::$gateWayType = 'api';
        $obj_params = array(
            'payment_id'=> '002112021012814392510200754865217691648',
            'order_no'=> "CMS_". date("YmdHis").rand(100000, 999999),
            'trans_amt'=> '0.10'
        );
        $obj->create($obj_params);

        print("创建分账账户".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
    }

    public function testQueryList()
    {
        $obj = new \SupineWin\Adapay\AdapaySdk\SettleAccountCommissions();
        $obj::$gateWayType = 'api';
        $obj_params = array(
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            'order_no'=> '',
            'status'=> '',
            'page_index'=> '1',
            'page_size'=> '10',
            'created_gte'=> '',
            'created_lte'=> ''
        );
        $obj->queryList($obj_params);

        print("查询分账账户".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }


    


}
