<?php
class Event
{
    public function __construct()
    {
        $this->db = new Database;
    }

    // Get events by orientation (Indoor or Outdoor)
    public function getEventsByOrientation($orientation)
    {
        $this->db->query('SELECT * FROM event WHERE orientation = :orientation');
        $this->db->bind(':orientation', $orientation);

        $result = $this->db->resultSet();

        return $result;
    }

    public function getEventById($id)
    {
        $this->db->query('SELECT * FROM event WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->singleResult();

        return $row;
    }

    public function paginateEvent($orientation, $page = 1, $limit = 13)
    {
        if($limit == 0)
        {
            $this->db->query('SELECT * FROM event WHERE orientation = :orientation');
            $this->db->bind(':orientation', $orientation);
        }
        else
        {
            $this->db->query('SELECT * FROM event WHERE orientation = :orientation LIMIT :start, :limit');
            $this->db->bind(':orientation', $orientation);
            $this->db->bind(':start', ((intval($page) - 1) * intval($limit)));
            $this->db->bind(':limit', intval($limit));
        }
        $result = $this->db->resultSet();

        return $result;
    }

    public function getCommentsByEvent($eventId)
    {
        $this->db->query('SELECT * 
                              FROM comments
                              INNER JOIN user
                              ON comments.user_id = user.id
                              WHERE event_id = :event_id');
        $this->db->bind(':event_id', $eventId);

        $result = $this->db->resultSet();
        return $result;
    }

    public function addComment($data)
    {
        $this->db->query('INSERT INTO comments(event_id, user_id, comment) VALUES(:event_id, :user_id, :comment)');
        $this->db->bind(':event_id', $data['event_id']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':comment', $data['comment']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function createEvent($data) {
        $this->db->query('INSERT INTO event(name, organizer, location, contact, orientation, price, category, image, date)
                          VALUES(:name, :organizer, :location, :contact, :orientation, :price, :category, :image, :date)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':organizer', $data['organizer']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind('contact', $data['contact']);
        $this->db->bind(':orientation', $data['orientation']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind('category', $data['category']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':date', $data['date']);

        if($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
