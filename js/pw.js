//Slider 

	function scorri()
{
	var objA = document.getElementById("myImg1");
	var objB = document.getElementById("myImg2");
	var objC = document.getElementById("promo1");
	var objD = document.getElementById("promo2");

	if (objB.style.display == "none")
	{
		objB.style.display = "block";
		objA.style.display = "none"
		objC.style.display = "block";
		objD.style.display = "none"
	}
	else
	{
		objB.style.display = "none";
		objA.style.display = "block"
		objC.style.display = "none";
		objD.style.display = "block"
	}
	

	
}

// Video

(function() {
    var v = document.getElementsByClassName("youtube-player");
    for (var n = 0; n < v.length; n++) {
        var p = document.createElement("div");
        p.innerHTML = labnolThumb(v[n].dataset.id);
        p.onclick = labnolIframe;
        v[n].appendChild(p);
    }
})();
 
function labnolThumb(id) {
    return '<img class="youtube-thumb" src="//i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="play-button"></div>';
}
 
function labnolIframe() {
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("id", "youtube-iframe");
    this.parentNode.replaceChild(iframe, this);
}
