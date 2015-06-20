$(function () {
	
	$('.edit-image').click(function() {
		$('.trip-edit').addClass('show');

		var id = $(this).parents('.trip-container').data('id');
		
		$('.trip-edit .id').val(id);

	});

	$('.trip-edit .close').click(function (){
		$('.trip-edit').removeClass('show');
	});


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