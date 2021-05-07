<?php
use PHPUnit\Framework\TestCase;

class WalletTest extends TestCase
{

    public function testLogin()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'page';
        $obj = new SupineWin\Adapay\AdapaySdk\Wallet();
        $obj_params = array(
            # 应用ID
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            # 用户ID
            'member_id'=> 'hf_prod_member_20191013',
            # IP
            'ip'=> '192.168.1.152'
        );
        $obj->login($obj_params);

        print("钱包登录".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }  


}
