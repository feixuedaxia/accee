@extends('admin.layout')



@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1>User Table</h1>

		<div id="UserController" style="padding-top: 2em">
			<table class="table">
				<thead>
					<th>ID</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>Categories</th>
					<th>CONTROLLER</th>
				</thead>

				<tbody>
					<tr v-for="user in users">
						<td>@{{ user.id }}</td>
						<td>@{{ user.name }}</td>
						<td>@{{ user.email }}</td>
						<td><span v-for="term in user.terms">@{{ term.name }}; &nbsp;</span> </td>
						<td>
							<button class="btn btn-default btn-sm" @click="ShowUser(user.id)">Edit</button>
							<button class="btn btn-danger btn-sm" @click="RemoveUser(user.id)">Remove</button>
						</td>
					</tr>
				</tbody>
			</table>
			<hr>
			<div class="alert alert-danger" v-if="!isValid">
				<ul>
					<li v-show="!validation.name">Name field is required.</li>
					<li v-show="!validation.email">Input a valid email address.</li>
					<li v-show="!validation.address">Address field is required.</li>
				</ul>
			</div>
			<div class="col-md-6">
				<form action="#" @submit.prevent="AddNewUser" method="POST">
				<!-- <form action="{{url('/api/users/')}}/@{{newUser.id}}"  method="POST"> -->
							{{ csrf_field() }}
							{{ method_field('PATCH') }}
					
					<div class="form-group">
						<label for="name">Name:</label>
						<input v-model="newUser.name" type="text" id="name" name="name" class="form-control">
					</div>

					<div class="form-group">
						<label for="email">Email:</label>
						<input v-model="newUser.email" type="text" id="email" name="email" class="form-control">
					</div>

					<div class="form-group" id="selection">
                        <label for="categories" class="col-md-4 control-label">Category:</label>
                        <div class="col-md-6">
                            <select v-model="selected" name='selection[]' class="form-control" multiple="multiple">
							  <option v-for="(key, value) in options" v-bind:value='key'>
							    @{{value}}
							  </option>
							</select>
							<span>Selected: @{{ selected }}</span>
                        </div>  
                    </div>


					<div class="form-group">

						<button :disabled="!isValid" class="btn btn-default" type="submit" v-if="edit" @click="EditUser(newUser.id)">Edit User</button>
					</div>

					<div class="form-group">

						<!-- <button class="btn btn-default" type="submit" v-if="edit">Update</button> -->
					</div>

				</form>
			</div>	
			<div class="alert alert-success" transition="success" v-if="success">Add new user successful.</div>

		</div>

	</div>
</div>


@endsection

@push('scripts')
	<script src="{{URL::asset('vuejs/script.js')}}"></script>


	<style>
	.success-transition {
		transition: all .5s ease-in-out;
	}
	.success-enter, .success-leave {
		opacity: 0;
	}
	</style>
@endpush