<div class="row mb-2">
	<div class="col text-center">
		<h1><?=$data['koleksi']['judul'];?></h1>
	</div>
</div>

<div class="row">
	<div class="col text-right">
	    <img src="<?=$data['koleksi']['link_gambar'];?>">
	</div>
	<div class="col">
		<b>Penulis:</b> <?=$data['koleksi']['penulis'];?><br>
		<b>Penerbit:</b> <?=$data['koleksi']['penerbit'];?><br>
		<b>Cetakan:</b> <?=$data['koleksi']['cetakan'];?><br>
		<b>Bahasa:</b> <?=$data['koleksi']['bahasa'];?><br>
		<b>Halaman:</b> <?=$data['koleksi']['halaman'];?><br>
		<b>ISBN/ISBN13:</b> <?=$data['koleksi']['isbn'];?><br>
		<b>Rating:</b> <?=$data['koleksi']['rating'];?><br>
		<b>Links:</b> <a href="<?=$data['koleksi']['goodreads_link'];?>">Goodreads</a>, <a href="<?=$data['koleksi']['review_link'];?>">Review</a><br>
		<b>Kategori:</b> <?=$data['koleksi']['kategori'];?><br>
		<b>Status:</b> <?=$data['koleksi']['status'];?>
	</div>
</div>