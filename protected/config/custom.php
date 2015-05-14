<?php
/**
 * Created by PhpStorm.
 * User: xiongfanglei
 * Date: 14-8-27
 * Time: 下午12:27
 */

return array(
    'params' => array(
        // this is used in contact page
        'weixin'=>array(
            'APPID'=>'',   //微信官方给的，有这个才能用牛逼功能
            'APPSECRET'=>'',  //微信官方给的，有这个才能用牛逼功能
            'TOKEN'=>'', //需程序员自定义的参数，定义时要发到微信，用来验证身份
        ),
        'ticket'=>"",
        'wxAdminList' =>  array(
            "",
        ),
        'wxid' => '',
        'sms' => array(
            "username"=>"",
            "password"=>"",
            "url"=>""
        ),

    )
);