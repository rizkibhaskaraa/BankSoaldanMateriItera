console.log('ok');
//ambil elemen
var cari = document.getElementById('cari');
var kode_prodi = document.getElementById('kode_prodi')
var konten = document.getElementById('lp-1-prodi-matkul');
var alamat = document.getElementById('alamat');

cari.addEventListener('keyup', function(){
	//buat objeck
	
	var ajaxCari = new XMLHttpRequest();

	ajaxCari.onreadystatechange = function(){
		if(ajaxCari.readyState == 4 && ajaxCari.status == 200){
			konten.innerHTML = ajaxCari.responseText;
		}
	}
	ajaxCari.open('GET', alamat.value+kode_prodi.value+"/"+cari.value , true);
	ajaxCari.send();

});