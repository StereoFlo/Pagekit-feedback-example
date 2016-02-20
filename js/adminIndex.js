$(document).ready(function(){

	Vue.filter('timestamp', function(value) {
	  var parts = value.split(' ');
	  var date = parts[0];
	  var time = parts[1];

	  date = date.split('-');
	  time = time.split(':');

	  if(parseInt(time[0], 10) > 12) {
	    var hour = parseInt(time[0], 10) % 12;
	  }
	  else {
	   var hour = parseInt(time[0], 10);
	  }

	  hour = hour < 10 ? '0' + hour : hour;

	  return '[' + date[0] + '/' + date[2] + ' ' + hour + ':' + time[1] + ']';
	});

	new Vue({
		el: "#emails",
		data: {
            emails: window.$data.emails
		},
	});
});
