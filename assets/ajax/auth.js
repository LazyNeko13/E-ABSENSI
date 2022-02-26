$(function(){
	$('#nis_nip').on('keyup',function(){
		var nis_nip = $(this).val();
		var password = $('#password').val();
		if (nis_nip != '' && password != '') {
			$('button').prop('disabled',false);
		}else{
			$('button').prop('disabled',true);
		}
	});

	$('#password').on('keyup',function(){
		var password = $(this).val();
		var nis_nip = $('#nis_nip').val();
		if (nis_nip != '' && password != '') {
			$('button').prop('disabled',false);
		}else{
			$('button').prop('disabled',true);
		}
	});
});