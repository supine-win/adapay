<?php
use PHPUnit\Framework\TestCase;

class PaymentReverseTest extends TestCase
{

    public function testCreate()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\PaymentReverse();
        $obj_params = array(
            'payment_id'=> '002112020102614582910166695202499047424',
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            'order_no'=> "R".date("YmdHis").rand(100000, 999999),
            'reverse_amt'=> '0.01',
            'notify_url'=> '',
            'reason'=> '订单支金额错误',
            'expand'=> '',
            'device_info'=> '',
        );
        $obj->create($obj_params);

        print("创建支付撤销对象".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($obj->isError());
    }

    public function testQuery()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\PaymentReverse();
        $obj_params = array(
            'reverse_id'=> '1000000000001123333333'
        );
        $obj->query($obj_params);

        print("查询支付撤销对象".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }

    public function testQueryList()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\PaymentReverse();
        $obj_params = array(
            "app_id"=> "app_7d87c043-aae3-4357-9b2c-269349a980d6",
            "payment_id"=> "002112020102614582910166695202499047424",
            "page_index"=> "",
            "page_size"=> "",
            "created_gte"=> "",
            "created_lte"=> ""
        );
        $obj->queryList($obj_params);

        print("查询支付撤销对象列表".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }


}
