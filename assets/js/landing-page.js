var myBtn = document.getElementById('start');
var form = document.getElementById('formPopup');
var cancelBtn = document.getElementById('cancelPopup');
myBtn.onclick = function(){
    form.style.display = "block";
};

cancelBtn.onclick = function() {
    form.style.display = "none";
};

var toTopButton = document.getElementById("up");

window.onscroll = function() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        toTopButton.style.display = "block";
    } else {
        toTopButton.style.display = "none";
    }
};

function openFullScreen(videoCard) {
    var fullScreenVideo = videoCard.getElementsByClassName("full-screen-video");
    var closeButton = document.getElementById("close-full-screen");
    fullScreenVideo[0].style.display = "flex";
    closeButton.style.display = "block";
}

function closeFullScreen(closeButton) {
    var fullScreenVideos = document.getElementsByClassName("full-screen-video");
    var video;
    for (let i = 0; i < fullScreenVideos.length; i++) {
        video = fullScreenVideos[i].getElementsByClassName("embedded-video");
        video[0].src = video[0].src;
        fullScreenVideos[i].style.display = "none";
    }
    closeButton.style.display = "none";
}