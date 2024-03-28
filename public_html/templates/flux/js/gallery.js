(function( $ ) {
    $.fn.photoswipe = function(options){
        var galleries = [],
            _options = options;
        
        var init = function($this){
            galleries = [];
            $this.each(function(i, gallery){
                galleries.push({
                    id: i,
                    items: []
                });

                $(gallery).find('a').each(function(k, link) {
                    var $link = $(link),
                        size = $link.data('size').split('x');
                    if (size.length != 2){
                        throw SyntaxError("Missing data-size attribute.");
                    }
                    $link.data('gallery-id',i+1);
                    $link.data('photo-id', k);

                    var item = {
                        src: link.href,
                        msrc: link.children[0].getAttribute('src'),
                        w: parseInt(size[0],10),
                        h: parseInt(size[1],10),
                        title: $link.data('title'),
                        el: link
                    }
                        
                    galleries[i].items.push(item);
                    
                });

                $(gallery).on('click', 'a', function(e){
                    e.preventDefault();
                    var gid = $(this).data('gallery-id'),
                        pid = $(this).data('photo-id');
                    openGallery(gid,pid);
                });
            });
        }
        
        var parseHash = function() {
            var hash = window.location.hash.substring(1),
            params = {};

            if(hash.length < 5) {
                return params;
            }

            var vars = hash.split('&');
            for (var i = 0; i < vars.length; i++) {
                if(!vars[i]) {
                    continue;
                }
                var pair = vars[i].split('=');  
                if(pair.length < 2) {
                    continue;
                }           
                params[pair[0]] = pair[1];
            }

            if(params.gid) {
                params.gid = parseInt(params.gid, 10);
            }

            if(!params.hasOwnProperty('pid')) {
                return params;
            }
            params.pid = parseInt(params.pid, 10);
            return params;
        };
        
        var openGallery = function(gid,pid){
            var pswpElement = document.querySelectorAll('.pswp')[0],
                items = galleries[gid-1].items,
                options = {
                    index: pid,
                    galleryUID: gid,
                    getThumbBoundsFn: function(index) {
                        var thumbnail = items[index].el.children[0],
                            pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                            rect = thumbnail.getBoundingClientRect(); 

                        return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
                    }
                };
            $.extend(options,_options);
            var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
            gallery.init();
        }
        
        // initialize
        init(this);
        
        // Parse URL and open gallery if it contains #&pid=3&gid=1
        var hashData = parseHash();
        if(hashData.pid > 0 && hashData.gid > 0) {
            openGallery(hashData.gid,hashData.pid);
        }
        
        return this;
    };
}( jQuery ));

$('.my-gallery').photoswipe({
        bgOpacity: 0.9,
        loop: true
});


jQuery('#view_gallery').on('click', function() { 
	jQuery('#img-1').trigger('click'); 
});

var slideIndex = 1;
// dots instead of counting image
/*
jQuery('.nav-dot').on('click', function() { 
	
	var img_index = jQuery(this).attr("id").substr(8);
	var x = document.getElementsByClassName("slides");
	for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[img_index-1].style.display = "block";  
  
  $(".nav-dot").removeClass("crt-dot");
  $("#img-dot-"+img_index).addClass("crt-dot");
	slideIndex = parseInt(img_index);
});
*/

showDivs(slideIndex);

function plusDivs(n) {
	showDivs(slideIndex += n);
}

function showDivs(n) {

  var i;
  var x = document.getElementsByClassName("slides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";
  
  $("#crt_img").html(slideIndex);

	// dots instead of counting image
  //$(".nav-dot").removeClass("crt-dot");
  //$("#img-dot-"+(slideIndex)).addClass("crt-dot");
  
}
