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

    	if($row){
      		$hashed_password = $row->password;
      		if(password_verify($password, $hashed_password)){
        		$_SESSION['user_id'] = $row->id;
        		$_SESSION['user_name'] = $row->username;
        		$_SESSION['user_email'] = $row->email;
                $_SESSION['role'] = $row->role;
        		if($_SESSION['role'] == 'admin'){
                    header('Location: admin.php');
                } else{
                    header('Location: views/home.view.php');
                }
        		return $row;
      		} else{
        			return false;
      			}
    	}
	}

    public function showAll()
    {
        $this->db->query('SELECT * FROM users');
        $result = $this->db->resultSet(PDO::FETCH_OBJ);
        return $result;
    }

    public function show($id)
    {
        $this->db->query('SELECT * FROM users where id = :id');
        $this->db->bind(':id', $id);
        $this->db->execute();
        $user = $this->db->single(PDO::FETCH_OBJ);
        return $user;
    }

    public function update($data)   
    {   
        $id = $data['id'];
        $this->db->query("UPDATE users SET username = :username, email = :email, password = :password, role = :role, created_at = :created_at WHERE id = :id");
        $this->db->bind(':id', $id);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':role', $data['role']);
        $this->db->bind(':created_at', $data['created_at']);
        $this->db->execute();
        header('Location: admin.php');
    }

    public function delete($id)
    {
        $this->db->query("DELETE FROM users WHERE id = :id");
        $this->db->bind(':id', $id);
        $this->db->execute();
        header('Location: admin.php');
    }

	public function findByEmail($email)
	{
		$this->db->query('SELECT * FROM users WHERE email = :email');
		$this->db->bind(':email', $email);
		$this->db->execute();

		if($this->db->rowCount() > 0){
			return true;
		} else{
				return false;
			}
	}

	public function findByUsername($username)
	{
		$this->db->query('SELECT * FROM users WHERE username = :username');
		$this->db->bind(':username', $username);
		$this->db->execute();

		if($this->db->rowCount() > 0){
			return true;
		} else{
				return false;
			}
	}

	public function searchUser($search)
	{
		$this->db->query("SELECT * FROM users WHERE username LIKE :username OR email LIKE :email");
		$this->db->bind(':username', '%'.$search.'%');
		$this->db->bind(':email', '%'.$search.'%');
		$result = $this->db->resultSet(PDO::FETCH_OBJ);
		return $result;
	}

	public function logout()
	{
		session_start();
		unset($_SESSION['user_id']);
		unset($_SESSION['user_name']);
		unset($_SESSION['user_email']);
		session_destroy();
	}

}