// JavaScript Document
// lodjixmedia.net feature box and work content control
//** Author lodjixmedia Interactive Agency - Nicholas Williams
//** Created Nov 2nd, 09'
//** Updated Nov 7th, 09'



// Define the sifr fonts for the inline dynamic content

$.ajaxSetup ({
    // Disable caching of AJAX responses */
    cache: false
});


var disabled = true;

function sifrComplete() {
if( disabled ){
var franklinh3posttitle = { src: "../wp-content/plugins/wp-sifr/fonts/franklin_h3posttitle.swf" };
var franklinh2 = { src: "../wp-content/plugins/wp-sifr/fonts/franklin_h2.swf" };
var franklinh6 = { src: "../wp-content/plugins/wp-sifr/fonts/franklin_h6.swf" };
var franklinh4 = { src: "../wp-content/plugins/wp-sifr/fonts/franklin_h4.swf" };
var franklin = { src: "../wp-content/plugins/wp-sifr/fonts/franklin.swf" };
var franklinh1 = { src: "../wp-content/plugins/wp-sifr/fonts/franklin_h1.swf" };
var franklinh5 = { src: "../wp-content/plugins/wp-sifr/fonts/franklin_h5.swf" };
sIFR.useStyleCheck = true;
sIFR.activate(franklinh3posttitle, franklinh5, franklinh2, franklin, franklinh4, franklinh1, franklinh6);
sIFR.replace(franklinh3posttitle, {
	selector: "h3.post-title",
	css: [
		'.sIFR-root { letter-spacing: -1; font-size:30px; font-weight:lighter; color:#4c4c4c; }',
		'a { text-decoration:none; color:#4c4c4c; }',
		'a:hover { color:#4c4c4c; }'
	],
	wmode: 'transparent',
fitExactly: true,
selectable: false,
tuneWidth: 2
});
sIFR.replace(franklinh5, {
	selector: "h5",
	css: [
		'.sIFR-root { font-size:35px; font-weight:normal; color:#FFFFFF; }',
		'a { text-decoration:none; color:#FFFFFF; }',
		'a:hover { color:#FFFFFF; }'
	],
	wmode: 'transparent',
selectable: false,
fitExactly: true,
tuneWidth: 2
});
sIFR.replace(franklinh2, {
	selector: "h2",
	css: [
		'.sIFR-root { font-size:30px; font-weight:lighter; color:#969696; }',
		'a { text-decoration:none; color:#323232; }',
		'a:hover { color:#323232; }'
	],
	wmode: 'transparent',
fitExactly: true,
selectable: false,
tuneWidth: 2
});
sIFR.replace(franklin, {
	selector: "h3",
	css: [
		'.sIFR-root { letter-spacing: 0; font-size:20px; font-weight:normal; color:#4c4c4c; }',
		'a { text-decoration:none; color:#4c4c4c; }',
		'a:hover { color:#4c4c4c; }'
	],
	wmode: 'transparent',
fitExactly: false,
selectable: false,
tuneWidth: 2
});
sIFR.replace(franklinh4, {
	selector: "h4",
	css: [
		'.sIFR-root { font-size:13px; font-weight:normal; color:#666666; }',
		'a { text-decoration:none; color:#FFFFFF; }',
		'a:hover { color:#FFFFFF; }'
	],
	wmode: 'transparent',
selectable: false,
fitExactly: true,
tuneWidth: 2
});
sIFR.replace(franklinh1, {
	selector: "h1",
	css: [
		'.sIFR-root { letter-spacing: -1.5;font-size:40px; font-weight:lighter; color:#323232; }',
		'a { text-decoration:none; color:#323232; }',
		'a:hover { color:#323232; }'
	],
	wmode: 'transparent',
selectable: false,
fitExactly: true,
tuneWidth: 1
});
sIFR.replace(franklinh6, {
	selector: "h6",
	css: [
		'.sIFR-root { font-size:16px; font-weight:normal; color:#4c4c4c; }',
		'a { text-decoration:none; color:#4c4c4c; }',
		'a:hover { color:#4c4c4c; }'
	],
	wmode: 'transparent',
selectable: false,
fitExactly: true,
tuneWidth: 2
});
};

  }
  
// Define the ajax pagination  

function paginateMe() {
	
   
    $("#next a").click(function() {
	
	// adjust loader for FF offset 
	//if ($.browser.mozilla) {
	//$('#load').css("top", "722px");	
	//}						

    var toLoad = $(this).attr("href")+" #stage";
	if ($.browser.msie && $.browser.version.substr(0,1)<7) {
	 $('#fixedRow').css("background-image", "url(http://lodjixmedia.net/images/work-bg.gif)");
	} else {
	 $('#fixedRow').css("background-image", "url(http://lodjixmedia.net/images/work-bg.png)");	
	}
     $("#stage").fadeOut('fast',loadContent);
	 // $('#load').remove();  
	 // $('#fixedRow').append('<div id="load">&nbsp;</div>');  
	 $('#load').fadeIn('fast'); 

    function loadContent() {  
     $(this).load(toLoad,showNewContent);
     
    }
     
    function showNewContent() {  
     $(this).fadeIn('fast',hideLoader);
	  sifrComplete();   
      paginateMe();
      hoverMe();
	  PaginateHover();
    }

    function hideLoader() {
    	$('#load').fadeOut('fast');
    }
     
    return false;

});


    $("#prev a").click(function() {
	
	// adjust loader for FF offset
	//if ($.browser.mozilla) {
	//$('#load').css("top", "722px");	
	//}

    var toLoad = $(this).attr("href")+" #stage";
	if ($.browser.msie && $.browser.version.substr(0,1)<7) {
	 $('#fixedRow').css("background-image", "url(http://lodjixmedia.net/images/work-bg.gif)");
	} else {
	 $('#fixedRow').css("background-image", "url(http://lodjixmedia.net/images/work-bg.png)");	
	}
	 $("#stage").fadeOut('fast',loadContent);
	 // $('#load').remove();  
	 // $('#fixedRow').append('<div id="load">&nbsp;</div>');  
	 $('#load').fadeIn('fast'); 

    function loadContent() {  
     $(this).load(toLoad, showNewContent);
    }
     
    function showNewContent() {  
     $(this).fadeIn('fast',hideLoader);
	   sifrComplete();   
       paginateMe();
       hoverMe();
	   PaginateHover();
    }

    function hideLoader() {
    	$('#load').fadeOut('fast');
    }
     
    return false;

});

}

// Enable jquery fade effects for content loaded inline

function hoverMe() {

    $("div.hvrbox").hover(function() {
    $(this).stop();
    $(this).animate({ backgroundColor: "#47c6e0" }, 250);
    }, function() {
    $(this).stop();
    $(this).animate({ backgroundColor: "#FBFBFB" }, 500);
}); 

}

// Feature block control and effects

function featureFX() { 
	$('#main_slides')
	.cycle({ 
		fx:     'fade', 
		speed:  'normal', 
		timeout: 3000, 
		pager:  '#featureSquares',
		pause:   1,
		after:update_slide_caption,
		before:fade_slide_caption
	});
}

fade_slide_caption = function(next, previous)
	{
		caption_container = $('.title-text')
		caption_container.fadeOut('fast')
	}
		
update_slide_caption = function(next, previous)
	{
		caption_container = $('.title-text')
		caption = $('span.slide_caption', previous)
		caption_container.fadeIn('fast')
		caption_container.html(caption.html())		
	}