var textarea = document.querySelector('textarea');

textarea.addEventListener('keyup', function(){
  if(this.scrollTop > 0){
    this.style.height = this.scrollHeight + "px";
  }
});
$('.tools-controller').bind("click", function() {
  let status = $('.tools-controller').attr('status');
  if (status == "open") {
    $('.tools-controller').removeClass("t-c-up");
    $('.tools-controller').attr('status', 'close');
    $('.tools').slideUp(500);
    $('.tools-controller').addClass("pos-a");
  }else{  
    $('.tools-controller').addClass("t-c-up");
    $('.tools-controller').attr('status', 'open');    
    $('.tools').slideDown(500);
    $('.tools-controller').removeClass("pos-a");    
  }
  // alert(status);
});