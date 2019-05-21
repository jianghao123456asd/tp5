<?php
/**
 * Created by PhpStorm.
 * User: JUST LIKE THAT
 * Date: 2019/5/13
 * Time: 17:14
 */

namespace app\index\yz;


class password
{
    public function hash($value){
     $hash= password_hash($value,PASSWORD_BCRYPT);
     return $hash;
    }
    public function chek($value,$hashvalue){
      return  password_verify($value,$hashvalue);
    }


}