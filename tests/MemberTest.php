<?php
use PHPUnit\Framework\TestCase;

class MemberTest extends TestCase
{

    public function testCreate()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\Member();
        $obj_params = array(
            # app_id
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            # 用户id
            'member_id'=> 'hf_prod_member_20200122',
            # 用户地址
            'location'=> '上海市闵行区汇付',
            # 用户邮箱
            'email'=> '123123@126.com',
            # 性别
            'gender'=> 'MALE',
            # 用户手机号
            'tel_no'=> '18177722312',
            # 用户昵称
            'nickname'=> 'test',
        );
        $obj->create($obj_params);

        print("创建用户".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($obj->isError());
    }

    public function testUpdate()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\Member();
        $obj_params = [
            # app_id
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            # 用户id
            'member_id'=> 'hf_prod_member_20200122',
            # 用户地址
            'location'=> '上海市徐汇区汇付天下',
            # 用户邮箱
            'email'=> 'app1231@163.com',
            # 性别
            'gender'=> 'MALE',
            # 用户手机号
            'tel_no'=> '18867892123',
            # 是否禁用该用户
            'disabled'=> 'N',
            # 用户昵称
            'nickname'=> '正式',
        ];
        $obj->update($obj_params);

        print("更新用户".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }

    public function testQuery()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\Member();
        $obj_params = [
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6', 
            'member_id'=> 'hf_prod_member_20190920'
        ];
        $obj->query($obj_params);

        print("查询用户".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }

    public function testQueryList()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\Member();
        $obj_params = [
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6'
        ];
        $obj->queryList($obj_params);

        print("查询用户列表".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }


}
