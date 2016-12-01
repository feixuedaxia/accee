
var emailRE = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

var vm = new Vue({
	http: {
      root: '/root',
      headers: {
        'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
      }
    },

	el: '#UserController',

	data: {
		newUser: {
			id: '',
			name: '',
			email: '',
			selected: '',
		},

		selected:'',

		success: false,

		edit: false,

		
	    options: '',
	},

	methods: {

		fetchUser: function () {
			this.$http.get('/api/users', function (data) {
				this.$set('users', data)
			})
		},

		RemoveUser: function (id) {
			var ConfirmBox = confirm("Are you sure, you want to delete this User?")

			if(ConfirmBox) this.$http.delete('/api/users/' + id)

			this.fetchUser()
		},

		EditUser: function (id) {
			var user ={
				name:'',
				email:'',
				selected:''
			};
			user.name = this.newUser.name;
			user.email = this.newUser.email;
			user.selected = this.selected;

			// console.log(user);

			this.newUser = { id: '', name: '', email: ''}
			this.selected = '';

			this.$http.patch('/api/users/' + id, user, function (data) {
				console.log(data)
			})

			this.fetchUser()

			this.edit = false

		},

		ShowUser: function (id) {
			this.edit = true

			this.$http.get('/user/edit/' + id, function (data) {
				this.newUser.id = data.user.id
				this.newUser.name = data.user.name
				this.newUser.email = data.user.email
				this.options = data.categories
				this.selected = data.select
			})
		},

	},

	computed: {
		validation: function () {
			return {
				name: !!this.newUser.name.trim(),
				email: emailRE.test(this.newUser.email),
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
		this.fetchUser();
	}
});