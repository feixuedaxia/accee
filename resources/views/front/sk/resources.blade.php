@extends('front.layout')



@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-xs-6">
				<h3>萨省简介</h3>
				<ul class="nav nav-pills nav-stacked">
				  <li><a href="{{ url('/sk/land-environment-cultural') }}">土地、环境、人文</a></li>
                  <li><a href="{{ url('/sk/city-trafic') }}">城市和交通</a></li>
                  <li><a href="{{ url('/sk/policy') }}">政策、法规</a></li>
                  <li><a href="{{ url('/sk/immigration') }}">移民</a></li>
                  <li role="separator" class="divider"></li>
              	  <li><a href="{{ url('/sk/resources') }}">萨省资源</a>
                  	<ul class="nav nav-pills nav-stacked">
					  <li><a href="#">金融</a></li>
					  <li><a href="#">地产</a></li>
					  <li><a href="#">矿业</a></li>
					  <li><a href="#">林业</a></li>
					  <li><a href="#">畜牧业</a></li>
					  <li><a href="#">农业</a></li>
					  <li><a href="#">科技</a></li>
					</ul>
                  </li>
				</ul>
			</div>
			<div class="col-md-10 col-xs-6">
				<h1><a href="">萨省资源</a></h1>
			</div>
		</div>
	</div>


    



@stop

<style type="text/css">
 	li ul.nav.nav-pills.nav-stacked {
    position: relative;
    left: 15px;
	}
 </style> 