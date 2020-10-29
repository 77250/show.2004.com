<?php

namespace App\Http\Controllers\controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\GoodsModel;
use Illuminate\Support\Facades\Redis;
class SearchController extends Controller
{
    // 列表
    public function search(){
        // echo 1;exit;
        $pageSize=config('app.pageSize');
        $data = GoodsModel::paginate($pageSize);
        return view('seckill/search',['data'=>$data]);
    }
     // 详情页
     public function seckill_item(){
        // echo 1;exit;
        return view('seckill/seckill_item');
    }
}
