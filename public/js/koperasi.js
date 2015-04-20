$(document).ready(function(){
	$(function() {
	  $('.daftarkoperasi').hover(function() {
	       $(this).find('.profilkoperasi').show('slow');
	   	}, function(){
	       $(this).find('.profilkoperasi').hide('slow');
	      });
	});

	$(function() {
	  $('.daftarpertanyaan').click(function() {
	  		if($(this).siblings('.formjawaban').css('display') == 'none'){
	 			$(this).siblings('.formjawaban').show('slow');
	 			$(this).parentsUntil('row').siblings('.row').find('.formjawaban').hide('slow');
	 		} else {
	 			$(this).siblings('.formjawaban').hide('slow');
	 		}
	 	});      
	});

	$(function() {
	  $('.cek-audit').click(function() {
	  		if($(this).siblings('.formjawaban').css('display') == 'none'){
	 			$(this).siblings('.formjawaban').show('slow');
	 			$(this).parentsUntil('row').siblings('.row').find('.formjawaban').hide('slow');
	 		} else {
	 			$(this).siblings('.formjawaban').hide('slow');
	 		}
	 	});      
	});
	$(function() {
	  $('.buat-koperasi').click(function() {
	  		if($(this).parent('.row').next('.row').children('.formjawaban').css('display') == 'none'){
	 			$(this).parent('.row').next('.row').children('.formjawaban').show('slow');
	 		} else {
	 			$(this).parent('.row').next('.row').children('.formjawaban').hide('slow');
	 		}
	 	});      
	});
});