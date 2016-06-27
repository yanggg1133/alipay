支付宝


##使用方法

1. 配置
 \minms\alipay\Config::$partner = "xxx";
 \minms\alipay\Config::$key = "xxx";

2. 调用
  $batch = new BatchTrans();

  $parameter = array(
      "service" => "batch_trans_notify",
      "partner" => trim(Config::$partner),
      "notify_url"	=> 'notify_url',
      "email"	=> 'xxx@xxx 支付宝账号',
      "account_name"	=> 'xxxxx公司',
      "pay_date"	=> '20160627',
      "batch_no"	=> '201008010000001',
      "batch_fee"	=> '0.01',
      "batch_num"	=> '1',
      "detail_data"	=> '000001^支付宝账号^姓名^0.01^测试',
      "_input_charset"	=> trim(strtolower(Config::$input_charset))
  );

  $result = $batch->buildRequestForm($parameter);
  echo $result;