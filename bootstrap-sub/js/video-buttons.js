(function($) {
assets = $('.gabtn');
assets.each(function(index,el){
  var e = $(el);
    var href = e.attr('href');
    if(!href)
      return;
    e.data('href',href);
    e.attr('href','javascript:void(0)');
});

$('.gabtn').click(function(event) {
    event.preventDefault();
    var leadAction = $(this).data('type');
    var label = $(this).data('label');
    var gated = $(this).data('gate');
      // either its not gated or we know the visitor so show the asset
      if($(this).data('vidyard') != undefined)
      {
        $(this).loadVidyard();
      }
});

$.fn.loadVidyard = function(uuid) {
     var uuid = (typeof uuid === 'undefined') ? $(this).data('vidyard') : uuid; 
     var fnVid = 'fn_vidyard_' + uuid;
     var fnvid = fnVid.replace(/-/g, "$");
     $.getScript('https://play.vidyard.com/' +uuid + '.js?v=3.1&type=lightbox', function() {
        //fn_vidyard_ov23R$OeVwpO$NATYgrRtQ();
        //console.log(fnvid);
        function_to_call = fnvid;
      window[function_to_call]();
    });
};
    
})(jQuery);


    



