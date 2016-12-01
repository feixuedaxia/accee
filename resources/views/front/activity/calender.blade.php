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
				<div class="row">
					<div class="col-md-12">
						<div id='calendar'></div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection

@push('scripts')
	<!-- full calendar css-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.1.1/fullcalendar.css" rel="stylesheet" media="screen">
    <!-- Custom styles -->
    <link href="{{ URL::asset('css/fullcalendar.css') }}" rel="stylesheet" />
    
    <!-- jQuery full calendar -->
    <!-- <script src="{{ URL::asset('js/fullcalendar.min.js') }}"></script> -->
    <!-- Full Google Calendar - Calendar -->
    <!-- <script src="{{ URL::asset('assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script> -->

    <script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/moment.min.js'></script>

	<script src='http://fullcalendar.io/js/fullcalendar-2.1.1/fullcalendar.min.js'></script>

    <!--script for this page only-->
    <script src="{{ URL::asset('js/jquery.rateit.min.js') }}"></script> 

<script>
		var Script = function () {


	    /* initialize the external events
	     -----------------------------------------------------------------*/


	    /* initialize the calendar
	     -----------------------------------------------------------------*/

	    var date = new Date();
	    var d = date.getDate();
	    var m = date.getMonth();
	    var y = date.getFullYear();

	    $('#calendar').fullCalendar({
	        header: {
	            left: 'prev,next today',
	            center: 'title',
	            right: 'month,agendaWeek,agendaDay'
	        },

	        events: '/api/calendar'
	        // events: [
	        //     {
	        //         title: 'All Day Event',
	        //         start: new Date(y, m, 1)
	        //     },
	        //     {
	        //         title: 'Click for Google',
	        //         start: new Date(y, m, 28),
	        //         end: new Date(y, m, 29),
	        //         url: 'http://google.com/'
	        //     }
	        // ]
	    });

	}();
</script>

	<style>

	</style>
@endpush