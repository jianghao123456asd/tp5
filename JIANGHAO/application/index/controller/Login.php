<?php
/**
 * Created by PhpStorm.
 * User: JUST LIKE THAT
 * Date: 2019/5/12
 * Time: 21:49
 */

namespace app\index\controller;


use app\index\yz\password;
use think\Controller;
use think\Request;
use think\Session;

class Login extends Controller
{
    public function index(){
 return       $this->fetch();
    }
    public function login(Request $request){
         $login= new \app\index\Validate\Login();
         $res=$login->check($request->post());
         if (!$res){
             $this->error($login->getError());
         }
         $row=\app\index\Model\Admin::get(['name'=>$request->post('name')]);
         if ($row){
//             echo $row['password'];
//             echo $request->post('password');
             $pwd=new password();
             $res= $pwd->chek($request->post('password'),$row['password']);
//             var_dump($res);
           if($res){
               Session::set('login_admin',$row);
                 $this->success('登录成    功','http://www.jh.test/index/goods/index.html');
          }else{
               echo '密码错误';
           }
         }




    }

}