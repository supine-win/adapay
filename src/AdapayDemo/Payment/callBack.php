<?php/** * 判断支付异步回调业务处理 * User: shuaishuai.niu * Date: 2020/11/16 * Time: 14:01 */# 加载SDK需要的文件include_once dirname(__FILE__) . "/../../AdapaySdk/init.php";# 加载商户的配置文件include_once dirname(__FILE__) . "/../config.php";$adapay_tools = new \SupineWin\Adapay\AdapaySdk\Utils\AdapayTools();# POST 接收的数据的key# create_time, data, prod_mode, sign, id, type,app_id# $_POST 接收key为data的数据格式json字符串#   array(#       'app_id' => 'app_fe1ec54d-e7cd-432a-a994-c12c3d8295f8',#       'created_time' => '20201115182858',#       'end_time' => '20201115182904',#       'expend' => [#                'bank_type' => 'OTHERS',#                'open_id' => '1123213123123',#                'sub_open_id'=> '36323333333'#       ],#       'id' => '002112020111518285710173995928213929984',#       'order_no' => 'SH20201115182857625624',#       'out_trans_id' => '4200000839202011155051561044',#       'party_order_id' => '02212011156653808201465',#       'pay_amt' => '02212011156653808201465',#       'pay_channel' => '02212011156653808201465',#       'status' => 'succeeded'#)$post_data_str = isset($_POST['data']) ? $_POST['data']: '';$post_sign_str = isset($_POST['sign']) ? $_POST['sign']: '';// 此处只是个示例 需要测试请去掉注释//$post_data_str = "{\"app_id\":\"app_fe1ec54d-e7cd-432a-a994-c12c3d8295f8\",\"created_time\":\"20201115182858\",\"end_time\":\"20201115182904\",\"expend\":{\"bank_type\":\"OTHERS\",\"open_id\":\"o8jhotwaUEffs1fyWE5O3N4HWvbk\",\"sub_open_id\":\"o4WGIxA59TYBzEKdwz_s6actNIYY\"},\"id\":\"002112020111518285710173995928213929984\",\"order_no\":\"SH20201115182857625624\",\"out_trans_id\":\"4200000839202011155051561044\",\"party_order_id\":\"02212011156653808201465\",\"pay_amt\":\"0.01\",\"pay_channel\":\"wx_pub\",\"status\":\"succeeded\"}";////$sign_flag = $adapay_tools->verifySign($post_data_str,"YXOWP5pyL38cZvXbVTyr4Lp9tpr2IzYmc5+EXuNofMTPPlCMfgXX4aBHT8QhxmKMYe95TBklWrM6IAdSLqIBXyc7CYnEYh0o54QHH4H\/yKy5yiOqFCbcHAHPhtJPU28rj+dHbG7YG\/4Qk5psFoBuOTP99ACizLy\/uiILYY3UhJk=");# 先校验签名和返回的数据的签名的数据是否一致$sign_flag = $adapay_tools->verifySign($post_data_str, $post_sign_str);if ($sign_flag){    var_dump("签名验证通过");    # 业务方自己的逻辑}else{    var_dump("签名验证失败");    # 业务方自己的逻辑}