<?php
require_once 'Database.php';
class User
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function showAll()
	{
		$this->db->query("SELECT * FROM users");
		$result = $this->db->resultSet(PDO::FETCH_OBJ);
		return $result;
	}

	public function show($id)
	{
		$this->db->query('SELECT * FROM users WHERE id = :id');
		$this->db->bind(':id', $id);
		return $this->db->single();
	}

	public function edit($data)
	{
		$this->db->query("UPDATE users SET admin = :admin, username = :username, email = :email, password = :password, created_at = :created_at WHERE id = :id");
		$this->db->bind(':id', $data['id']);
		$this->db->bind(':admin', $data['admin']);
		$this->db->bind(':username', $data['username']);
		$this->db->bind(':email', $data['email']);
		$this->db->bind(':password', $data['password']);
		$this->db->bind(':created_at', $data['created_at']);
		$this->db->execute();
		header('Location: views/admin/show_user.view.php?id='. $data['id']);
	}

	public function delete($id)
	{
		$this->db->query("DELETE FROM users WHERE id = :id");
		$this->db->bind(':id', $id);
		$this->db->execute();
		header('Location: views/home.view.php');

	}


	public function search($search)
	{
		$this->db->query("SELECT * FROM users WHERE username LIKE :username OR email LIKE :email");
		$this->db->bind(':username', '%'.$search.'%');
		$this->db->bind(':email', '%'.$search.'%');
		$result = $this->db->resultSet(PDO::FETCH_OBJ);
		return $result;
	}

	

}