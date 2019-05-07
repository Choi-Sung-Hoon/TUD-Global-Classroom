<?php
    class Event {
        public function __construct() {
            $this->db = new Database;
        }

        // Get events by orientation (Indoor or Outdoor)
        public function getEventsByOrientation($orientation) {
            $this->db->query('SELECT * FROM event WHERE orientation = :orientation');
            $this->db->bind(':orientation', $orientation);

            $result = $this->db->resultSet();
 
            return $result;
        }

        public function getEventById($id) {
            $this->db->query('SELECT * FROM event WHERE id = :id');
            $this->db->bind(':id', $id);
            $row = $this->db->singleResult();
            
            return $row;
        }

        public function getCommentsByEvent($eventId) {
            $this->db->query('SELECT * 
                              FROM comments
                              INNER JOIN user
                              ON comments.user_id = user.id
                              WHERE event_id = :event_id');
            $this->db->bind(':event_id', $eventId);
            
            $result = $this->db->resultSet();
            return $result;

        }

        public function addComment($data) {
            $this->db->query('INSERT INTO comments(event_id, user_id, comment) VALUES(:event_id, :user_id, :comment)');
            $this->db->bind(':event_id', $data['event_id']);
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':comment', $data['comment']);

            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }

        }
    }