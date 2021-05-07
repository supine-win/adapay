<?php
use PHPUnit\Framework\TestCase;

class FastPayTest extends TestCase
{

    public function testPayConfirm()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        # 初始化快捷支付对象
        $obj = new \SupineWin\Adapay\AdapaySdk\FastPay();
        $fp_params = array(
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            'payment_id'=> '002112020012010545810065165317376983040',
            'sms_code'=> '123456'
        );

        # 创建快捷支付确认
        $obj->payConfirm($fp_params);
        print("创建快捷支付对象".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertTrue($obj->isError());
    }

    public function testSmsCode()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        # 初始化快捷支付对象
        $obj = new \SupineWin\Adapay\AdapaySdk\FastPay();
        $fp_params = array(
            'payment_id'=> '20190912'
        );

        # 创建快捷支付短信发送
        $obj->paySmsCode($fp_params);
        print("创建快捷支付对象".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertTrue($obj->isError());
    }
}
