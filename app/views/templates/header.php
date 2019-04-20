<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$data['title'];?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=BASEURL;?>/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-2">
  <div class="container">
	  <a class="navbar-brand" href="<?=MAININDEX;?>">Perpus DO</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="<?=MAININDEX;?>">Home</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Koleksi
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="<?=BASEURL;?>/koleksi/" style="<?=$data['displayLogout'];?>">All</a>
	          <a class="dropdown-item" href="<?=BASEURL;?>/koleksi/buku">Buku</a>
	          <a class="dropdown-item" href="<?=BASEURL;?>/koleksi/untukkamu">Untuk Kamu</a>
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?=BASEURL;?>/member/">Member</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0" action="<?=BASEURL;?>/koleksi/cari" method="post">
	      <input class="form-control mr-sm-2" type="search" placeholder="judul atau penulis" aria-label="Search" name="keyword" id="keyword">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="tombol-cari">Cari</button>
	    </form>
		  <a class="btn btn-danger ml-2" href="<?=BASEURL;?>/admin/logout" style="<?=$data['displayLogout'];?>">Log Out</a>
	  </div>
  </div>
</nav>

<div class="container mb-3">