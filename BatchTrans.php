<?php
/**
 * Created by PhpStorm.
 * User: luckerdj
 * Date: 16/6/27
 * Time: 上午11:11
 */

namespace minms\alipay;

require 'batch-trans/src/alipay_submit.class.php';

use minms\alipay\Config;

class BatchTrans
{
    private $alipay_submit;

    public function __construct()
    {
        if(empty(Config::$partner)){
            throw new \Exception('请设置商户ID');
        }

        Config::$cacert = realpath('batch-trans/cert/cacert.pem');

        $this->alipay_submit = new \AlipaySubmit([
            'partner' => Config::$partner,
            'key' => Config::$key,
            'sign_type' => Config::$sign_type,
            'input_charset' => Config::$input_charset,
            'cacert' => Config::$cacert,
            'transport' => Config::$transport
        ]);
    }


    public function buildRequestHttp($params){
        return $this->alipay_submit->buildRequestHttp($params);
    }

    public function buildRequestForm($params){
        return $this->alipay_submit->buildRequestForm($params, 'post', 'submit');
    }


}