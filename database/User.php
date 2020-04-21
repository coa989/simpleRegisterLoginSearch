<?php
require_once 'Database.php';
class User
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function register($username, $email, $password)
	{
		$this->db->query("INSERT INTO users(username, email, password) VALUES(:username, :email, :password)");
		$this->db->bind(':username', $username);
		$this->db->bind(':email', $email);
		$this->db->bind(':password', $password);
		$this->db->execute();
		header('Location: views/login.view.php');
	}

	public function login($email, $password)
	{
		$this->db->query('SELECT * FROM users WHERE email = :email');
    	$this->db->bind(':email', $email);
   	 	$this->db->execute();
    	$row = $this->db->single(PDO::FETCH_OBJ);

    	if($row)
    	{
      		$hashed_password = $row->password;
      		if(password_verify($password, $hashed_password))
      		{
        		session_start();
        		$_SESSION['user_id'] = $row->id;
        		$_SESSION['user_name'] = $row->username;
        		$_SESSION['user_email'] = $row->email;
        		header('Location: views/home.view.php');
        		return $row;
      		} else 
      			{
        			return false;
      			}
    	}
	}

	public function findByEmail($email)
	{
		$this->db->query('SELECT * FROM users WHERE email = :email');
		$this->db->bind(':email', $email);
		$this->db->execute();

		if($this->db->rowCount() > 0)
		{
			return true;
		} else
			{
				return false;
			}
	}

	public function findByUsername($username)
	{
		$this->db->query('SELECT * FROM users WHERE username = :username');
		$this->db->bind(':username', $username);
		$this->db->execute();

		if($this->db->rowCount() > 0)
		{
			return true;
		} else
			{
				return false;
			}
	}

	public function searchUser($search)
	{
		$this->db->query('SELECT * FROM users WHERE username = :username OR email = :email');
		$this->db->bind(':username', $search);
		$this->db->bind(':email', $search);
		$result = $this->db->single(PDO::FETCH_OBJ);
		return $result;
	}

}