<?php
    class Pages extends Controller {
        public function __construct() {
            $this->eventModel = $this->model('Event');
        }

        public function index() {
            
            $data = [
                'title' => 'Welcome',
            ];   

            $this->view('pages/index', $data);
        }
        
        public function events() {
            $data = [
                'title' => 'Events'
              ];
        
              $this->view('pages/events', $data);
        }

        public function eventDetails() {
            if(isset($_GET['event_id'])) {
                $eventDetails = $this->eventModel->getEventById(1);

                $data = [
                    'eventName' => $eventDetails->name,
                    'organizer' => $eventDetails->organizer,
                    'location' => $eventDetails->location,
                    'contact' => $eventDetails->contact,
                    'orientation' => $eventDetails->orientation,
                    'price' => $eventDetails->price,
                    'category' => $eventDetails->category,
                    'image_source' => $eventDetails->image
                ];
                $this->view('pages/eventDetails', $data);
            }
            

            
        }
    }