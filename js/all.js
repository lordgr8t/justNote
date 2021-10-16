//vars
let winW = $(document).width();
let winH = $(document).height();

// langs
function en() {
	$('.en').addClass("active");
	$('.ru').removeClass("active");
};
function ru() {
	$('.ru').addClass("active");
	$('.en').removeClass("active");	
};

// header
$('.burger-menu').hide();
function open_b(){
	$('.burger-menu').slideDown(500);
};
function close_b(){
	$('.burger-menu').slideUp(500);
};


$('header .header-search input').bind("focusout", function () {
	$('header .header-search input').css({'width' : '200px'});	
});

$('header .header-search input').bind("focus", function () {
	if (winW > 840) {		
		$('header .header-search input').css({'width' : '500px'});
	}
	if (winW < 840 & winW > 730) {		
		$('header .header-search input').css({'width' : '400px'});
	}
	if (winW < 730 & winW > 610) {		
		$('header .header-search input').css({'width' : '300px'});
	}
	if (winW < 610 & winW > 520) {		
		$('header .header-search input').css({'width' : '230px'});		
	}
});

