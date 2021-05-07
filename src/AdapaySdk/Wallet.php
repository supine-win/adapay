<?php

namespace SupineWin\Adapay\AdapaySdk;

use SupineWin\Adapay\AdapayCore\AdaPay;


class Wallet extends AdaPay
{
    static private $instance;

    public $endpoint = "/v1/walletLogin";

    public function __construct()
    {
        self::$gateWayType = "page";
        parent::__construct();
        // $this->sdk_tools = SDKTools::getInstance();
    }

    /**
     * 钱包登录
     * @Author   Kelly
     * @DateTime 2020-10-23
     * @param array
     * @return   [type]
     * @version  V1.1.4
     */
    public function login($params = array())
    {
        $request_params = $params;
        $request_params = $this->do_empty_data($request_params);
        $req_url = self::$gateWayUrl . $this->endpoint;
        $header = $this->get_request_header($req_url, $request_params, self::$header);
        $this->result = $this->ada_request->curl_request($req_url, $request_params, $header, $is_json = true);
        // $this->result = $this->sdk_tools->post($params, $this->endpoint);
    }


}