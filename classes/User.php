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


	public function searchUser($search)
	{
		$this->db->query("SELECT * FROM users WHERE username LIKE :username OR email LIKE :email");
		$this->db->bind(':username', '%'.$search.'%');
		$this->db->bind(':email', '%'.$search.'%');
		$result = $this->db->resultSet(PDO::FETCH_OBJ);
		return $result;
	}

	

}