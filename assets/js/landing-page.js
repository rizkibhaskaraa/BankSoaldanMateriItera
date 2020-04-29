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