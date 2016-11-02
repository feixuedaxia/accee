@extends('front.layout')



@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-xs-6">
				<h3>商会活动</h3>
				<ul class="nav nav-pills nav-stacked">
				  <li class="active"><a href="{{ url('/activity/calender') }}">日历</a></li>
                  <li><a href="{{ url('/activity/accee') }}">商会活动</a></li>
                  <li><a href="{{ url('/activity/exchange') }}">考察交流</a></li>
                  <li><a href="{{ url('/activity/public-spirit') }}">公益活动</a></li>
				</ul>
			</div>
			<div class="col-md-10 col-xs-6">
				<h1><a href="">日历</a></h1>
			</div>
		</div>
	</div>


    



@stop