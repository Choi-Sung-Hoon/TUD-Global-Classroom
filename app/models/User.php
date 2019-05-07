<?php
class User {
    public function __construct() {
        $this->db = new Database;
    }

    public function register($data) {
        // Query for registration
        $this->db->query('INSERT INTO user(username, email, password) VALUES(:name, :email, :password)');

        //Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
	public function pwrecovery($email, $username){
		 $this->db->query('SELECT * FROM user WHERE email = :email');
		 $this->db->bind(':email', $email);
		 $row = $this->db->singleResult();
		 $username1 = $row->username;
		 $email1 = $row->email;
		 if(strcmp($username , $username1) !== 0){
			 echo'Username and Email do not match the same user';
			 return false; 
		 }
		 else{
			 return true;
		 }
		 
	}
	public function changepw($password1, $password2,$username){
		if(strcmp($password1 , $password2 ) == 0)
		{
				$password = password_hash($password1, PASSWORD_DEFAULT);
					$this->db->query('UPDATE user SET password = :password WHERE username = :username');
					$this->db->bind(':password', $password);
					$this->db->bind(':username', $username);
							if($this->db->execute()) {
									return true;
								} else {
									return false;
								}
		}
		else
		{
			echo 'Passwords do not match';
			return false;
		}
	}

    public function login($email, $password) {
        
        // Login query
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email', $email);
        
        $row = $this->db->singleResult();
        
        // Verify password
        $hashed_password = $row->password;
        if(password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    public function findUserByName($name) {
        // Query for user by name
        $this->db->query('SELECT * FROM user where username = :name');
        $this->db->bind(':name', $name);
        $row = $this->db->singleResult();

        // Check if anything is returned
        if($this->db->rowCount() == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function findUserByEmail($email) {
        // Query for user by email
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email', $email);
        $row = $this->db->singleResult();

        //Check if anything is returned
        if($this->db->rowCount() == 0) {
            return true;
        } else {
            return false;
        }
    }
}