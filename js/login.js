let winH = $(document).height();
let winW = $(document).width();
let signIH = $('.signin').height();
let signUH = $('.signup').height();
let signUW = $('.signup').width();
$('.signup').css({'top' : winH/2-signUH/2 - 50});
$('.signup').css({'left' : winW/2-signUW/2-15});
$('.signin').css({'marginTop' : winH/2-signIH/2 - 50});

$('.log-input .log-next').bind("click", function() {
	$('.log-input .log-next img').attr('src','img/load_note.gif');	
	setTimeout(function(){
		$('.pass-input').addClass("pass-input-anim");
		$('.log-input input').css({'borderRadius' : '6px 6px 0 0'});
		$('.pass-input input').css({'borderRadius' : '0 0 6px 6px'});
		$('.log-input .log-next').remove();
	}, 500);	
});

function open_sup() {	
	$('.bluer_bg, .signup').removeClass("dn");
	$('.signup').removeClass("animate__backOutUp");			
	$('.signup').addClass("animate__backInDown");	
	$('.signin').css({'filter' : 'blur(4px)'});		
}
function close_sup() {
	$('.signup').removeClass("animate__backInDown");
	$('.signup').addClass("animate__backOutUp");
	$('.bluer_bg').addClass("dn");
	$('.signin').css({'filter' : 'blur(0px)'});	
}