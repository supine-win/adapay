<?phpnamespace SupineWin\Adapay\AdapaySdk;use SupineWin\Adapay\AdapayCore\AdaPay;class FreezeAccount extends AdaPay{    public $endpoint = "/v1/settle_accounts/freeze";    public function __construct()    {        parent::__construct();    }    /**     * 创建冻结支付对象     *     */    public function create($params = array())    {        $request_params = $params;        $request_params = $this->do_empty_data($request_params);        $req_url = self::$gateWayUrl . $this->endpoint;        $header = $this->get_request_header($req_url, $request_params, self::$header);        $this->result = $this->ada_request->curl_request($req_url, $request_params, $header, $is_json = true);    }    /**     * 查询支付冻结对象     *     */    public function queryList($params = array())    {        ksort($params);        $request_params = $this->do_empty_data($params);        $req_url = self::$gateWayUrl . $this->endpoint . "/list";        $header = $this->get_request_header($req_url, http_build_query($request_params), self::$headerText);        $this->result = $this->ada_request->curl_request($req_url . "?" . http_build_query($request_params), "", $header, false);    }}