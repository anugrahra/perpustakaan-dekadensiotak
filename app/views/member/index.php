<?=$data['jmltotal'];?>
<marquee><h6>member-member ceria</h6></marquee>
<hr>

<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flashMember(); ?>
  </div>
</div>

<div class="row mb-3" style="<?=$data['displayLogout'];?>">
	<div class="col-lg-6">
		<button type="button" class="btn btn-primary tombolTambahMember" data-toggle="modal" data-target="#formModal">
		  Tambah Koleksi
		</button>
	</div>
</div>

<div class="row">
	<div class="col text-center">
		<ul class="list-group">
			<?php foreach ( $data['member'] as $member ) : ?>
				<a href="<?=BASEURL;?>/member/detail/<?=$member['id'];?>">
					<li class="list-group-item">
            <?=$member['nama'];?>
            <a href="<?= BASEURL; ?>/member/ubah/<?= $member['id']; ?>" class="badge badge-primary tampilModalUbahMember" data-toggle="modal" data-target="#formModal" data-id="<?= $member['id']; ?>" style="<?=$data['displayLogout'];?>">Edit</a>
            <a href="<?= BASEURL; ?>/member/hapus/<?= $member['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin akan menghapus member ini?');" style="<?=$data['displayLogout'];?>">Hapus</a>
          </li>
				</a>
			<?php endforeach; ?>
		</ul>
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
          <form action="<?= BASEURL; ?>/member/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea class="form-control" id="alamat" name="alamat"></textarea>
            </div>
            <div class="form-group">
              <label for="kontak">HP/Telp</label>
              <input type="text" class="form-control" id="kontak" name="kontak">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="avatar">Link Foto</label>
              <input type="text" class="form-control" id="avatar" name="avatar">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Tambah Member</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>