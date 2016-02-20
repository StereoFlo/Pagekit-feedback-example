$(document).ready(function(){
	Vue.http.options.emulateJSON = true;
	new Vue({
		el: "#settings",
		data: {
			config: window.$data.config,
			from: (window.$data.config.from) ? window.$data.config.from : '',
			email: (window.$data.config.email) ? window.$data.config.email : ''
		},
		methods: {
			save: function () {
				this.$http.post('admin/system/settings/config', { name: 'contact', config: { from: this.from, email: this.email } }).then(
					function (data) {
						this.$notify(data.data.message);
					}).catch(function (data) {
					this.$notify(data.data.message, 'warning');
					console.log(data);
				});
			}
		}
	});
});
