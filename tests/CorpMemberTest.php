<?php
use PHPUnit\Framework\TestCase;

class CorpMemberTest extends TestCase
{

    public function testCreate()
    {
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\CorpMember();
        $file_real_path = realpath('123.zip');
        $obj_params = array(
            # app_id
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            # 商户用户id
            'member_id'=> 'hf_prod_member_20190920',
            # 订单号
            'order_no'=> date("YmdHis").rand(100000, 999999),
            # 企业名称
            'name'=> '测试企业',
            # 省份
            'prov_code'=> '0031',
            # 地区
            'area_code'=> '3100',
            # 统一社会信用码
            'social_credit_code'=> 'social_credit_code',
            'social_credit_code_expires'=> '20301109',
            # 经营范围
            'business_scope'=> '123123',
            # 法人姓名
            'legal_person'=> 'frname',
            # 法人身份证号码
            'legal_cert_id'=> '1234567890',
            # 法人身份证有效期
            'legal_cert_id_expires'=> '20301010',
            # 法人手机号
            'legal_mp'=> '13333333333',
            # 企业地址
            'address'=> '1234567890',
            # 邮编
            'zip_code'=> '企业地址测试',
            # 企业电话
            'telphone'=> '1234567890',
            # 企业邮箱
            'email'=> '1234567890@126.com',
            # 上传附件
            'attach_file'=> new CURLFile($file_real_path),
            # 银行代码
            'bank_code'=> '1001',
            # 银行账户类型
            'bank_acct_type'=> '1',
        );
        $obj->create($obj_params);

        print("创建企业用户".$obj->isError().'=>'.json_encode($obj->result)."\n");
        // $this->assertEquals($obj_params['app_id'], $obj->result['app_id']);
        $this->assertTrue($obj->isError());
    }

    public function testQuery()
    {
        SupineWin\Adapay\AdapayCore\utils\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\Utils\CorpMember();
        $obj_params = [
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6', 
            'member_id'=> 'hf_prod_member_20190920'
        ];
        $obj->query($obj_params);

        print("查询企业用户".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }


}
