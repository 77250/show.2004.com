@extends('layouts.shop')
@section('title','注册')
@section('name')
	<div class="register py-container ">
		<!--head-->
		<div class="logoArea">
			<a href="" class="logo"></a>
			
		</div>
		<!--register-->
		<div class="registerArea">
			<h3>注册新用户<span class="go">我有账号，去<a href="login" target="_blank">登陆</a></span></h3>
			<div class="info">
			
				<form class="sui-form form-horizontal" action="{{url('/login/regisDo')}}" method="post">
				@csrf
					<div class="control-group">
						<label class="control-label">用户名：</label>
						<div class="controls">
							<input type="text" placeholder="请输入你的用户名" class="input-xfat input-xlarge" name="name">
						</div>
					</div>
					<div class="control-group">
						<label for="inputPassword" class="control-label">登录密码：</label>
						<div class="controls">
							<input type="password" placeholder="设置登录密码" class="input-xfat input-xlarge" name="pwd">
						</div>
					</div>
					<div class="control-group">
						<label for="inputPassword" class="control-label">确认密码：</label>
						<div class="controls">
							<input type="password" placeholder="再次确认密码" class="input-xfat input-xlarge" name="pwds">
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">手机号：</label>
						<div class="controls">
							<input type="text" placeholder="请输入你的手机号" class="input-xfat input-xlarge" name="phone">
						</div>
					</div>
					<div class="control-group">
						<label for="inputPassword" class="control-label">短信验证码：</label>
						<div class="controls">
							<input type="text" placeholder="短信验证码" class="input-xfat input-xlarge" name="code">  <a href="#">获取短信验证码</a>
						</div>
					</div>
					
					<div class="control-group">
						<label for="inputPassword" class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<div class="controls">
							<input name="m1" type="checkbox" value="2" checked=""><span>同意协议并注册《品优购用户协议》</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"></label>
						<div class="controls btn-reg">
						<input class="sui-btn btn-block btn-xlarge btn-danger" type="submit" target="_blank" value="完成注册">
							
						</div>
					</div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>
@endsection