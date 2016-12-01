@extends('admin.layout')



@section('content')

<div class="row">
	<h1>Calender</h1>
	<div class="col-lg-6">
		<p><a class="btn btn-info" href="{{url('/admin/calendar-add')}}">Add New Event</a></p>
	</div>
</div>
<div class="row">
	<div class="col-md-11">
		<div id='calendar'></div>
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
    <script src="{{ URL::asset('js/calendar-custom.js') }}"></script> 
    <script src="{{ URL::asset('js/jquery.rateit.min.js') }}"></script> 

	<script src=""></script>

	<style>

	</style>
@endpush