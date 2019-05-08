<?php
    class Pages extends Controller {
        public function __construct() {
            $this->eventModel = $this->model('Event');
            $this->userModel = $this->model('User');
        }

        // index Controller
        public function index() {
            
            $data = [
                'title' => 'Welcome',
            ];   

            $this->view('pages/index', $data);
        }
        
        // events Controller
        public function events() {
            if($_SERVER['REQUEST_METHOD'] == 'GET') {

            $orientation = $_GET['orientation'];
            $events = $this->eventModel->getEventsByOrientation($orientation);

            $data = [
                'orientation' => $orientation,
                'events' => $events
              ];
        
              $this->view('pages/events', $data);
            }
        }

        // event details controller
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
                        redirect('pages/eventDetails?event_id=' . $_GET['event_id']);
                    }
                }
            }

            // Check if event is set by get method
            if(isset($_GET['event_id'])) {
                if(!$_GET['event_id'] > 0) {
                    redirect('pages/events');
                }

                // Get data from db
                $eventDetails = $this->eventModel->getEventById($_GET['event_id']);     // Single row
                $comments = $this->eventModel->getCommentsByEvent($_GET['event_id']);   // Result set

                if(empty($eventDetails)) {
                    redirect('pages/events');
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