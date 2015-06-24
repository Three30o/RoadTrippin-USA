$(function () {
	
	//Functionality for the Edit Icon on the View_Trip.blade
	$('.edit-image').click(function() {
		$('.trip-edit').addClass('show');

		var info_div = $(this).parents('.trip-container');
		var id = info_div.data('id');
		var lattitude = info_div.data('lattitude');
		var longitude = info_div.data('longitude');
		var date = info_div.data('date');
		var description = info_div.data('description');
		
		$('.trip-edit .id').val(id);
		$('.trip-edit .lattitude').val(lattitude);
		$('.trip-edit .longitude').val(longitude);
		$('.trip-edit .date').val(date);
		$('.trip-edit .description').val(description);

	});

	//Functionality for the Close Icon on the View_Trip.blade
	$('.trip-edit .close').click(function(){
		$('.trip-edit').removeClass('show');
	});

	//Functionality for the Delete Icon on the View_Trip.blade
	$('.delete-image').click(function() {

		var id = $(this).parents('.trip-container').data('id');
		var delete_icon = this;

		$.post('/trip/' + id + '/delete', {'_token': _token}, function(data) {
			if (data.success) {
				$(delete_icon).parents('.trip-container').remove();
			}
		});

	});

});