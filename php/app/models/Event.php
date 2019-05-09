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

    // Check is user has already liked
    public function checkLikes($id)
    {
        $this->db->query('SELECT * FROM likes where userid = :userid');
        $this->db->bind(':userid', $id);
        $row = $this->db->singleResult();

        // Check if anything is returned
        if ($this->db->rowCount() == 0) {
            return true;
        }
    }

    public function removeLike($id)
    {
        $this->db->query('DELETE FROM likes WHERE userid = :userid');
        $this->db->bind(':userid', $id);

        if ($this->db->execute()) {
            return true;
        }
    }

    public function like($data)
    {
        if ($this->checkLikes($data['user_id'])) {
            $this->db->query('INSERT INTO likes(eventid, userid) VALUES(:eventid, :userid)');
            $this->db->bind(':eventid', $data['event_id']);
            $this->db->bind(':userid', $data['user_id']);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        } else {
            $this->removeLike($data['user_id']);
        }
    }

    public function getLikes($eventid)
    {
        $this->db->query('SELECT * from likes WHERE eventid = :eventid');
        $this->db->bind(':eventid', $eventid);

        $row = $this->db->resultSet();
        return $this->db->rowCount();
    }

    // Check if user has already flagged
    public function checkFakes($id)
    {
        $this->db->query('SELECT * FROM fakes where userid = :userid');
        $this->db->bind(':userid', $id);
        $row = $this->db->singleResult();

        // Check if anything is returned
        if ($this->db->rowCount() == 0) {
            return true;
        }
    }

    public function markFake($data)
    {
        if ($this->checkFakes($data['user_id'])) {
            $this->db->query('INSERT INTO fakes(eventid, userid) VALUES(:eventid, :userid)');
            $this->db->bind(':eventid', $data['event_id']);
            $this->db->bind(':userid', $data['user_id']);

            if ($this->db->execute()) {

                return true;
            } else {
                return false;
            }
        } else {
            $this->removeFake($data['user_id']);
        }
    }

    public function getFakes($eventid)
    {
        $this->db->query('SELECT * from fakes WHERE eventid = :eventid');
        $this->db->bind(':eventid', $eventid);

        $row = $this->db->resultSet();
        return $this->db->rowCount();
    }

    public function removeFake($id)
    {
        $this->db->query('DELETE FROM fakes WHERE userid = :userid');
        $this->db->bind(':userid', $id);

        if ($this->db->execute()) {
            return true;
        }
    }

    public function deleteEvent($id)
    {
        $this->db->query('DELETE FROM event WHERE id = :eventid');
        $this->db->bind(':eventid', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function createEvent($data)
    {
        $this->db->query('INSERT INTO event(name, organizer, location, contact, orientation, price, category, image, date, creatorid)
                          VALUES(:name, :organizer, :location, :contact, :orientation, :price, :category, :image, :date, :creatorid)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':organizer', $data['organizer']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind('contact', $data['contact']);
        $this->db->bind(':orientation', $data['orientation']);
        $this->db->bind(':price', $data['price']);
        $this->db->bind('category', $data['category']);
        $this->db->bind(':image', $data['image']);
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':creatorid', $data['creatorid']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
