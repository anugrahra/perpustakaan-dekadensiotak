<?php
$pecah = explode("\r\n\r\n", $data['koleksi']['snippet']);
$text = "";

for($i=0; $i<=count($pecah)-1; $i++)
{
	$part = str_replace($pecah[$i], "<p>".$pecah[$i]."</p>", $pecah[$i]);
    $text .= $part;
}
?>


<h1><?=$data['koleksi']['judul'];?></h1>
<hr>

<div class="row">
	<div class="col md-6">
	    <img src="<?=$data['koleksi']['link_gambar'];?>" class="img-fluid">
	</div>
	<div class="col md-6">
		<b>Terbit:</b> <?=$data['koleksi']['terbit'];?><br>
		<b>Jenis:</b> <?=$data['koleksi']['jenis'];?><br>
		<p><?=$text;?></p>
		<a href="<?=$data['koleksi']['link_unduh'];?>"><b>UNDUH</b></a>
	</div>
</div>