<?php
    class Event {
        public function __construct() {
            $this->db = new Database;
        }

        public function getEventById($id) {
            $this->db->query('SELECT * FROM event WHERE id = :id');
            $this->db->bind(':id', $id);
            $row = $this->db->singleResult();
            
            return $row;
        }
    }