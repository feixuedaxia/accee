@extends('admin.layout')



@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1>Add New Posts</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">

		<div id="PostController" style="padding-top: 1em">	
				<div class="col-lg-6">
					<p><span>Add New Posts</span><button @click="AddNewPost">Add New</button></p>
				</div>

				<div class="col-lg-8">
						<div class="col-md-12">
							<form action="{{url('/api/post')}}" method="POST">
							<input type="hidden" name="_token" value="{!! csrf_token() !!}">
								<div class="form-group">
									<label for="post_title">Title:</label>
									<input v-model="newPost.post_title" type="text" id="post_title" name="post_title" class="form-control">
								</div>

								<div class="form-group">
									<label for="post_content">Content:</label>
									<textarea v-model="newPost.post_content" type="textarea" id="post_content" name="post_content" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label for="post_name">URL Name:</label>
									<input v-model="newPost.post_name" id="post_name" name="post_name" class="form-control">
								</div>

								<div class="form-group">
									<label for="">Category:</label>
									{{ Form::select('categories', $categories, null, ['class'=>'form-control']) }}
								</div>

								

								<div class="form-group">
									<button class="btn btn-default" type="submit" v-if="!edit">Publish</button>

									<button class="btn btn-default" type="submit" v-if="!edit" @click="EditPost">Update</button>
								</div>

							</form>
						</div>	
						<div class="alert alert-success" transition="success" v-if="success">Add new user successful.</div>
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
		

var vm = new Vue({
	http: {
      root: '/root',
      headers: {
        'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
      }
    },

	el: '#PostController',

	data: {
		newPost: {
			//id:'',
			post_title: '',
			post_content: '',
			post_name:'',
		},

		success: false,

		edit: false
	},

	methods: {


		AddNewPost: function () {

			// Clear form input
			this.newPost = { id: '', post_title: '',post_author_id:'', post_content: ''}

		},

		PublishPost: function () {
			// User input
			var Post = this.newPost

			// Send post request
			this.$http.post('/api/post', Post)

			// Show success message
			self = this
			this.success = true
			setTimeout(function () {
				self.success = false
			}, 5000)

			// Reload page

		}

	},

	ready: function () {
		
		
	}
});
	</script>
@endpush