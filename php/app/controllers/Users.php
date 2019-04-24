<?php 
    class Users extends Controller {
        
        public function __construct() {
            $this->registerModel = $this->model('User');
        }

        public function register() {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Sanitize inputs
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'name' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'confirm_password' => trim($_POST['confirm_password']),
                    'name_error' => '',
                    'email_error' => '',
                    'password_error' => '',
                    'confirm_password_error' => ''
                ];
                if(empty($data['name'])) {
                    $data['name_error'] = 'Field cannot be empty';
                } else {
                    // Check if name already exists
                    if(!$this->registerModel->findUserByName($data['name'])) {
                        $data['name_error'] = 'Username already exists';
                    }
                }
                if(empty($data['email'])) {
                    $data['email_error'] = 'Field cannot be empty';
                } else {

                    // Check if email already exists
                    if(!$this->registerModel->findUserByEmail($data['email'])) {
                        $data['email_error'] = 'Email already registered';
                    }
                }
                if(empty($data['password'])) {
                    $data['password_error'] = 'Field cannot be empty';
                }
                if(empty($data['confirm_password'])) {
                    $data['confirm_password_error'] = 'Field cannot be empty';
                } else {
                    // Check if passwords match
                    if($data['password'] != $data['confirm_password']) {
                        $data['confirm_password_error'] = 'Passwords do not match';
                    }
                }
                // Make sure no errors
                if(empty($data['name_error']) && empty($data['email_error']) && empty($data['password_error']) && empty($data['confirm_password_error'])) {
                    
                    // Hash password
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                    // register user
                    if($this->registerModel->register($data)) {
                        header('Location: '. URLROOT . 'pages/index.php');       
                    }
                    
                } else {
                    $this->view('/users/register', $data);

                }
            }

            
        }

        public function confirmLogin() {

        }

    }