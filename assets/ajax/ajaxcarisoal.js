console.log('ok');
//ambil elemen
var tipe = document.getElementById('selecttipe')
var tahun = document.getElementById('selecttahun')
var cari = document.getElementById('cari');
var kode_matkul = document.getElementById('kode_matkul')
var konten = document.getElementById('lp-1-prodi-matkul');
var alamat = document.getElementById('alamat');
var alamat1 = document.getElementById('alamat1');
var alamat2 = document.getElementById('alamat2');
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
	ajaxCari.open('GET', alamat.value+kode_matkul.value+"/"+tipe.value+"/"+tahun.value+"/"+cari.value , true);
	ajaxCari.send();

});

tahun.addEventListener('change', function(){
	//buat objeck
	
	var ajaxtahun = new XMLHttpRequest();

	ajaxtahun.onreadystatechange = function(){
		if(ajaxtahun.readyState == 4 && ajaxtahun.status == 200){
			konten.innerHTML = ajaxtahun.responseText;
		}
	}
	ajaxtahun.open('GET', alamat2.value+kode_matkul.value+"/"+tahun.value+"/"+tipe.value+"/"+cari.value , true);
	ajaxtahun.send();
});

tipe.addEventListener('change', function(){
	//buat objeck
	
	var ajaxtipe = new XMLHttpRequest();

	ajaxtipe.onreadystatechange = function(){
		if(ajaxtipe.readyState == 4 && ajaxtipe.status == 200){
			konten.innerHTML = ajaxtipe.responseText;
		}
	}
	ajaxtipe.open('GET', alamat1.value+kode_matkul.value+"/"+tipe.value+'/'+tahun.value+"/"+cari.value , true);
	ajaxtipe.send();
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