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
						    <!-- <form  @submit.prevent="EditPost(newPost.id)" method="POST"> -->
							<form action="{{url('/api/post/')}}/@{{newPost.id}}"  method="POST">
							{{ csrf_field() }}
							{{ method_field('PATCH') }}
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
									{{ Form::select('categories', $categories, $select, ['class'=>'form-control']) }}
								</div>

								<div class="form-group">

									<button class="btn btn-default" type="submit" v-if="edit">Update</button>
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
		
	var post = {!! json_encode($post->toArray()) !!};

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
			 id:'',
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

			ShowPost: function () {
				this.edit = true

				this.newPost.id = post.id
				this.newPost.post_title = post.post_title
				this.newPost.post_content = post.post_content
				this.newPost.post_name = post.post_name
			},



			EditPost: function (id) {

				var UpdatedPost = this.newPost

				//this.newPost = { id: '', post_title: '',post_author_id:'', post_content: ''}

				this.$http.patch('/api/post/' + id, UpdatedPost, function (data) {
					console.log(data)
				})


				

			},

		},

		ready: function () {
			
			this.ShowPost()
		}
	});

</script>
@endpush

