<?php
use PHPUnit\Framework\TestCase;

class RefundTest extends TestCase
{

    public function testCreate()
    {
        $obj = new SupineWin\Adapay\AdapaySdk\Refund();
        $obj::$gateWayType = 'api';
        $obj_params = array(
            # 原交易支付对象ID
            'payment_id'=> '002112019101519194610030140730621550592',
            # 退款订单号
            'refund_order_no'=> '20190919071231283468359213',
            # 退款金额
            'refund_amt'=> '0.01',
            # 退款描述
            'reason'=> '退款描述',
            # 扩展域
            'expend'=> '',
            # 设备静态信息
            'device_info'=> ''
        );
        $obj->create($obj_params);

        print("创建退款对象".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($obj->isError());
    }

    public function testQuery()
    {
        $obj = new SupineWin\Adapay\AdapaySdk\Refund();
        $obj::$gateWayType = 'api';
        $obj_params = array(
            'payment_id'=> '002112019101519194610030140730621550592'
        );
        $obj->query($obj_params);

        print("查询退款对象".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }

    


}
