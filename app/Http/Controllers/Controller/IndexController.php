<?php

namespace App\Http\Controllers\controller;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
class IndexController extends Controller
{
    // 首页展示
    public function index(){
        // echo 1;exit;
        return view('index/index');
    }
    
    
    // // 详情页
    // public function seckill_item(){
    //     // echo 1;exit;
    //     return view('seckill/seckill_item');
    // }
    // 秒杀视图
    public function seckill_index(){
        return view('seckill/seckill_index');
    }
 
    // 秒杀详情
    public function cart(){
        return view('cart/cart');
    }


    // 个人中心

    // 个人订单
    public function home_index(){
        return view('home/home_index');
    }
    public function home_order_evaluate(){
        return view('home/home_order_evaluate');
    }
    public function home_order_pay(){
        return view('home/home_order_pay');
    }
    public function home_order_receive(){
        return view('home/home_order_receive');
    }
    public function home_order_send(){
        return view('home/home_order_send');
    }
    public function home_orderDetail(){
        return view('home/home_orderDetail');
    }
    public function home_person_collect(){
        return view('home/home_person_collect');
    }
    public function home_person_footmark(){
        return view('home/home_person_footmark');
    }
    public function home_setting_address(){
        return view('home/home_setting_address');
    }
    public function home_setting_address_complete(){
        return view('home/home_setting_address_complete');
    }
    public function home_setting_address_phone(){
        return view('home/home_setting_address_phone');
    }
    public function home_setting_info(){
        return view('home/home_setting_info');
    }
    public function home_setting_safe(){
        return view('home/home_setting_safe');
    }
    // 注册

}
?>
