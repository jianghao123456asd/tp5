<?php


namespace app\index\controller;


use think\Controller;
use think\Db;
use think\Request;

class Goods extends Controller
{
    public function index(){
//        $data=db('goods')->alias('a')->join('goodsclass gc','gc.id=a.class_id')->select();

//         $data=Db::name('goods')->where('id = :id',['id'=>4])->find();
//        var_dump($data);exit;
     $data=\app\index\Model\Goods::all();
//  var_dump($data->GoodsClass->namee);exit;
    return $this->fetch('',['data'=>$data]);
    }
    public function add(){
         $list=\app\index\Model\Goodsclass::all();

        return $this->fetch('',['data'=>$list,'list'=>$list]);
    }
    public function store(Request $rquest){
        $data=$rquest->param();
        var_dump($data);exit;
              $goods=new \app\index\Model\Goods();
        $data=$rquest->post();
              $goods->insert($data);


    }

}