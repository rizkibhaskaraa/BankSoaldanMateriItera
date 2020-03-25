console.log('ok');
//ambil elemen

var kode_matkul = document.getElementById('kode_matkul')
var konten = document.getElementById('lp-1');
var alamathapus = document.getElementById('alamathapus');
var tombolhapus = document.getElementById('hapus');

tombolhapus.addEventListener('click',function(){
	var ajaxhapus = new XMLHttpRequest();
	ajaxhapus.onreadystatechange = function(){
		if(ajaxhapus.readyState == 4 && ajaxhapus.status == 200){
			konten.innerHTML = ajaxhapus.responseText;
		}
	}
	ajaxhapus.open('GET', alamathapus.value+kode_matkul.value , true);
	ajaxhapus.send();	


});
