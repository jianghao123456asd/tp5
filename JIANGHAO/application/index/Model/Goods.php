<?php


namespace app\index\Model;


use think\Model;

class Goods extends Model
{
    public function GoodsClass(){
        return $this->belongsTo('Goodsclass','class_id','id');
//        return $this->hasOne('GoodsClass','class_id','id');
    }


}