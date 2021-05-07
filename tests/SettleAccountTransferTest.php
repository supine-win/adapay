<?php
use PHPUnit\Framework\TestCase;

class SettleAccountTestTransferTest extends TestCase
{


    public function testCreate()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new \SupineWin\Adapay\AdapaySdk\SettleAccountTransfer();
        $obj_params = array(
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            'order_no'=> "TF_". date("YmdHis").rand(100000, 999999),
            'trans_amt'=> '0.10',
            'out_member_id'=> '0',
            'in_member_id' => 'user_000031'
        );
        $obj->create($obj_params);

        print("创建结算交易账户".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
    }

    public function testQueryList()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new \SupineWin\Adapay\AdapaySdk\SettleAccountTransfer();
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

        print("查询结算交易账户".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }


    


}
