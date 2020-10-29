<?php

namespace App\Http\Controllers\controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
class PrizeController extends Controller
{
    // 抽奖视图
    public function prize(){
        return view('prize.prize');
    }
    // 开始抽奖
    public function add(){
        $uid = session()->get('id');
        if(empty($uid)){
            $response = [
              'errno' => 400003,
              'msg' => '未登录'  
            ];
            return $response;
        }
        $rand = mt_rand(1,10);
        $prize = '未中奖';
        if($rand == 7){
            // 一等奖
            $prize = '一等奖';
        }elseif($rand == 6){
            // 二等奖
            $prize = '二等奖';
        }elseif($rand ==5){
            // 三等奖
            $prize = '三等奖';
        }
        $data = [
            'errno' => '未中奖',
            'msg' => 'ok',
            'data' => [
                'prize' => $prize
            ]
        ];
        return $data;
    }
}

?>
