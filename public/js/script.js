$(function() {

	$('.tombolTambahData').on('click', function() {
		
		$('#judulModal').html('Tambah Koleksi');
		$('.modal-footer button[type=submit]').html('Tambah Koleksi');

		$('#judul').val('');
		$('#penulis').val('');
		$('#penerbit').val('');
		$('#jenis').val('');
		$('#cetakan').val('');
		$('#bahasa').val('');
		$('#halaman').val('');
		$('#isbn').val('');
		$('#rating').val('');
		$('#goodreads_link').val('');
		$('#review_link').val('');
		$('#penerjemah').val('');
		$('#link_gambar').val('');
		$('#kategori').val('');
		$('#judul_asli').val('');
		$('#status').val('');

	});	

	$('.tampilModalUbah').on('click', function() {
		
		$('#judulModal').html('Sunting Data Koleksi');
		$('.modal-footer button[type=submit]').html('Sunting Data');
		$('.modal-body form').attr('action', 'http://localhost/perpustakaan/public/koleksi/ubah');

		const id = $(this).data('id');
		
		$.ajax({
			url: 'http://localhost/perpustakaan/public/koleksi/getubah',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data) {
				$('#judul').val(data.judul);
				$('#penulis').val(data.penulis);
				$('#penerbit').val(data.penerbit);
				$('#jenis').val(data.jenis);
				$('#cetakan').val(data.cetakan);
				$('#bahasa').val(data.bahasa);
				$('#halaman').val(data.halaman);
				$('#isbn').val(data.isbn);
				$('#rating').val(data.rating);
				$('#goodreads_link').val(data.goodreads_link);
				$('#review_link').val(data.review_link);
				$('#penerjemah').val(data.penerjemah);
				$('#link_gambar').val(data.link_gambar);
				$('#kategori').val(data.kategori);
				$('#judul_asli').val(data.judul_asli);
				$('#status').val(data.status);
				$('#id').val(data.id);
			}
		});

	});

	$('.tombolTambahMember').on('click', function() {

		$('#judulModal').html('Tambah Member');
		$('.modal-footer button[type=submit]').html('Tambah Member');
		$('.modal-body form').attr('action', 'http://localhost/perpustakaan/public/member/tambah');

		$('#nama').val('');
		$('#alamat').val('');
		$('#kontak').val('');
		$('#email').val('');
		$('#avatar').val('');

	});

	$('.tampilModalUbahMember').on('click', function() {
		
		$('#judulModal').html('Sunting Data Member');
		$('.modal-footer button[type=submit]').html('Sunting Data');
		$('.modal-body form').attr('action', 'http://localhost/perpustakaan/public/member/ubah');

		const id = $(this).data('id');
		
		$.ajax({
			url: 'http://localhost/perpustakaan/public/member/getubah',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data) {
				$('#judul').val(data.judul);
				$('#nama').val(data.nama);
				$('#alamat').val(data.alamat);
				$('#kontak').val(data.kontak);
				$('#email').val(data.email);
				$('#avatar').val(data.avatar);
				$('#id').val(data.id);
			}
		});

	});

});

//LIVE SEARCH
//mengambil elemen yg dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('containerCari');

//tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function() {
	
	//buat objek ajax
	var ajax = new XMLHttpRequest();

	//cek kesiapan ajax
	ajax.onreadystatechange = function() {
		if( ajax.readyState == 4 && ajax.status == 200 ) {
			containerCari.innerHTML = ajax.responseText;
		}
	}

	//eksekusi ajax
	ajax.open('GET', 'http://localhost/perpustakaan/public/koleksi/pencarian', true);
	ajax.send();
});