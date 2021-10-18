//hide menu
$('.create-note, .create-folder, .bluer_bg, .delete_case').hide();

//open/close menu
function c_note() {
	$('.bluer_bg').show(100);
	$('.create-note').slideDown(300);	
	$('header, .folders .container').css({'filter' : 'blur(4px)'});	

};

$('.m-c-folder').bind("click", function() {
	$('.bluer_bg').show(100);
	$('.create-folder').slideDown(300);
	$('header, .folders .container').css({'filter' : 'blur(4px)'});	
});

$('.create-note .cancel').bind("click", function() {
	$('.create-note').slideUp(300);
	$('.bluer_bg').hide(100);
	$('header, .folders .container').css({'filter' : 'blur(0px)'});
});
$('.create-folder .cancel').bind("click", function() {
	$('.create-folder').slideUp(300);
	$('.bluer_bg').hide(100);
	$('header, .folders .container').css({'filter' : 'blur(0px)'});
});




$('.m-c-edit').bind("click", function() {	
	$('.delete_case').show(300);
	$('.m-c-note').remove();
	$('.appender').append('<div onclick="canc_del()" class="link canc_ed">Cancel</div>');
	$('header, .m-c-folder, .m-c-edit').css({'filter' : 'blur(4px)'}).addClass("noclick");	
});

function canc_del(){
	$('.delete_case').hide(300);
	$('.canc_ed').remove();
	$('.appender').append('<div onclick="c_note()" class="link m-c-note">Create note</div>');
	$('header, .m-c-folder, .m-c-edit').css({'filter' : 'blur(0px)'}).removeClass("noclick");	
};