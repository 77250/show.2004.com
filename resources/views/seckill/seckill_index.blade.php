<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<title>品优购秒杀-正品秒杀！</title>
	<link rel="icon" href="/assets/index/img/favicon.ico">


    <link rel="stylesheet" type="text/css" href="index/css/webbase.css" />
    <link rel="stylesheet" type="text/css" href="index/css/widget-jquery.autocomplete.css" />
    <link rel="stylesheet" type="text/css" href="index/css/pages-seckill-index.css" />
</head>

<@extends('layouts.show')
@section('title','首页')
@section('show')


<script type="text/javascript" src="index/js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
	$("#service").hover(function(){
		$(".service").show();
	},function(){
		$(".service").hide();
	});
	$("#shopcar").hover(function(){
		$("#shopcarlist").show();
	},function(){
		$("#shopcarlist").hide();
	});

})
</script>
<script type="text/javascript" src="index/js/plugins/sui/sui.min.js"></script>
<script type="text/javascript" src="index/js/widget/jquery.autocomplete.js"></script>
<script type="text/javascript" src="index/js/widget/nav.js"></script>
<script type="text/javascript" src="index/js/pages/seckill-index.js"></script>
<script>
	   $(function(){
		   $("#code").hover(function(){
			   $(".erweima").show();
		   },function(){
			   $(".erweima").hide();
		   });
	   })
	</script>
