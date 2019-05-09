<?php
class Pages extends Controller
{
    public function __construct()
    {
        $this->eventModel = $this->model('Event');
        $this->userModel = $this->model('User');
    }

    // index Controller
    public function index()
    {

        $data = [
            'title' => 'Welcome',
        ];

        $this->view('pages/index', $data);
    }

    // events Controller
    public function events()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            $orientation = $_GET['orientation'];
            $events = $this->eventModel->getEventsByOrientation($orientation);

            $data = [
                'events' => $events
            ];

            $this->view('pages/events', $data);
        }
    }

    // event details controller
    public function eventDetails()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['newComment'])) {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Initialize new comment
                $newComment = [
                    'comment' => trim($_POST['newComment']),
                    'event_id' => $_GET['event_id'],
                    'user_id' => $_SESSION['user_id'],
                    'comment_error' => ''
                ];

                // Check if field is empty
                if (empty($newComment['comment'])) {
                    $newComment['comment_error'] = 'Field cannot be empty';
                }

                //Check for errors before insert
                if (empty($newComment['comment_error'])) {
                    if ($this->eventModel->addComment($newComment)) {
                        redirect('pages/eventDetails?event_id=' . $_GET['event_id']);
                    }
                }
                // Like
            } else if(isset($_POST['like'])) {
                
                $data = [
                    'event_id' => $_GET['event_id'],
                    'user_id' => $_SESSION['user_id']
                ];
                if($this->eventModel->like($data)) {
                    redirect('pages/eventDetails?event_id=' . $_GET['event_id']);
                
                }
                // Flag as fake
            } else if(isset($_POST['fake'])) {
                
                $data = [
                    'event_id' => $_GET['event_id'],
                    'user_id' => $_SESSION['user_id']
                ];
                if($this->eventModel->markFake($data)) {
                    redirect('pages/eventDetails?event_id=' . $_GET['event_id']);
                }
            }
        } 
        // Check if event is set by get method
        if (isset($_GET['event_id'])) {
            if (!$_GET['event_id'] > 0) {
                redirect('pages/events');
            }

            // Get data from db
            $eventDetails = $this->eventModel->getEventById($_GET['event_id']);     // Single row
            $comments = $this->eventModel->getCommentsByEvent($_GET['event_id']);   // Result set
            $likes = $this->eventModel->getLikes($_GET['event_id']);
            $fakes = $this->eventModel->getFakes($_GET['event_id']);

            if($fakes > 1) {
                if($this->eventModel->deleteEvent($_GET['event_id']));
            }

            if (empty($eventDetails)) {
                redirect('pages/index');
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
                'comments' => $comments,
                'likes' => $likes,
                'fakes' => ' ('. $fakes . ')'
            ];

            if($fakes == 0) {
                $data['fakes'] = '';
            }

            $this->view('pages/eventDetails', $data);
        }
    }
}
