<?=$data['jmltotal'];?>
<hr>

<div class="row">
	<div class="col text-center">
		<?php foreach ( $data['koleksi'] as $untukkamu ) : ?>
			<a href="<?=BASEURL;?>/koleksi/detailuntukmu/<?=$untukkamu['id'];?>">
	  			<img src="<?=$untukkamu['link_gambar'];?>" height="200px" class="mb-2">
	  			<div style="display: none;">
	  				<br><br>
		  			<a href="<?= BASEURL; ?>/koleksi/hapus/<?= $untukkamu['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin akan menghapus data koleksi ini?');">Hapus</a>
		  			<a href="<?= BASEURL; ?>/koleksi/ubah/<?= $untukkamu['id']; ?>" class="badge badge-success tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $untukkamu['id']; ?>">Sunting</a>
	  			</div>
	  		</a>
		<?php endforeach; ?>
	</div>
</div>