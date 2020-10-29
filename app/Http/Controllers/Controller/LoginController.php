<?php
namespace App\Http\Controllers\controller;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Model\LoginModel as LoginModels;

class LoginController extends Controller{
    // 登录展示
    public function login(){
        // echo 1;exit;
        return view('login/login');
    }
     // 注册展示
     public function register(){
        // echo 1;exit;
        return view('login/register');
    }
    public function regisDo(Request $request){
        $data = $request->except('_token');
        // dd ($data);
        // if($data['pwd']!=$data['pwds']){
        //     return redirect('login/login')->with('msg','密码不一致');
        // }
        $data['pwd'] = password_hash($data['pwd'],PASSWORD_DEFAULT);
        // dd($res);
    
        $res = LoginModels::insert($data);
        if($res){
            return redirect('/login');
        }
    }
    
    public function loginDo(Request $request){
        $data = $request->except('_token');
         //dd($data);
        // $where = [
        //     'name'=>$data['name'],
        //     'pwd'=>$data['pwd']
        // ];
        //  dd($where);
        $res = LoginModels::where(['name'=>$data['name']])
        ->orwhere(['pwd'=>$data['pwd']])
        ->first();
        // dd($res);
        if($res){
            session(['logins'=>$res]);
            // dd(session);

            return redirect('/');
        }
    }
    public function dell(){
        session(['logins'=>null]);
        return redirect('/login');
    }
}

?>