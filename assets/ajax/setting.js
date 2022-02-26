$(function(){
	$('.swith-on-off').on('change',function(){
		var id = $(this).data('id');
		  if (document.getElementById('onoff-'+id).checked) {
            $.ajax({
		        url : BASE_URL+'setting/on_off',
		        data : {id : id,change : 'Y'},
		        cache : false,
		        method: 'post',
		        success: function(msg){
		        	// if (data == false) {
		        	// 	alert('Mohonmaaf terjadi kesalahan sistem, coba lagi nanti');
		        	// }  
		        	$('#display_side').html(msg);  
		        	window.location.reload()     
		        }                
		    });
        } else {
            $.ajax({
		        url : BASE_URL+'setting/on_off',
		        data : {id : id,change : 'N'},
		        cache : false,
		        method: 'post',
		        success: function(msg){
		        	// if (data == false) {
		        	// 	alert('Mohonmaaf terjadi kesalahan sistem, coba lagi nanti');
		        	// }  
		        	$('#display_side').html(msg);       
		        	window.location.reload()
		        }                
		    });
        }
	});
});