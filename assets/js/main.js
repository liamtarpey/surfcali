$(function() {

  // Map scroll/position
  $('.map').overscroll().scrollTop(700).scrollLeft(70);

  // Load custom plugin
  $('[data-surfcali]').on('click', function () {
    $(this).surfcali($(this).data('surfcali'));
  });

  // Disable new tab/new window on links
  var links = document.getElementsByTagName("a");

	for(var i=0; i<links.length; i++){
	    links[i].setAttribute("data-href", links[i].getAttribute("href"));
	    links[i].removeAttribute("href");
	    links[i].onclick = function(){
	        window.location = this.getAttribute("data-href");
	    };
	}

});

