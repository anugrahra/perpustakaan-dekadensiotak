<div id="HeaderHomeGrup">
	<h5 id="headerHome" class="text-center">PERPUSTAKAAN <b>dekadensiotak</b></h5>
	<p class="text-center" id="subHeaderHome"><?=$data['jmltotal'];?></p>
</div>
<div id="mainMenu">
  <a href="<?=BASEURL;?>/koleksi/buku">
    <p class="text-center hitungTotalHome"><b><?=$data['koleksi'];?></b> buku</p>
  </a>
  <a href="<?=BASEURL;?>/koleksi/untukkamu">
    <p class="text-center hitungTotalHome"><b><?=$data['untukmu'];?></b> item siap unduh</p>
  </a>
  <a href="<?=BASEURL;?>/member">
    <p class="text-center hitungTotalHome mb-0"><b><?=$data['member'];?></b> member</p>
  </a>
</div>
<div class="text-center fixed-bottom" id="footerLogin">
  <a href="https://anugrah.club/theroom">Anugrah's Project</a> &copy; 2019
</div>