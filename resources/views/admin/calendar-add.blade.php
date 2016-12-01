@extends('admin.layout')



@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1>Add New Event</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">

		<div id="PostController" style="padding-top: 1em">	


				<div class="col-lg-6">
						<div class="col-md-12">
							<!-- <form action="{{url('/api/calendar')}}" method="POST"> -->
							<form  @submit.prevent="AddnewEvent" method="POST">
							<!-- <input type="hidden" name="_token" value="{!! csrf_token() !!}"> -->
								<div class="form-group">
									<label for="title">Title:</label>
									<input v-model="newEvent.title" type="text" id="title" name="title" class="form-control">
								</div>

								<div class="form-group ">
									<label for="allDay">All Day:</label><br>
	                                <input type="checkbox" id="checkbox" name="allDay" v-model="newEvent.allDay">
									<label for="checkbox">@{{ newEvent.allDay }}</label>
	                            </div>

	                            <p>Date: <input type="text" id="datepicker" v-model="date" size="30"></p>
	                            <template v-if="!newEvent.allDay">
	                            	<div class="form-group">
		                            	<div class="row">
		                            		<div class="col-md-6">
											  <label for="sel1">Time: Start</label>
											  <select class="form-control" v-model="timestart" name='timestart'>
											    <option v-for="option in time" v-bind:value='option'>
												    @{{option}}
												</option>
											  </select>
											  <span>Selected: @{{ timestart }}</span>
											</div>
											<div class="col-md-6">
											  <label for="sel1">Time: End</label>
											  <select class="form-control" v-model="timeend" name='timeend'>
											    <option v-for="option in time" v-bind:value='option'>
												    @{{option}}
												</option>
											  </select>
											  <span>Selected: @{{ timeend }}</span>
											</div>
										</div>
									</div>
								</template>
								<div class="form-group ">
									<label for="color">Importance Rate: (不同的程度，事件会显示不同的颜色背景)</label><br>
	                                <label class="radio-inline">
									  <input type="radio" name="color" id="inlineRadio1" value="#00A37D" v-model="newEvent.color"> 1
									</label>
									<label class="radio-inline">
									  <input type="radio" name="color" id="inlineRadio2" value="#AD3C46" v-model="newEvent.color"> 2
									</label>
									<label class="radio-inline">
									  <input type="radio" name="color" id="inlineRadio3" value="#E55B00" v-model="newEvent.color"> 3
									</label>
									<label class="radio-inline">
									  <input type="radio" name="color" id="inlineRadio4" value="#3555D6" v-model="newEvent.color"> 4
									</label>
									<label class="radio-inline">
									  <input type="radio" name="color" id="inlineRadio4" value="#D8D517" v-model="newEvent.color"> 5
									</label>
									<button type="button" class="btn" style="color:white" v-bind:style="styleObject">Color</button>
	                            </div>

								<div class="form-group">
									<label for="url">URL Name:</label>
									<input v-model="newEvent.url" id="url" name="url" class="form-control">
								</div>

				
								<div class="form-group">
									<button class="btn btn-default" type="submit" v-if="!edit" >Publish</button>

								</div>

							</form>
						</div>	
						<div class="alert alert-success" transition="success" v-if="success">Add new user successful.</div>
				</div>
				<div class="col-lg-6">
					<h2>All Events</h2>
					<table class="table">
						<thead>
							<th>Title</th>
							<th>AllDay</th>
							<th>Start</th>
							<th>End</th>
							<th>CONTROLLER</th>
						</thead>

						<tbody>
							<tr v-for="event in events">
								<td>@{{ event.title }}</td>
								<td>@{{ event.allDay ? 'Yes':'No' }}</td>
								<td>@{{ event.start }}</td>
								<td>@{{ event.end }}</td>
								<td>
									<button class="btn btn-danger btn-sm" @click="RemoveEvent(event.id)">Remove</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

		</div>

	</div>



</div>


@endsection


@push('scripts')

<style>
	.success-transition {
		transition: all .5s ease-in-out;
	}
	.success-enter, .success-leave {
		opacity: 0;
	}
</style>


<script>
	$( function(){
		$( "#datepicker" ).datepicker({
			dateFormat: "yy-mm-dd"
		});

	});

</script>



<script>
	

	var vm = new Vue({
		http: {
	      root: '/root',
	      headers: {
	        'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
	      }
	    },

		el: '#PostController',

		data: {

			newEvent: {
				//id:'',
				title: '',
				allDay: false,
				color:'',
				url:'',
			},

			date:'',

			timestart:'',

			timeend:'',

			time:['06:00','06:30','07:00','07:30','08:00','08:30','09:00','09:30','10:00','10:30',
					'11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30',
					'16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30',
					'20:00','20:30','21:00','21:30','22:00','22:30'],

			success: false,

			edit: false
		},

		methods: {

			fetchEvent: function () {
				this.$http.get('/api/calendar', function (data) {
					this.$set('events', data)
				})
			},

			AddnewEvent: function () {

				var Event = {
					title:this.newEvent.title,
					allDay: this.newEvent.allDay,
					color: this.newEvent.color,
					url: this.newEvent.url,
					timestart:this.timestart,
					timeend: this.timeend,
					start: this.start,
					end: this.end,
				}

				this.$http.post('/api/calendar/', Event, function (data) {
					console.log(data)
				})

				console.log(Event);

				// this.newEvent = { id: '', title: '',post_author_id:'', post_content: ''}

				// Reload page
				this.fetchEvent()

			},

			RemoveEvent: function (id) {
				var ConfirmBox = confirm("Are you sure, you want to delete this Event?")

				if(ConfirmBox) this.$http.delete('/api/calendar/' + id)

				this.fetchEvent()
			},

		},

		computed:{

			rateColor: function(){

				return this.newEvent.color;
			},

			styleObject: function () {
			    return {
    				'background-color': this.newEvent.color,
    				'border-color': this.newEvent.color,
			    }
			  },

			start: function(){

				if (this.newEvent.allDay==false) {

					return this.date +' ' + this.timestart;
				}

				else{

					return this.date
				}

			},

			end: function(){

				if (this.newEvent.allDay==false) {

					return this.date + ' ' + this.timeend;
				}

				else{

					return null
				}
			},

		},

		ready: function () {

			this.fetchEvent();

			var Event = 'Hello World How are you'
			
			console.log(Event);
		}
	});

</script>
@endpush