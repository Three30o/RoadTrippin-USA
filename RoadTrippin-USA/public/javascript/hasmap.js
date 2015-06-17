var map;

$(document).ready(function() {

	map = new GMaps({
	      div: '#map',
	      lat: 33.6054149,
	      lng: -112.125051
	    });
	
// 	map.addMarker({
// 	  lat: 33.6054149,
// 	  lng: -112.125051,
// 	  title: 'Phoenix',
// 	  click: function(e) {
// 	    alert('You clicked in this marker');
// 	}
// });

});