<?php
/**
 * Created by PhpStorm.
 * User: JUST LIKE THAT
 * Date: 2019/5/13
 * Time: 13:25
 */

namespace app\index\Validate;


use think\Validate;

class Login extends Validate
{
    protected $rule=[
      'name|用户名'=>'require|token',
        'password|密码'=>'require'
    ];

}