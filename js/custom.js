$(document).ready(function(){
  $('a[href*=#]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target
      || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body')
        .animate({scrollTop: targetOffset}, 1000);
       return false;
      }
    }
  });
});

$(document).ready(function(){
	$('#special_features').load('js/special_features.php');
});

jQuery(document).bind("contextmenu cut copy paste",function(e){
    e.preventDefault();
    alert('Right Click, Cut, Copy and Paste Not Allowed..!');
});

