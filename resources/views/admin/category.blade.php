@extends('admin.layout')



@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1>Category</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">

		<div id="UserController" style="padding-top: 2em">
		
			<div class="alert alert-danger" v-if="!isValid">
				<ul>
					<li v-show="!validation.name">Name field is required.</li>
					<li v-show="!validation.email">Input a valid email address.</li>
					<li v-show="!validation.address">Address field is required.</li>
				</ul>
			</div>
			<div class="col-md-4">
				<form action="#" @submit.prevent="AddNewItem" method="POST">
					
					<div class="form-group">
						<label for="name">Name:</label>
						<input v-model="newTerm.name" type="text" id="name" name="name" class="form-control">
					</div>

					<div class="form-group">
						<label for="alias">Alias:</label>
						<input v-model="newTerm.alias" type="text" id="alias" name="alias" class="form-control">
					</div>
					<div class="form-group">
						<label for="description">Description:</label>
						<input v-model="newTerm.description" type="text" id="description" name="description" class="form-control">
					</div>



					<div class="form-group">
						<button :disabled="!isValid" class="btn btn-default" type="submit" v-if="!edit">Add New Category</button>

						<button :disabled="!isValid" class="btn btn-default" type="submit" v-if="edit" @click="EditItem(newTerm.id)">Edit Category</button>
					</div>

				</form>
			</div>	
			<div class="alert alert-success" transition="success" v-if="success">Add new user successful.</div>

				<hr>
			<div class="col-md-8">
				<table class="table">
					<thead>
						<th>NAME</th>
						<th>Alias</th>
						<th>Description</th>
					</thead>

					<tbody>
						<tr v-for="term in terms">
							<td>@{{ term.name }}</td>
							<td>@{{ term.alias }}</td>
							<td>@{{ term.description }}</td>
							<td>
								<button class="btn btn-default btn-sm" @click="ShowItem(term.id)">Edit</button>
								<button class="btn btn-danger btn-sm" @click="RemoveItem(term.id)">Remove</button>
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
		

var vm = new Vue({
	http: {
      root: '/root',
      headers: {
        'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
      }
    },

	el: '#UserController',

	data: {
		newTerm: {
			id:'',
			name: '',
			alias: '',
			description: '',
		},

		success: false,

		edit: false
	},

	methods: {

		fetchItem: function () {
			this.$http.get('/api/category', function (data) {
				this.$set('terms', data)
			})
		},

		RemoveItem: function (id) {
			var ConfirmBox = confirm("Are you sure, you want to delete this User?")

			if(ConfirmBox) this.$http.delete('/api/category/' + id)

			this.fetchItem()
		},

		EditItem: function (id) {
			
			var term = this.newTerm

			this.newTerm = { id: '', name: '', alias: '',description: ''}

			this.$http.patch('/api/category/' + id, term, function (data) {
				console.log(data)
			})

			this.fetchItem()

			this.edit = false

		},

		ShowItem: function (id) {
			this.edit = true

			this.$http.get('/api/category/' + id, function (data) {
				this.newTerm.id = data.id
				this.newTerm.name = data.name
				this.newTerm.alias = data.alias
				this.newTerm.description = data.description
			})
		},

		AddNewItem: function () {
			// User input
			var term = this.newTerm

			// Clear form input
			this.newTerm = { name: '', alias: '',description: '' }

			// Send post request
			this.$http.post('/api/category', term)
			// Show success message
			self = this
			this.success = true
			setTimeout(function () {
				self.success = false
			}, 5000)

			// Reload page
			this.fetchItem()

		}

	},

	computed: {
		validation: function () {
			return {
				name: !!this.newTerm.name.trim(),
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
		this.fetchItem()
	}
});
	</script>
@endpush