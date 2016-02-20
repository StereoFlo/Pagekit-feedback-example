$(document).ready(function(){
	Vue.http.options.emulateJSON = true;
	new Vue({
		el: "#sendForm",
		data: {
			name: "",
			email: "",
			message: ""
		},
		methods: {
			send: function () {
				this.$http.post('contact/send', { data: { name: this.name, email: this.email, message: this.message } }).then(
					function (data) {
						$('#sendForm').html(data.data.message);
						console.log(data);
					}
				).catch(
					function (data) {
						$('#sendForm').html(data.data.message);
						console.log(data);
					}
				);
			}
		}
	});
});
