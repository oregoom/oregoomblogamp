const button = document.getElementById('hello-url');

button.addEventListener('click', () => {
    
  const div = document.createElement('div');
  
  div.innerHTML = '<p>hola<img src="https://s0.2mdn.net/6241250/RMKT-DON_T-LET-SITE-PASS-BY-_11_HG_INTL_970X90_IMAGE.png" alt="Girl in a jacket" width="500" height="600"></p>';
  
  
//  h1.textContent = 'Hello World!';
//  document.body.appendChild(h1);
  
  
  document.body.appendChild(div);
  
});



(function() {
    var v = document.getElementsByClassName("reproductor");
    for (var n = 0; n < v.length; n++) {
        var p = document.createElement("div");
        p.innerHTML = labnolThumb(v[n].dataset.id);
        p.onclick = labnolIframe;
        v[n].appendChild(p);
    }
})();
 
function labnolThumb(id) {
    return '<img class="imagen-previa" src="//i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="youtube-play"></div>';
}
 
function labnolIframe() {
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("id", "youtube-iframe");
    this.parentNode.replaceChild(iframe, this);
}