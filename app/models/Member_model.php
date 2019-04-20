<?php

class Member_model {

	private $table   = 'member';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllMember()
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY nama');
		return $this->db->resultSet();
	}

	public function getMemberById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahMember($data)
	{
		$query = "INSERT INTO member
					VALUES
				 ('', :nama, :alamat, :kontak, :email, :avatar, '', '', '', '')";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('alamat', $data['alamat']);
		$this->db->bind('kontak', $data['kontak']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('avatar', $data['avatar']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function ubahDataMember($data)
	{
		$query = "UPDATE member SET
				 	nama = :nama,
				 	alamat = :alamat,
				 	kontak = :kontak,
				 	email = :email,
				 	avatar = :avatar
				 	WHERE id = :id";

		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('alamat', $data['alamat']);
		$this->db->bind('kontak', $data['kontak']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('avatar', $data['avatar']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusMember($id)
	{
		$query = "DELETE FROM member WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();
		
		return $this->db->rowCount();	
	}

	public function cariMember()
	{
		$keyword = $_POST['keyword'];
		$query = "SELECT id, nama FROM member WHERE nama LIKE :keyword";
		$this->db->query($query);
		$this->db->bind('keyword', "%$keyword%");
		return $this->db->resultSet();
	}

}