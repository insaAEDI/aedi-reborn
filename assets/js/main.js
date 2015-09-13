$(document).ready(function() {
    var konami_keys = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
    var konami_index = 0;
    $(document).keydown(function(e){
        if(e.keyCode === konami_keys[konami_index++]){
            if(konami_index === konami_keys.length){
                $(document).unbind('keydown', arguments.callee);
                $('footer').append('<p>maintenant que le site est clean, on peut r\'commencer à déconner</p><iframe width="420" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1" frameborder="0" allowfullscreen hidden></iframe>');
                $('img').attr('src', '/assets/img/oystercage.jpg');
		//$('body').css('background', 'url("/assets/img/oystercage.jpg")').css('background-repeat', 'true');
/*$.getScript('http://www.cornify.com/js/cornify.js',function(){
	cornify_add();
	$(document).keydown(cornify_add);
});*/
             }
        }else{
            konami_index = 0;
        }
    });
});
