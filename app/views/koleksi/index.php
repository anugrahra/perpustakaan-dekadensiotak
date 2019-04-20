<?=$data['jmltotal'];?>
<p class="text-center"><?=$data['tanggal'];?></p>
<hr>

<div class="row">
	<div class="col-lg-6">
		<?php Flasher::flash(); ?>
	</div>
</div>

<div class="row mb-3">
	<div class="col-lg-6">
		<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
		  Tambah Koleksi
		</button>
	</div>
</div>

<div class="row">
	<div class="col text-center">
		<?php foreach ( $data['koleksi'] as $buku ) : ?>
			<a href="<?=BASEURL;?>/koleksi/detail/<?=$buku['id'];?>">
	  			<img src="<?=$buku['link_gambar'];?>" height="200px" class="mb-2">
	  			<div style="display: none;">
	  				<br><br>
		  			<a href="<?= BASEURL; ?>/koleksi/hapus/<?= $buku['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin akan menghapus data koleksi ini?');">Hapus</a>
		  			<a href="<?= BASEURL; ?>/koleksi/ubah/<?= $buku['id']; ?>" class="badge badge-success tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $buku['id']; ?>">Sunting</a>
	  			</div>
	  		</a>
		<?php endforeach; ?>
	</div>
</div>
<hr>
<div class="row">
	<div class="col text-center">
		<?php foreach ( $data['untukmu'] as $untukmu ) : ?>
			<a href="<?=BASEURL;?>/koleksi/detailuntukmu/<?=$untukmu['id'];?>">
	  			<img src="<?=$untukmu['link_gambar'];?>" height="200px" class="mb-2">
	  			<div style="display: none;">
	  				<br><br>
		  			<a href="<?= BASEURL; ?>/koleksi/hapus/<?= $untukmu['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin akan menghapus data koleksi ini?');">Hapus</a>
		  			<a href="<?= BASEURL; ?>/koleksi/ubah/<?= $untukmu['id']; ?>" class="badge badge-success tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $untukmu['id']; ?>">Sunting</a>
	  			</div>
	  		</a>
		<?php endforeach; ?>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Koleksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/koleksi/tambah" method="post">
        	<input type="hidden" name="id" id="id">
		    <div class="form-group">
			  <label for="judul">Judul</label>
			  <input type="text" class="form-control" id="judul" name="judul">
			</div>
		    <div class="form-group">
			  <label for="judul_asli">Judul Asli</label>
			  <input type="text" class="form-control" id="judul_asli" name="judul_asli">
			</div>
			<div class="form-group">
			  <label for="penulis">Penulis</label>
			  <input type="text" class="form-control" id="penulis" name="penulis">
			</div>
			<div class="form-group">
			  <label for="penerbit">Penerbit</label>
			  <input type="text" class="form-control" id="penerbit" name="penerbit">
			</div>
			<div class="form-group">
			  <label for="cetakan">Cetakan</label>
			  <input type="text" class="form-control" id="cetakan" name="cetakan">
			</div>
			<div class="form-group">
			  <label for="bahasa">Bahasa</label>
			  <input type="text" class="form-control" id="bahasa" name="bahasa">
			</div>
			<div class="form-group">
			  <label for="penerjemah">Penerjemah</label>
			  <input type="text" class="form-control" id="penerjemah" name="penerjemah">
			</div>
			<div class="form-group">
			  <label for="halaman">Halaman</label>
			  <input type="number" class="form-control" id="halaman" name="halaman">
			</div>
			<div class="form-group">
			  <label for="isbn">ISBN</label>
			  <input type="text" class="form-control" id="isbn" name="isbn">
			</div>
			<div class="form-group">
			  <label for="rating">Rating</label>
			  <input type="number" class="form-control" id="rating" name="rating">
			</div>
			<div class="form-group">
			  <label for="goodreads_link">Link Goodreads</label>
			  <input type="text" class="form-control" id="goodreads_link" name="goodreads_link">
			</div>
			<div class="form-group">
			  <label for="review_link">Link Ulasan</label>
			  <input type="text" class="form-control" id="review_link" name="review_link">
			</div>
			<div class="form-group">
			  <label for="link_gambar">Link Gambar</label>
			  <input type="text" class="form-control" id="link_gambar" name="link_gambar">
			</div>
			<div class="form-group">
			  <label for="kategori">Kategori</label>
			  <input type="text" class="form-control" id="kategori" name="kategori">
			</div>
			<div class="form-group">
			  <label for="jenis">Jenis</label>
			  <select class="form-control" id="jenis" name="jenis">
			    <option value="Buku">Buku</option>
			    <option value="Zine">Zine</option>
			  </select>
			</div>
			<div class="form-group">
			  <label for="status">Status</label>
			  <select class="form-control" id="status" name="status">
			    <option value="Tersedia">Tersedia</option>
			    <option value="Dipinjam">Dipinjam</option>
			  </select>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah Koleksi</button>
        </form>
      </div>
    </div>
  </div>
</div>