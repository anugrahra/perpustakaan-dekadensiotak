<?=$data['jmltotal'];?>
<hr>

<div class="row">
	<div class="col text-center">
		<ul class="list-group">
			<?php foreach ( $data['member'] as $member ) : ?>
				<a href="<?=BASEURL;?>/member/detail/<?=$member['id'];?>">
					<li class="list-group-item">
            <?=$member['nama'];?>
            <a href="<?= BASEURL; ?>/member/ubah/<?= $member['id']; ?>" class="badge badge-primary tampilModalUbahMember" data-toggle="modal" data-target="#formModal" data-id="<?= $member['id']; ?>">Edit</a>
            <a href="<?= BASEURL; ?>/member/hapus/<?= $member['id']; ?>" class="badge badge-danger" onclick="return confirm('Yakin akan menghapus member ini?');">Hapus</a>
          </li>
				</a>
			<?php endforeach; ?>
		</ul>
	</div>
</div>