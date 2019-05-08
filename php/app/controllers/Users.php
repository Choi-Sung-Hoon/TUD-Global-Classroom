<?php 
    class Users extends Controller {
        
        public function __construct() {
            $this->userModel = $this->model('User');
            $this->eventModel = $this->model('Event');
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
                    if(!$this->userModel->findUserByName($data['name'])) {
                        $data['name_error'] = 'Username already exists';
                    }
                }
                if(empty($data['email'])) {
                    $data['email_error'] = 'Field cannot be empty';
                } else {

                    // Check if email already exists
                    if(!$this->userModel->findUserByEmail($data['email'])) {
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
                    if($this->userModel->register($data)) {
                        redirect('pages/index.php');       
                    }
                    
                } else {
                    $this->view('/users/register', $data);

                }
            }

            
        }

        public function login() {
            if(isset($_SESSION['user_name'])) {
                redirect('/index');
            }
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'email' => $_POST['email'],
                    'password' => $_POST['password'],
                    'email_error' => '',
                    'password_error' => ''
                ];
                // Validate email
                if(empty($data['email'])) {
                    $data['email_error'] = 'Please enter email';
                }

                // Validate password
                if(empty($data['password'])) {
                    $data['password_error'] = 'Please enter password';
                }

                //Check if email exists
                if($this->userModel->findUserByEmail($data['email'])) {
                    $data['password_error'] = 'Invalid email or password';
                    
                }
                if(empty($data['email_error']) && empty($data['password_error'])) {
                    $user = $this->userModel->login($data['email'], $data['password']);
                    if($user) {
                        $this->createSessions($user);
                    } 
                } else {
                    $data['password_error'] = 'Invalid email or password';
                    $this->view('users/login', $data);
                }
                $this->view('/users/login', $data);
            }
            

        }
        // Create sessions for user
        public function createSessions($user) {
            $_SESSION['user_email'] = $user->email;
            $_SESSION['user_name'] = $user->username;
            $_SESSION['user_id'] = $user->id;

            redirect('index');

        }

        public function logout() {
            unset($_SESSION['user_id']);
            unset($_SESSION['user_email']);
            unset($_SESSION['user_name']);
            session_destroy();
            redirect('index');
        }

        public function createEvent() {
            $data = [];
            if(!isLoggedIn()) {
                redirect('index');
            }
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Set file variables
                $imageDirectory = $_SERVER['DOCUMENT_ROOT'] . '/public/img/';
                $file = $imageDirectory .basename($_FILES['fileToUpload']['name']);
                $imageType = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                $checkImage = getimagesize($_FILES['fileToUpload']['tmp_name']);


                $data = [
                    'name' => $_POST['name'],
                    'organizer' => $_POST['organizer'],
                    'location' => $_POST['location'],
                    'contact' => $_POST['website'],
                    'orientation' => $_POST['orientation'],
                    'price' => 'from ' . $_POST['price'],
                    'category' => $_POST['category'],
                    'date' => $_POST['date'],
                    'image' => '',
                    'name_error' => '',
                    'organizer_error' => '',
                    'location_error' => '',
                    'contact_error' => '',
                    'orientation_error' => '',
                    'price_error' => '',
                    'category_error' => '',
                    'date_error' => '',
                    'image_error' => '',
                    'general_error' => ''

                ];

                // Check that required fields aren't empty
                if(empty($data['name'])) {
                    $data['name_error'] = 'Field cannot be empty';
                }
                if(empty($data['organizer'])) {
                    $data['organizer_error'] = 'Field cannot be empty';
                }
                if(empty($data['location'])) {
                    $data['location_error'] = 'Field cannot be empty';
                }
                if(empty($data['contact'])) {
                    $data['contact_error'] = 'Field cannot be empty';
                }
                if(empty($data['orientation'])) {
                    $data['orientation_error'] = 'Field cannot be empty';
                }

                // Set price to 0 if field is empty
                if(empty($_POST['price'])) {
                    $data['price'] = 0;
                }
                if(empty($data['category'])) {
                    $data['category_error'] = 'Please specify category';
                }

                // Check if file is an image
                if($checkImage == false) {
                    $data['image_error'] = 'File is not an image';
                }
                // Check file size ()
                if($_FILES['fileToUpload']['size'] > (MB * 2)) {
                    $data['image_error']  = 'Image is too large';
                }
                // Check image type
                if($imageType != 'jpg' && $imageType != 'png' && $imageType != 'jpeg') {
                    $data['image_error'] = 'Only jpg, jpeg and png images are allowed.';
                }
                if(empty($data['image_error'])) {
                    if(!empty($file)) {
                        $data['image'] = $_FILES['fileToUpload']['name'];
                    }
                    
                }

                if(empty($data['image'])) {
                    $data['image'] == $_POST['category'] . '.jpg';
                }
    
                if(empty($data['name_error']) && empty($data['organizer_error']) && empty($data['location_error'])
                    && empty($data['contact_error']) && empty($data['orientation_error'])
                    && empty($data['price_error']) && empty($data['category_error']) && empty($data['image_error'])) {
                        if($this->eventModel->createEvent($data)) {
                            if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $file)) {
                                redirect('pages/events?orientation='.$data['orientation']);
                            } else {
                                $data['image_error'] = 'Failed to upload image';
                                $this->view('users/createEvent', $data);
                            }
                                             
                        } else {
                            
                            $this->view('users/createEvent', $data);
                        }
                    } else {
                        $data['general_error'] = 'Failed to create event';
                        $this->view('users/createEvent', $data);
                    }
                    
            } else {
                $this->view('users/createEvent', $data);
            }

            
        }
		
		
		public function pwrecovery() {
           
            $data = [
                'title' => 'Welcome',
            ];   

            $this->view('pages/pwrecovery', $data);
			$valid = false;
			
			
			
			
			if (isset($_POST['username'])){
				
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'email' => $_POST['email'],
                    'username' => $_POST['username'],
                    'email_error' => '',
                    'username_error' => '',
					
                ];
				
				$_SESSION["a"] = $_POST['username'];
				
				if(empty($data['email'])) {
                    $data['email_error'] = 'Please enter email';
                }
				if(empty($data['username'])) {
                    $data['username_error'] = 'Please enter username';
                }
				// Checks to see if user inputed email exists
				if($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_error'] = 'Invalid email';
					echo 'Invalid email';
                    }
				// Checks to see if user inputed username exists
				if($this->userModel->findUserByName($data['username'])) {
				$data['username_error'] = 'Invalid username';
				echo 'Invalid username';
				}
				//checks to see if no errors
				if(empty($data['email_error']) && empty($data['username_error'])) {
					//sends information to be checked, returns boolean
                    $user = $this->userModel->pwrecovery($data['email'], $data['username']);
                    if($user) {
						$username = $data['username'];
						$valid = true;
					
						
								}
						
				}

				
			}
			if($valid){
						echo'	<div class="container">
										<div class="container card">
											<div class="form-group">
											
													<form  method="post">
													<input type="password" name="password" placeholder ="Enter new password" required="required">
													<input type="password" name="passwordconf" placeholder ="Confirm new password" required="required">
													<button type="submit" name="resetPW">Reset Password </button>
											
										 
											</div>
										</div>
									</div>
								';
                             } 
							 
				if (isset($_POST['passwordconf'])){
									
									 $data2 = [
										'password' => $_POST['password'],
										'passwordconf' => $_POST['passwordconf']
										];
										
										$username = $_SESSION["a"] ;
										$CheckDaTing = $this->userModel->changepw($data2['password'], $data2['passwordconf'], $username );
										if($CheckDaTing){
											echo 'Password Changed Successfully';
		
										}
									
								}
						
			
		}

    }