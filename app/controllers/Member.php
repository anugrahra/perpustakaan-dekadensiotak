<?php

class Member extends Controller {
	
	public function index()
	{	
		$data['title'] = 'Member PERPUSTAKAAN dekadensiotak';
		$data['displayLogout'] = Sesi::displayLogout();
		$data['member'] = $this->model('Member_model')->getAllMember();
 		$total = count($data['member']);
		$data['jmltotal'] = '<h1 class="text-center">Total sudah ada<b> ' . $total . '</b>  member</h1>';

		$this->view('templates/memberheader', $data);
		$this->view('member/index', $data);
		$this->view('templates/memberfooter');
	}

	public function detail($id)
	{	
		$data['title'] = 'DETAIL MEMBER | PERPUSTAKAAN dekadensiotak';
		$data['displayLogout'] = Sesi::displayLogout();
		$data['member'] = $this->model('Member_model')->getMemberById($id);

		$this->view('templates/memberheader', $data);
		$this->view('member/detail', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		if($this->model('Member_model')->tambahMember($_POST) > 0) {
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: ' . BASEURL . '/member');
			exit;
		} else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: ' . BASEURL . '/member');
			exit;
		}
	}

	public function getubah()
	{
		echo json_encode($this->model('Member_model')->getMemberById($_POST['id']));
	}

	public function ubah()
	{
		if($this->model('Member_model')->ubahDataMember($_POST) > 0) {
			Flasher::setFlash('berhasil', 'diubah', 'success');
			header('Location: ' . BASEURL . '/member');
			exit;
		} else {
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header('Location: ' . BASEURL . '/member');
			exit;
		}	
	}

	public function hapus($id)
	{
		if($this->model('Member_model')->hapusMember($id) > 0) {
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: ' . BASEURL . '/member');
			exit;
		} else {
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: ' . BASEURL . '/member');
			exit;
		}
	}

	public function cari()
	{
		$data['title'] = 'Hasil Pencarian Member | PERPUSTAKAAN dekadensiotak';
		$data['displayLogout'] = Sesi::displayLogout();
		$data['member'] = $this->model('Member_model')->cariMember();
 		$total = count($data['member']);
		$data['jmltotal'] = '<h1 class="text-center"><b>' . $total . '</b>  hasil pencarian ditemukan</h1>';

		$this->view('templates/header', $data);
		$this->view('member/cari', $data);
		$this->view('templates/footer');	
	}

}