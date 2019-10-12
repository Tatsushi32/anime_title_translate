$(document).ready(function() {
	$('#anime-title').autocomplete({
		source: function(request, cb) {
			$.ajax({
				url: '/'+request.term,
				method: 'GET',
				dataType: 'json',
				success: function(res) {
						var result;
						result = [
							{
								value: request.term
							}
						];
					if (request.term.length == encodeURIComponent(request.term).replace(/%../g,'*').length) {
						result = $.map(res, function(obj) {
							return {
								label: obj.FormalTitle_eg,
								value: obj.FormalTitle_eg,
								data: obj
							};
						});
						cb(result);
					} else {
						result = $.map(res, function(obj) {
							return {
								label: obj.FormalTitle_jp,
								value: obj.FormalTitle_jp,
								data: obj
							};
						});
						cb(result);
					}
				}
			});
		},
		autoFocus: true,
		minlength: 2,
	});
})

$('#anime-title').focus(function() {
	if($(this).hasClass('ui-autocomplete-input')) {
		$(this).removeClass().val('');
	}
})

$('#request').hide();
$(function() {
	if($('#title').length == 0){
		$('#noresult').text('No matches found');
		$('#request').show();
		$("#btn_action2").click(function() {
			$("#info").dialog("open");
			return false;
		});

		$("#info").dialog({
			autoOpen: false,
			modal: true,
		});
	}

});