</body>

	<div class="py-container index">
		<!--banner-->
		<div class="banner">
			<img src="index/img/_/banner.png" class="img-responsive" alt="">
		</div>
		<!--秒杀时间-->
		<div class="sectime">
			<div class="item-time active">
				<div class="time-clock">12:00</div>
				<div class="time-state-on">
					<span class="on-text">快抢中</span>
					<span class="on-over">距离结束：01:02:34</span>
				</div>
			</div>
			<div class="item-time">
				<div class="time-clock">14:00</div>
				<div class="time-state-will">
					<span>即将开始</span>
				</div>
			</div>
			<div class="item-time">
				<div class="time-clock">16:00</div>
				<div class="time-state-will">
					<span>即将开始</span>
				</div>
			</div>
			<div class="item-time">
				<div class="time-clock">18:00</div>
				<div class="time-state-will">
					<span>即将开始</span>
				</div>
			</div>
			<div class="item-time">
				<div class="time-clock">20:00</div>
				<div class="time-state-will">
					<span>即将开始</span>
				</div>
			</div>
		</div>
		<!--商品列表-->
		<div class="goods-list">
			<ul class="seckill" id="seckill">
				<li class="seckill-item">
					<div class="pic">
						<img src="index/img/_/list.jpg" alt=''>
					</div>
					<div class="intro"><span>Apple苹果iPhone 6s 32G金色 移动联通电信4G手机</span></div>
					<div class='price'><b class='sec-price'>￥6088</b><b class='ever-price'>￥6988</b></div>
					<div class='num'>
						<div>已售87%</div>
						<div class='progress'>
							<div class='sui-progress progress-danger'><span style='width: 70%;' class='bar'></span></div>
						</div>
						<div>剩余<b class='owned'>29</b>件</div>
					</div>
					<a class='sui-btn btn-block btn-buy' href="{{url('/seckill_item')}}" target='_blank'>立即抢购</a>
				</li>
				<li class="seckill-item">
					<div class="pic">
						<img src="index/img/_/list.jpg" alt=''>
					</div>
					<div class="intro"><span>Apple苹果iPhone 6s 32G金色 移动联通电信4G手机</span></div>
					<div class='price'><b class='sec-price'>￥6088</b><b class='ever-price'>￥6988</b></div>
					<div class='num'>
						<div>已售87%</div>
						<div class='progress'>
							<div class='sui-progress progress-danger'><span style='width: 70%;' class='bar'></span></div>
						</div>
						<div>剩余<b class='owned'>29</b>件</div>
					</div>
					<a class='sui-btn btn-block btn-buy' href='seckill-item.html' target='_blank'>立即抢购</a>
				</li>
				<li class="seckill-item">
					<div class="pic">
						<img src="index/img/_/list.jpg" alt=''>
					</div>
					<div class="intro"><span>Apple苹果iPhone 6s 32G金色 移动联通电信4G手机</span></div>
					<div class='price'><b class='sec-price'>￥6088</b><b class='ever-price'>￥6988</b></div>
					<div class='num'>
						<div>已售87%</div>
						<div class='progress'>
							<div class='sui-progress progress-danger'><span style='width: 70%;' class='bar'></span></div>
						</div>
						<div>剩余<b class='owned'>29</b>件</div>
					</div>
					<a class='sui-btn btn-block btn-buy' href='seckill-item.html' target='_blank'>立即抢购</a>
				</li>
				<li class="seckill-item">
					<div class="pic">
						<img src="index/img/_/list.jpg" alt=''>
					</div>
					<div class="intro"><span>Apple苹果iPhone 6s 32G金色 移动联通电信4G手机</span></div>
					<div class='price'><b class='sec-price'>￥6088</b><b class='ever-price'>￥6988</b></div>
					<div class='num'>
						<div>已售87%</div>
						<div class='progress'>
							<div class='sui-progress progress-danger'><span style='width: 70%;' class='bar'></span></div>
						</div>
						<div>剩余<b class='owned'>29</b>件</div>
					</div>
					<a class='sui-btn btn-block btn-buy' href='seckill-item.html' target='_blank'>立即抢购</a>
				</li>
				<li class="seckill-item">
					<div class="pic">
						<img src="index/img/_/list.jpg" alt=''>
					</div>
					<div class="intro"><span>Apple苹果iPhone 6s 32G金色 移动联通电信4G手机</span></div>
					<div class='price'><b class='sec-price'>￥6088</b><b class='ever-price'>￥6988</b></div>
					<div class='num'>
						<div>已售87%</div>
						<div class='progress'>
							<div class='sui-progress progress-danger'><span style='width: 70%;' class='bar'></span></div>
						</div>
						<div>剩余<b class='owned'>29</b>件</div>
					</div>
					<a class='sui-btn btn-block btn-buy' href='seckill-item.html' target='_blank'>立即抢购</a>
				</li>
				<li class="seckill-item">
					<div class="pic">
						<img src="index/img/_/list.jpg" alt=''>
					</div>
					<div class="intro"><span>Apple苹果iPhone 6s 32G金色 移动联通电信4G手机</span></div>
					<div class='price'><b class='sec-price'>￥6088</b><b class='ever-price'>￥6988</b></div>
					<div class='num'>
						<div>已售87%</div>
						<div class='progress'>
							<div class='sui-progress progress-danger'><span style='width: 70%;' class='bar'></span></div>
						</div>
						<div>剩余<b class='owned'>29</b>件</div>
					</div>
					<a class='sui-btn btn-block btn-buy' href='seckill-item.html' target='_blank'>立即抢购</a>
				</li>
				<li class="seckill-item">
					<div class="pic">
						<img src="index/img/_/list.jpg" alt=''>
					</div>
					<div class="intro"><span>Apple苹果iPhone 6s 32G金色 移动联通电信4G手机</span></div>
					<div class='price'><b class='sec-price'>￥6088</b><b class='ever-price'>￥6988</b></div>
					<div class='num'>
						<div>已售87%</div>
						<div class='progress'>
							<div class='sui-progress progress-danger'><span style='width: 70%;' class='bar'></span></div>
						</div>
						<div>剩余<b class='owned'>29</b>件</div>
					</div>
					<a class='sui-btn btn-block btn-buy' href='seckill-item.html' target='_blank'>立即抢购</a>
				</li>
				<li class="seckill-item">
					<div class="pic">
						<img src="index/img/_/list.jpg" alt=''>
					</div>
					<div class="intro"><span>Apple苹果iPhone 6s 32G金色 移动联通电信4G手机</span></div>
					<div class='price'><b class='sec-price'>￥6088</b><b class='ever-price'>￥6988</b></div>
					<div class='num'>
						<div>已售87%</div>
						<div class='progress'>
							<div class='sui-progress progress-danger'><span style='width: 70%;' class='bar'></span></div>
						</div>
						<div>剩余<b class='owned'>29</b>件</div>
					</div>
					<a class='sui-btn btn-block btn-buy' href='seckill-item.html' target='_blank'>立即抢购</a>
				</li>
				<li class="seckill-item">
					<div class="pic">
						<img src="index/img/_/list.jpg" alt=''>
					</div>
					<div class="intro"><span>Apple苹果iPhone 6s 32G金色 移动联通电信4G手机</span></div>
					<div class='price'><b class='sec-price'>￥6088</b><b class='ever-price'>￥6988</b></div>
					<div class='num'>
						<div>已售87%</div>
						<div class='progress'>
							<div class='sui-progress progress-danger'><span style='width: 70%;' class='bar'></span></div>
						</div>
						<div>剩余<b class='owned'>29</b>件</div>
					</div>
					<a class='sui-btn btn-block btn-buy' href='seckill-item.html' target='_blank'>立即抢购</a>
				</li>
				<li class="seckill-item">
					<div class="pic">
						<img src="index/img/_/list.jpg" alt=''>
					</div>
					<div class="intro"><span>Apple苹果iPhone 6s 32G金色 移动联通电信4G手机</span></div>
					<div class='price'><b class='sec-price'>￥6088</b><b class='ever-price'>￥6988</b></div>
					<div class='num'>
						<div>已售87%</div>
						<div class='progress'>
							<div class='sui-progress progress-danger'><span style='width: 70%;' class='bar'></span></div>
						</div>
						<div>剩余<b class='owned'>29</b>件</div>
					</div>
					<a class='sui-btn btn-block btn-buy' href='seckill-item.html' target='_blank'>立即抢购</a>
				</li>
				<li class="seckill-item">
					<div class="pic">
						<img src="index/img/_/list.jpg" alt=''>
					</div>
					<div class="intro"><span>Apple苹果iPhone 6s 32G金色 移动联通电信4G手机</span></div>
					<div class='price'><b class='sec-price'>￥6088</b><b class='ever-price'>￥6988</b></div>
					<div class='num'>
						<div>已售87%</div>
						<div class='progress'>
							<div class='sui-progress progress-danger'><span style='width: 70%;' class='bar'></span></div>
						</div>
						<div>剩余<b class='owned'>29</b>件</div>
					</div>
					<a class='sui-btn btn-block btn-buy' href='seckill-item.html' target='_blank'>立即抢购</a>
				</li>
				<li class="seckill-item">
					<div class="pic">
						<img src="index/img/_/list.jpg" alt=''>
					</div>
					<div class="intro"><span>Apple苹果iPhone 6s 32G金色 移动联通电信4G手机</span></div>
					<div class='price'><b class='sec-price'>￥6088</b><b class='ever-price'>￥6988</b></div>
					<div class='num'>
						<div>已售87%</div>
						<div class='progress'>
							<div class='sui-progress progress-danger'><span style='width: 70%;' class='bar'></span></div>
						</div>
						<div>剩余<b class='owned'>29</b>件</div>
					</div>
					<a class='sui-btn btn-block btn-buy' href='seckill-item.html' target='_blank'>立即抢购</a>
				</li>


			</ul>
		</div>
		<div class="cd-top">
			<div class="top">
				<img src="index/img/_/gotop.png" />
				<b>TOP</b>
			</div>
			<div class="code" id="code">
				<span><img src="index/img/_/code.png"/></span>
			</div>
			<div class="erweima">
				<img src="index/img/_/erweima.jpg" alt="">
				<s></s>
			</div>
		</div>
	</div>

	<!--回到顶部-->

	@endsection