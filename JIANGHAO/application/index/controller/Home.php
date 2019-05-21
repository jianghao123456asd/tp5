<?php
/**
 * Created by PhpStorm.
 * User: JUST LIKE THAT
 * Date: 2019/5/14
 * Time: 13:32
 */

namespace app\index\controller;


use think\Controller;
use think\Request;
use think\Session;

class Home extends Controller
{
    public function __construct(Request $request = null)
    {
          $res=Session::has('login_admin');
          if (!$res){
              $this->error('请登录后在操作','http://www.jh.test/login');

          }
        parent::__construct($request);
    }

    public function index(){
    return $this->fetch();
   }
   public function delete(){
         Session::delete('login_admin');
   }
}