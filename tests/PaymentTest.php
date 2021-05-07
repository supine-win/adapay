<?php

use PHPUnit\Framework\TestCase;

class PaymentTest extends TestCase
{

    public function testCreate()
    {
        $obj = new SupineWin\Adapay\AdapaySdk\Payment();
        $obj::$gateWayType = 'api';
        $obj_params = array(
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
        //    'app_id'=> 'app_f7841d17-8d4e-469f-82da-1c3f43c3e470',
            'order_no'=> "PY_". date("YmdHis").rand(100000, 999999),
            'pay_channel'=> 'alipay',
            'time_expire'=> date("YmdHis", time()+86400),
            'pay_amt'=> '0.01',
            'goods_title'=> 'subject',
            'goods_desc'=> 'body',
            'description'=> 'description',
            'device_id'=> ['device_id'=>"1111"],
            'expend'=> [
                'buyer_id'=> '1111111',              // 支付宝卖家账号ID
                'buyer_logon_id'=> '22222222222',   // 支付宝卖家账号
                'promotion_detail'=>[              // 优惠信息
                    'cont_price'=> '100.00',      // 订单原价格
                    'receipt_id'=> '123',        // 商家小票ID
                    'goodsDetail'=> [           // 商品信息集合
                        ['goods_id'=> "111", "goods_name"=>"商品1", "quantity"=> 1, "price"=> "1.00"],
                        ['goods_id'=> "112", "goods_name"=>"商品2", "quantity"=> 1, "price"=> "1.01"]
                    ]
                ]
            ]
        );
        $obj->create($obj_params);

        print("创建支付对象".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($obj->isError());
    }

    public function testQuery()
    {
        $obj = new SupineWin\Adapay\AdapaySdk\Payment();
        $obj::$gateWayType = 'api';
        $obj_params = array(
            'payment_id'=> '002112020102614582910166695202499047424'
        );
        $obj->query($obj_params);

        print("查询支付对象".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }

    public function testQueryList()
    {
        $obj = new SupineWin\Adapay\AdapaySdk\Payment();
        $obj::$gateWayType = 'api';
        $obj_params = array(
            "app_id"=> "app_7d87c043-aae3-4357-9b2c-269349a980d6",
            "payment_id"=> "002112020102614582910166695202499047424",
            "order_no"=> "PY_20201026145829830248",
            "page_index"=> "",
            "page_size"=> "",
            "created_gte"=> "",
            "created_lte"=> ""
        );
        $obj->queryList($obj_params);

        print("查询支付对象列表".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }

    public function testClose()
    {
        $obj = new SupineWin\Adapay\AdapaySdk\Payment();
        $obj::$gateWayType = 'api';
        $obj_params = array(
            # 设置支付对象ID
            'payment_id'=> '002112019101517084010030107738472407040',
            # 设置描述
            'reason'=> '关单描述',
            # 设置扩展域
            'expend'=> '{"key": "1233"}'
        );
        $obj->close($obj_params);

        print("支付关单".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }


}
