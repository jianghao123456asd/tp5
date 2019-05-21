<?php
/**
 * Created by PhpStorm.
 * User: JUST LIKE THAT
 * Date: 2019/5/11
 * Time: 23:55
 */

namespace app\index\Validate;


use think\Validate;

class adminValidate extends Validate
{
    protected $rule=[
        'name|名称'=>'require|max:10|token',
        'new_password|密码'=>'require|max:10|confirm',
        'captcha|验证码'=>'require|captcha'
    ];

}