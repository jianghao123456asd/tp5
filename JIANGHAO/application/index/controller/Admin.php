<?php
/**
 * Created by PhpStorm.
 * User: JUST LIKE THAT
 * Date: 2019/5/11
 * Time: 22:37
 */

namespace app\index\controller;


use app\index\Validate\adminValidate;
use app\index\yz\password;
use think\Controller;
use think\Request;
use think\Session;

class Admin extends Controller
{
    public  function add(){
        return $this->fetch();
    }
    public function store(Request $request){
        $name=$request->post('name');
        $am=new \app\index\Model\Admin();
        $count=$am->where('name','=',$name)->count();

        if ($count){
            $this->error('用户名已存在');
        }
        $data=$request->post();

        $adminv=new adminValidate();
        $res=$adminv->check($data);
        if (!$res){
            $this->error($adminv->getError());
        }
        $pwd=new password();
        $am=new \app\index\Model\Admin();
        $am->name=$request->post('name');
        $am->password=$pwd->hash($request->post('new_password'));
        $am->creatt_at =date("Y-m-d h:i");
        $am->update_at=date("Y-m-d h:i");
        $admins=$am->save();
         if ($am){
             $this->success('注册成功','http://www.jh.test/login');
         }else{
             $this->error('注册失败');
         }

    }
     public function password(){
        return $this->fetch();
     }
     public function pwd(Request $request){
      $password=$request->post('password');
         $pwd=new password();
         $res=$pwd->chek($password,Session::get("login_admin.password"));
         var_dump($res);
     }

}