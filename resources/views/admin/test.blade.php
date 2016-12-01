@extends('admin.layout')



@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1>Category</h1>
	</div>
</div>


<div class="row">
	<div class="col-lg-12">

			
			<div class="col-md-4">
				<form action="{{url('/api/post')}}"  method="POST">
					<input type="hidden" name="_token" value="{!! csrf_token() !!}">
					<div class="form-group">
						<label for="post_title">Title:</label>
						<input v-model="newPost.post_title" type="text" id="post_title" name="post_title" class="form-control">
					</div>

					<div class="form-group">
						<label for="post_content">Content:</label>
						<textarea v-model="newPost.post_content" type="textarea" id="post_content" name="post_content" class="form-control"></textarea>
					</div>
					<!-- <div class="form-group">
						<label for="post_author_id">Post Author ID:</label>
						<input v-model="newPost.post_author_id" id="post_author_id" name="post_author_id" class="form-control">
					</div> -->
					<div class="form-group">
						<label for="post_name">URL Name:</label>
						<input v-model="newPost.post_name" id="post_name" name="post_name" class="form-control">
					</div>


					<div class="form-group">
						<button :disabled="!isValid" class="btn btn-default" type="submit" v-if="!edit">Add New Category</button>

						<button :disabled="!isValid" class="btn btn-default" type="submit" v-if="edit" @click="EditTerm(newTerm.id)">Edit Category</button>
					</div>

				</form>
			</div>	
		

	</div>
</div>

@endsection


