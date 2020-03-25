console.log('ok');
//ambil elemen
var cari = document.getElementById('cari');
var kode_matkul = document.getElementById('kode_matkul')
var konten = document.getElementById('lp-1-prodi-matkul');
var alamat = document.getElementById('alamat');
var alamathapus = document.getElementById('alamathapus');
var kontenhapus = document.getElementById('lp-1');
var tombolhapus = document.getElementById('hapus');

cari.addEventListener('keyup', function(){
	//buat objeck
	
	var ajaxCari = new XMLHttpRequest();

	ajaxCari.onreadystatechange = function(){
		if(ajaxCari.readyState == 4 && ajaxCari.status == 200){
			konten.innerHTML = ajaxCari.responseText;
		}
	}
	ajaxCari.open('GET', alamat.value+kode_matkul.value+"/"+cari.value , true);
	ajaxCari.send();

});

tombolhapus.addEventListener('click',function(){
	var ajaxhapus = new XMLHttpRequest();
	ajaxhapus.onreadystatechange = function(){
		if(ajaxhapus.readyState == 4 && ajaxhapus.status == 200){
			kontenhapus.innerHTML = ajaxhapus.responseText;
		}
	}
	ajaxhapus.open('GET', alamathapus.value+kode_matkul.value , true);
	ajaxhapus.send();	


});
