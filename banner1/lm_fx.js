// JavaScript Document
// lodjixmedia.net global effects 
//** Created Nov 2nd, 09'
//** Author lodjixmedia Interactive Agency - Nicholas Williams



// Define the sifr fonts for the inline dynamic content


function ProcessBox() {
    $("div.fdebox").hover(function() {
    $(this).stop();
    $(this).animate({ backgroundColor: "#0094b8" }, 250);
    }, function() {
    $(this).stop();
    $(this).animate({ backgroundColor: "#31C4D8" }, 500);
});
}

function ServiceBox() {
    $("#lodjixbox").hover(function() {
    $(this).stop();
    $(this) .animate({ backgroundColor: "#d7d7d7" }, 250);   
    }, function() {
    $(this).stop();
    $(this).animate({ backgroundColor: "#eeeeee" }, 500);
});
}

function imageFade() {
    $("img.fadelm").hover(function() {
    $(this).stop();
    $(this).animate({ opacity: 1 }, 250);   
    }, function() {
    $(this).stop();
    $(this).animate({ opacity: 0 }, 500);
});
}

function lmLinks() {

    $("a.fade, .think-list a").hover(function() {
    $(this).stop();
    $(this).animate({ color: "#000000" }, 250);
    }, function() {
    $(this).stop();
    $(this).animate({ color: "#e7810f" }, 500);
});
	
	$("#projectrow.blog a").hover(function() {
    $(this).stop();
    $(this).animate({ color: "#000000" }, 250);
    }, function() {
    $(this).stop();
    $(this).animate({ color: "#47C6E0" }, 500);
});
}

function lmButtons() {

    $("#bttn_all, #bttn_all2").hover(function() {
   $(this).stop();
    $(this).animate({ opacity: 1 }, 250);   
    }, function() {
    $(this).stop();
    $(this).animate({ opacity: 0 }, 500);
 });

}

/*
function NextImg() {
    this.src = 'http://lodjixmedia.net/images/next.png';
}

function NextImgOn() {
    this.src = 'http://lodjixmedia.net/images/next-on.png';
}

function PrevImg() {
    this.src = 'http://lodjixmedia.net/images/prev.png';
}

function PrevImgOn() {
    this.src = 'http://lodjixmedia.net/images/prev-on.png';
}
*/

function PaginateHover() {

    $(".imgFade").hover(function() {
    $(this).stop();
    $(this).animate({ opacity: 1 }, 250);   
    }, function() {
    $(this).stop();
    $(this).animate({ opacity: 0.5 }, 500);
 });

}

/*
function HoverPrev() {

    $("#prev a img").hover(function() {
     this.src = 'http://lodjixmedia.net/images/prev-on.png';
    }, function() {
     this.src = 'http://lodjixmedia.net/images/prev.png';
 });

}
*/