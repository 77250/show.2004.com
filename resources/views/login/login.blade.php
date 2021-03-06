@extends('layouts.shop')
@section('title','注册')
@section('name')
	<div class="login-box">
		<!--head-->
		<div class="py-container logoArea">
			<a href="" class="logo"></a>
		</div>
		<!--loginArea-->
		<div class="loginArea">
			<div class="py-container login">
				<div class="loginform">
					<ul class="sui-nav nav-tabs tab-wraped">
						<li>
							<a href="#index" data-toggle="tab">
								<h3>扫描登录</h3>
							</a>
						</li>
						<li class="active">
							<a href="#profile" data-toggle="tab">
								<h3>账户登录</h3>
							</a>
						</li>
					</ul>
					<div class="tab-content tab-wraped">
						<div id="index" class="tab-pane">
							<p>二维码登录，暂为官网二维码</p>
							<img src="index/img/wx_cz.jpg" />
						</div>
						<div id="profile" class="tab-pane  active">
							<form class="sui-form" action="{{url('/login/loginDo')}}" method="post">
							@csrf
								<div class="input-prepend"><span class="add-on loginname"></span>
									<input id="prependedInput" type="text" name="name" placeholder="邮箱/用户名/手机号" class="span2 input-xfat">
								</div>
								<div class="input-prepend"><span class="add-on loginpwd"></span>
									<input id="prependedInput" name="pwd" type="password" placeholder="请输入密码" class="span2 input-xfat">
								</div>
								<div class="setting">
									<label class="checkbox inline">
          <input name="m1" type="checkbox" value="2" checked=""> 
          自动登录
        </label>
									<span class="forget">忘记密码？</span>
								</div>
								<div class="logined">
									<input class="sui-btn btn-block btn-xlarge btn-danger" type="submit" value="登&nbsp;&nbsp;录">
									
								</div>
							</form>
							<div class="otherlogin">
								<div class="types">
									<ul>
										<li><img src="index/img/qq.png" width="35px" height="35px" /></li>
										<li><img src="index/img/sina.png" /></li>
										<li><img src="index/img/ali.png" /></li>
										<li><img src="index/img/weixin.png" /></li>
									</ul>
								</div>
								<span class="register"><a href="register" target="_blank">立即注册</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--foot-->
		@endsection