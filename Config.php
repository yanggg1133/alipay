<?php
/**
 * Created by PhpStorm.
 * User: luckerdj
 * Date: 16/6/27
 * Time: 上午11:12
 */

namespace minms\alipay;


class Config
{
    //合作身份者id，以2088开头的16位纯数字
    public static $partner;
    //安全检验码，以数字和字母组成的32位字符
    public static $key;
    //签名方式 不需修改
    public static $sign_type = 'MD5';
    //字符编码格式 目前支持 gbk 或 utf-8
    public static $input_charset = '';
    //ca证书路径地址，用于curl中ssl校验
    public static $cacert = '';
    //访问模式,根据自己的服务器是否支持ssl访问，若支持请选择https；若不支持请选择http
    public static $transport = 'http';
}