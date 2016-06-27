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
    public function __construct($config = [])
    {
        if(empty($config) && empty(Config::$partner)){
            throw new \Exception('请设置商户ID');
        }
    }


}