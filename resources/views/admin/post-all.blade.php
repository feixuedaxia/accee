@extends('admin.layout')



@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1>Posts</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">

		<div id="PostController" style="padding-top: 1em">		
				<table class="table">
					<thead>
						<th>Title</th>
						<th>Author</th>
						<th>Categories</th>
						<th>Data</th>
					</thead>

					<tbody>
						<tr v-for="Post in Posts">
							<td>@{{ Post.post_title }}</td>
							<td>@{{ Post.user.name }}</td>
							<td>@{{ Post.terms[0].name }}</td>
							<td>
								<a class="btn btn-default btn-sm" href="{{url('/api/edit/')}}/@{{Post.id}}">Edit</a>
								<button class="btn btn-danger btn-sm" @click="RemovePost(Post.id)">Remove</button>
							</td>
						</tr>
					</tbody>
				</table>
	
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
			id:'',
			post_title: '',
			post_content: '',
			post_author_id: '',
			post_name:'',
			term:'',
		},

		success: false,

		edit: false
	},

	methods: {

		fetchPost: function () {
			this.$http.get('/api/post', function (data) {
				this.$set('Posts', data)
			})
		},

		RemovePost: function (id) {
			var ConfirmBox = confirm("Are you sure, you want to delete this User?")

			if(ConfirmBox) this.$http.delete('/api/post/' + id)

			this.fetchPost()
		},

		EditPost: function (id) {
			var Post = this.newPost

			this.newPost = { id: '', post_title: '',post_author_id:'', post_content: ''}

			this.$http.patch('/api/post/' + id, Post, function (data) {
				console.log(data)
			})

			this.fetchPost()

			this.edit = false

		},

		ShowPost: function (id) {
			this.edit = true

			this.$http.get('/api/post/' + id, function (data) {
				this.newPost.id = data.id
				this.newPost.post_title = data.post_title
				this.newPost.post_content = data.post_content
				this.newPost.post_author_id = data.post_author_id
				this.newPost.post_name = data.post_name
			})
		},


	},

	computed: {
		validation: function () {
			return {
				post_title: !!this.newPost.post_title.trim(),
			}
		},

		isValid: function () {
			var validation = this.validation
			return Object.keys(validation).every(function (key) {
				return validation[key]
			})
		}
	},

	ready: function () {
		this.fetchPost()
	}
});
	</script>
@endpush