<?php
use PHPUnit\Framework\TestCase;

class FastPayCardTest extends TestCase
{

    public function testCardBind()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'page';
        # 初始化结算账户对象类
        $obj = new \SupineWin\Adapay\AdapaySdk\FastPayCard();
        $fpc_params = array(
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            'card_id'=> '666666666666666666666666',
            'tel_no'=> '13888888888',
            'member_id'=> 'member_id_test',
            'vip_code'=> '321',
            'expiration'=> '0225'
        );

        $obj->cardBind($fpc_params);
        print("创建快捷支付对象".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertTrue($obj->isError());
    }

    public function testCardBindConfirm()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'page';
        # 初始化结算账户对象类
        $obj = new \SupineWin\Adapay\AdapaySdk\FastPayCard();
        $fpc_params = array(
            'sms_code'=> '0177857511167541248',
            'apply_id'=> '123456',
            'notify_url'=> '"https://xxxx.com/xxxx',
        );
        $obj->cardBindConfirm($fpc_params);

        print("创建快捷支付确认对象".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertTrue($obj->isError());
    }

    public function testCardBindList()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'page';
        $obj = new \SupineWin\Adapay\AdapaySdk\FastPayCard();
        $fpc_params = array(
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            'token_no'=> '10000067502',
            'member_id'=> 'member_id_test'
        );
        $obj->queryCardList($fpc_params);

        print("创建快捷支付查询对象".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertTrue($obj->isError());
    }
}
