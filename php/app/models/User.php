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