<?php

class Koleksi extends Controller {
	
	public function index()
	{	
		Sesi::cekSession();
		$data['title'] = 'PERPUSTAKAAN dekadensiotak';
		$data['displayLogout'] = Sesi::displayLogout();
		$data['koleksi'] = $this->model('Koleksi_model')->getAllKoleksi();
		$data['untukmu'] = $this->model('Koleksi_model')->getAllUntukKamu();
 		$total = count($data['koleksi']) + count($data['untukmu']);
		$data['jmltotal'] = '<h1 class="text-center">Total sudah ada<b> ' . $total . '</b>  koleksi</h1>';
		$data['tanggal'] = $this->model('Koleksi_model')->getTanggal();

		$this->view('templates/header', $data);
		//menuju ke file di alamat views/home/index
		$this->view('koleksi/index', $data);
		$this->view('templates/footer');
	}

	public function buku()
	{
		$data['title'] = 'BUKU | PERPUSTAKAAN dekadensiotak';
		$data['displayLogout'] = Sesi::displayLogout();
		$data['koleksi'] = $this->model('Koleksi_model')->getAllKoleksiBuku();
		$data['jmltotal'] = '<h1 class="text-center">Kini tersedia <b> ' . count($data['koleksi']) . '</b>  buku di <i><b>Perpustakaan dekadensiotak</b></i></h1>';
		
		$this->view('templates/header', $data);
		$this->view('koleksi/buku', $data);
		$this->view('templates/footer');
	}

	public function untukkamu()
	{
		$data['title'] = 'UNTUK KAMU | PERPUSTAKAAN dekadensiotak';
		$data['displayLogout'] = Sesi::displayLogout();
		$data['koleksi'] = $this->model('Koleksi_model')->getAllUntukKamu();
		$data['jmltotal'] = '<h1 class="text-center">Kini tersedia <b> ' . count($data['koleksi']) . '</b>  publikasi yang bisa kamu unduh gratis</h1>';

		$this->view('templates/header', $data);
		$this->view('koleksi/untukkamu', $data);
		$this->view('templates/footer');
	}

	public function detail($id)
	{	
		$data['title'] = 'DETAIL KOLEKSI | PERPUSTAKAAN dekadensiotak';
		$data['displayLogout'] = Sesi::displayLogout();
		$data['koleksi'] = $this->model('Koleksi_model')->getKoleksiById($id);

		$this->view('templates/header', $data);
		$this->view('koleksi/detail', $data);
		$this->view('templates/footer');
	}

	public function detailuntukmu($id)
	{	
		$data['title'] = 'DETAIL | PERPUSTAKAAN dekadensiotak';
		$data['displayLogout'] = Sesi::displayLogout();
		$data['koleksi'] = $this->model('Koleksi_model')->getUntukKamuById($id);

		$this->view('templates/header', $data);
		$this->view('koleksi/detailuntukmu', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		if($this->model('Koleksi_model')->tambahKoleksi($_POST) > 0) {
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: ' . BASEURL . '/koleksi');
			exit;
		} else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: ' . BASEURL . '/koleksi');
			exit;
		}
	}

	public function getubah()
	{
		echo json_encode($this->model('Koleksi_model')->getKoleksiById($_POST['id']));
	}

	public function ubah()
	{
		if($this->model('Koleksi_model')->ubahDataKoleksi($_POST) > 0) {
			Flasher::setFlash('berhasil', 'diubah', 'success');
			header('Location: ' . BASEURL . '/koleksi');
			exit;
		} else {
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header('Location: ' . BASEURL . '/koleksi');
			exit;
		}	
	}

	public function hapus($id)
	{
		if($this->model('Koleksi_model')->hapusKoleksi($id) > 0) {
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: ' . BASEURL . '/koleksi');
			exit;
		} else {
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: ' . BASEURL . '/koleksi');
			exit;
		}
	}

	public function cari()
	{
		$data['title'] = 'Hasil Pencarian | PERPUSTAKAAN dekadensiotak';
		$data['displayLogout'] = Sesi::displayLogout();
		$data['koleksi'] = $this->model('Koleksi_model')->cariKoleksi();
		$data['untukmu'] = $this->model('Koleksi_model')->cariUntukmu();
 		$total = count($data['koleksi']) + count($data['untukmu']);
		$data['jmltotal'] = '<h1 class="text-center"><b>' . $total . '</b>  hasil pencarian ditemukan</h1>';

		$this->view('templates/header', $data);
		$this->view('koleksi/cari', $data);
		$this->view('templates/footer');
	}

	public function pencarian()
	{
		$data['koleksi'] = $this->model('Koleksi_model')->cariKoleksi();
		$data['untukmu'] = $this->model('Koleksi_model')->cariUntukmu();
 		$total = count($data['koleksi']) + count($data['untukmu']);
		$data['jmltotal'] = '<h1 class="text-center"><b>' . $total . '</b>  hasil pencarian ditemukan</h1>';

		$this->view('koleksi/cari', $data);
	}

}