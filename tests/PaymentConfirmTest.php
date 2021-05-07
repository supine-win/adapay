<?php
use PHPUnit\Framework\TestCase;

class PaymentConfirmTest extends TestCase
{

    public function testCreate()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\PaymentConfirm();
        $obj_params = array(
            'payment_id'=> '002112020102614582910166695202499047424',
            'order_no'=> date("YmdHis").rand(100000, 999999),
            'confirm_amt'=> '0.01',
            'description'=> '附件说明',
            'div_members'=> '' //分账参数列表 默认是数组List
        );
        $obj->create($obj_params);

        print("创建支付确认对象".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($obj->isError());
    }

    public function testQuery()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\PaymentConfirm();
        $obj_params = array(
            "payment_confirm_id"=> "100000000000012312344"
        );
        $obj->query($obj_params);

        print("查询支付确认对象".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }

    public function testQueryList()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\PaymentConfirm();
        $obj_params = array(
            "app_id"=> "app_7d87c043-aae3-4357-9b2c-269349a980d6",
            "payment_id"=> "10023123123101",
            "page_index"=> "",
            "page_size"=> "",
            "created_gte"=> "",
            "created_lte"=> ""
        );
        $obj->queryList($obj_params);

        print("查询支付确认对象列表".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals($obj_params['app_id'], $obj->result['app_id']);
        // $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }


}
