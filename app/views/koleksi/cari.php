
	<?=$data['jmltotal'];?>
	<hr>
	
<div id="containerCari">
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
</div>