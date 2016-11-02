@extends('front.layout')



@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-xs-6">
				<h3>会员企业</h3>
				<ul class="nav nav-pills nav-stacked">
				  <li class="active"><a href="{{ url('/membership/members') }}">各会员企业简介</a></li>
                  <li><a href="{{ url('/membership/service') }}">会员服务</a>
                  	<ul class="nav nav-pills nav-stacked">
					  <li><a href="{{ url('/membership/brand-promotion') }}">品牌推广</a></li>
	                  <li><a href="{{ url('/membership/products') }}">会员产品</a></li>
	                  <li><a href="{{ url('/membership/career') }}">招聘信息</a></li>
					</ul>
                  </li>
				</ul>
			</div>
			<div class="col-md-10 col-xs-6">
				<h1><a href="">各会员企业简介</a></h1>
			</div>
		</div>
	</div>


 <style type="text/css">
 	li ul.nav.nav-pills.nav-stacked {
    position: relative;
    left: 15px;
	}
 </style>   



@stop