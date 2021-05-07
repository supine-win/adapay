<?php
use PHPUnit\Framework\TestCase;

class AdapayToolsTest extends TestCase
{

    public function testDownload()
    {
        // 对账单下载
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\AdapayTools();
        $obj->download('20190905');

        print("对账单下载".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($obj->isError());
    }

    public function testUnionUserId()
    {
        // 获取银联云闪付用户标识
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\AdapayTools();
        $obj_params = array(
            # app_id
            'app_id'=> 'app_7d87c043-aae3-4357-9b2c-269349a980d6',
            # 用户授权码
            'user_auth_code'=> '5yRGbi+IRda5khIQoQf1Hw==',
            # App 标识
            'app_up_identifier'=> 'CloudPay',
            # 订单号
            'order_no'=> "_". date("YmdHis").rand(100000, 999999)
        );
        $obj->unionUserId($obj_params);

        print("获取银联云闪付用户标识".$obj->isError().'=>'.json_encode($obj->result)."\n");
        $this->assertEquals('succeeded', $obj->result['status']);
        // $this->assertTrue($account->isError());
    }

    public function testVerifySign()
    {
        // HTTP 验签
        SupineWin\Adapay\AdapayCore\AdaPay::$gateWayType = 'api';
        $obj = new SupineWin\Adapay\AdapaySdk\AdapayTools();
        $obj_params = [
                        "app_id" => "app_143bc8f5-5e4a-4bf9-b8c8-6ececdb8ecd2",
                        "created_time" => "20201106134831",
                        "error_code" => "channel_response_code_fail",
                        "error_msg" => "失败",
                        "id" => "002112020110613483010170663859078807552",
                        "order_no" => "SDR0000040224",
                        "out_trans_id" => "",
                        "pay_amt" => 0.14,
                        "pay_channel" => "b2c",
                        "status" => "failed"
        ];
        $check_sign = $obj->verifySign(json_encode($obj_params, JSON_UNESCAPED_UNICODE),"MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCwN6xgd6Ad8v2hIIsQVnbt8a3JituR8o4Tc3B5WlcFR55bz4OMqrG/356Ur3cPbc2Fe8ArNd/0gZbC9q56Eb16JTkVNA/fye4SXznWxdyBPR7+guuJZHc/VW2fKH2lfZ2P3Tt0QkKZZoawYOGSMdIvO+WqK44updyax0ikK6JlNQIDAQAB");

        $this->assertTrue($check_sign);

    }

}

