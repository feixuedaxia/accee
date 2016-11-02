@extends('front.layout')



@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-xs-6">
				<h3>关于商会</h3>
				<ul class="nav nav-pills nav-stacked">
				  <li role="presentation"><a href="{{url('/about/aim')}}">宗旨</a></li>
				  <li role="presentation" class="active"><a href="{{url('/about/regulations')}}">章程</a></li>
				  <li role="presentation"><a href="{{url('/about/council')}}">理事会</a></li>
				  <li role="presentation"><a href="{{url('/about/join-in')}}">申请入会</a></li>
				</ul>
			</div>
			<div class="col-md-10 col-xs-6">
				<h1><a href="">章程</a></h1>
			</div>
		</div>
	</div>


    



@stop