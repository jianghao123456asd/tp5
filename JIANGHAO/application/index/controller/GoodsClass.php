<?php


namespace app\index\controller;


use think\Controller;
use think\Request;

class GoodsClass extends Controller
{
    public function index(){
         $list=\app\index\Model\Goodsclass::all();

//        $goods= model('Gooodsclass');
//        $goods->save()
         $this->assign('list',$list);
        return $this->fetch();

    }
    public function add(){

        return $this->fetch();
    }
    public function store(Request $request){
        $name=$request->post('goodsname');
        $goodsclass=new \app\index\Model\Goodsclass();
        $goodsclass->namee=$name;
        $goodsclass->save();
    }
}