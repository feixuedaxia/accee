@extends('front.layout')



@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-xs-6">
				<h3>投资平台</h3>
				<ul class="nav nav-pills nav-stacked">
				  <li class="active"><a href="{{ url('/investment/demand') }}">项目需求</a></li>
                  <li><a href="{{ url('/investment/sale') }}">项目出售</a></li>
				</ul>
			</div>
			<div class="col-md-10 col-xs-6">
				<h1><a href="">项目需求</a></h1>
			</div>
		</div>
	</div>


 <style type="text/css">
 	/*侧边栏二级子菜单*/
 	li ul.nav.nav-pills.nav-stacked {
    position: relative;
    left: 15px;
	}
 </style>   



@stop