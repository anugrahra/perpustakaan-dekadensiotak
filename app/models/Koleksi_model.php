<?php

class Koleksi_model {
	private $table   = 'buku';
	private $table1  = 'untukkamu';
	private $db;

	public function __construct()
	{
		//instansiasi kelas Database
		$this->db = new Database;
	}

	public function getAllKoleksi()
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC');
		return $this->db->resultSet();
	}

	public function getAllKoleksiBuku()
	{
		$this->db->query("SELECT * FROM " . $this->table . " ORDER BY judul");
		return $this->db->resultSet();
	}

	public function getAllUntukKamu()
	{
		$this->db->query("SELECT * FROM " . $this->table1 . " ORDER BY judul");
		return $this->db->resultSet();
	}

	public function getKoleksiById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function getUntukKamuById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table1 . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahKoleksi($data)
	{
		$query = "INSERT INTO buku
					VALUES
				 ('', :judul, :penerbit, :cetakan, :bahasa, :halaman, :isbn, :rating, :goodreads_link, '', :review_link, :penerjemah, :penulis, :link_gambar, :kategori, :jenis, :judul_asli, :status)";

		$this->db->query($query);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('penerbit', $data['penerbit']);
		$this->db->bind('cetakan', $data['cetakan']);
		$this->db->bind('bahasa', $data['bahasa']);
		$this->db->bind('halaman', $data['halaman']);
		$this->db->bind('isbn', $data['isbn']);
		$this->db->bind('rating', $data['rating']);
		$this->db->bind('goodreads_link', $data['goodreads_link']);
		$this->db->bind('review_link', $data['review_link']);
		$this->db->bind('penerjemah', $data['penerjemah']);
		$this->db->bind('penulis', $data['penulis']);
		$this->db->bind('link_gambar', $data['link_gambar']);
		$this->db->bind('kategori', $data['kategori']);
		$this->db->bind('jenis', $data['jenis']);
		$this->db->bind('judul_asli', $data['judul_asli']);
		$this->db->bind('status', $data['status']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function ubahDataKoleksi($data)
	{
		$query = "UPDATE buku SET
				 	judul = :judul,
				 	penerbit = :penerbit,
				 	cetakan = :cetakan,
				 	bahasa = :bahasa,
				 	halaman = :halaman,
				 	isbn = :isbn,
				 	rating = :rating,
				 	goodreads_link = :goodreads_link,
				 	review_link = :review_link,
				 	penerjemah = :penerjemah,
				 	penulis = :penulis,
				 	link_gambar = :link_gambar,
				 	kategori = :kategori,
				 	jenis = :jenis,
				 	judul_asli = :judul_asli,
				 	status = :status
				 	WHERE id = :id";

		$this->db->query($query);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('penerbit', $data['penerbit']);
		$this->db->bind('cetakan', $data['cetakan']);
		$this->db->bind('bahasa', $data['bahasa']);
		$this->db->bind('halaman', $data['halaman']);
		$this->db->bind('isbn', $data['isbn']);
		$this->db->bind('rating', $data['rating']);
		$this->db->bind('goodreads_link', $data['goodreads_link']);
		$this->db->bind('review_link', $data['review_link']);
		$this->db->bind('penerjemah', $data['penerjemah']);
		$this->db->bind('penulis', $data['penulis']);
		$this->db->bind('link_gambar', $data['link_gambar']);
		$this->db->bind('kategori', $data['kategori']);
		$this->db->bind('jenis', $data['jenis']);
		$this->db->bind('judul_asli', $data['judul_asli']);
		$this->db->bind('status', $data['status']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusKoleksi($id)
	{
		$query = "DELETE FROM buku WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();
		
		return $this->db->rowCount();	
	}

	public function cariKoleksi()
	{
		$keyword = $_POST['keyword'];
		$query = "SELECT id, judul, link_gambar FROM buku WHERE judul LIKE :keyword OR penulis LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");
		return $this->db->resultSet();
	}

	public function cariUntukmu()
	{
		$keyword = $_POST['keyword'];
		$query = "SELECT id, judul, link_gambar FROM untukkamu WHERE judul LIKE :keyword";

		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");
		return $this->db->resultSet();
	}

	public function getTanggal()
	{
		return 'Tanggal Sekarang: ' . date('l, d-m-Y');
	}

}