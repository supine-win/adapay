<?php
use PHPUnit\Framework\TestCase;

class SettleAccountTest extends TestCase
{

    public function testBalance()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        // 查询账户余额
        $obj = new \SupineWin\Adapay\AdapaySdk\SettleAccount();
        $account_params = array(
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            'member_id'=> 'user_00008',
            'settle_account_id'=> '0035172521665088'
        );
        $obj->balance($account_params);
        // var_dump($account->result);
        print($obj->isError().'=>'.json_encode($obj->result));
        // $this->assertArrayHasKey('error', $account->result);
        // $this->assertTrue($account->isError()==true);
        $this->assertEquals('succeeded', $obj->result['status']);
    }

    public function testCreate()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\SettleAccount();
        $obj_params = array(
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            'member_id'=> 'hf_prod_member_20191013',
            'channel'=> 'bank_account',
            'account_info'=> [
                'card_id' => '622202170300169222',
                'card_name' => '余益兰',
                'cert_id' => '310109200006068391',
                'cert_type' => '00',
                'tel_no' => '18888818881',
                'bank_code' => '03060000',
                'bank_name' => '建hua',
                'bank_acct_type' => 1,
                'prov_code' => '0031',
                'area_code' => '3100'
            ]
        );
        $obj->create($obj_params);

        print("创建结算账户".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($obj->isError());
    }

    public function testQuery()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\SettleAccount();
        $obj_params = array(
            'app_id'=> 'app_f8b14a77-dc24-433b-864f-98a62209d6c4',
            'member_id'=> 'hf_test_member_id_account5',
            'settle_account_id'=> '0006017543466816'
        );
        $obj->query($obj_params);

        print("查询结算账户".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }

    public function testDetail()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\SettleAccount();
        $obj_params = array(
            'app_id'=> 'app_f8b14a77-dc24-433b-864f-98a62209d6c4',
            'member_id'=> 'hf_test_member_id_account5',
            'settle_account_id'=> '0006017543466816',
            'begin_date'=> '20190705',
            'end_date'=> '20190806'
        );
        $obj->detail($obj_params);

        print("查询结算账户明细列表".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }

    public function testDelete()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\SettleAccount();
        $obj_params = array(
            'app_id'=> 'app_f8b14a77-dc24-433b-864f-98a62209d6c4',
            'member_id'=> 'hf_test_member_id_account5',
            'settle_account_id'=> '0006017543466816'
        );
        $obj->delete($obj_params);

        print("删除结算账户".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }

    

    public function testUpdate()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\SettleAccount();
        $obj_params = array(
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            'member_id'=> 'hf_test_201999999999',
            'settle_account_id'=> '0006124815051328',
            'min_amt'=> '',
            'remained_amt'=> '',
            'channel_remark'=> '123'
        );
        $obj->update($obj_params);

        print("修改结算账户配置".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }

    


}
