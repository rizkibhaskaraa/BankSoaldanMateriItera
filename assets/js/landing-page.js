var myBtn = document.getElementById('start');
var form = document.getElementById('formPopup');
var cancelBtn = document.getElementById('cancelPopup');
myBtn.onclick = function(){
    form.style.display = "block";
};

cancelBtn.onclick = function() {
    form.style.display = "none";
};