<?php
    class Pages extends Controller {
        public function __construct() {
            $this->eventModel = $this->model('Event');
			 $this->db = new Database;
        }

        public function index() {
            
            $data = [
                'title' => 'Welcome',
            ];   

            $this->view('pages/index', $data);
        }
         
        public function events() {
            $orientation = $_GET['orientation'];
            $events = $this->eventModel->getEventsByOrientation($orientation);


            $data = [
                'events' => $events
              ];
        
              $this->view('pages/events', $data);
        }

        public function eventDetails() {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Initialize new comment
                $newComment = [
                    'comment' => trim($_POST['newComment']),
                    'event_id' => $_GET['event_id'],
                    'user_id' => $_SESSION['user_id'],
                    'comment_error' => '' 
                ];

                // Check if field is empty
                if(empty($newComment['comment'])) {
                    $newComment['comment_error'] = 'Field cannot be empty';
                }

                //Check for errors before insert
                if(empty($newComment['comment_error'])) {
                    if($this->eventModel->addComment($newComment)) {
                        echo 'lol';         
                        redirect('pages/eventDetails?event_id=' . $_GET['event_id']);
                    }
                }
            }

            if(isset($_GET['event_id'])) {
                if(!$_GET['event_id'] > 0) {
                    header('Location: ' . URLROOT . 'pages/events');
                }
                $eventDetails = $this->eventModel->getEventById($_GET['event_id']);
                $comments = $this->eventModel->getCommentsByEvent($_GET['event_id']);

                if(empty($eventDetails)) {
                    header('Location: ' . URLROOT . 'pages/events');
                }

                $data = [
                    'eventName' => $eventDetails->name,
                    'organizer' => $eventDetails->organizer,
                    'location' => $eventDetails->location,
                    'contact' => $eventDetails->contact,
                    'orientation' => $eventDetails->orientation,
                    'price' => $eventDetails->price,
                    'category' => $eventDetails->category,
                    'image_source' => $eventDetails->image,
                    'date' => $eventDetails->date,
                    'comments' => $comments
                ];

                $this->view('pages/eventDetails', $data);

                
            }
            
        }
		
    }