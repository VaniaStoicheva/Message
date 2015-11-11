<?php

require_once 'message.php';

class DBUtils {

    private $db;

    public function dbConnect($db) {
        $this->bd = $db;
    }

    /* @
     * return arrays of Message objects containing all messages
     */

    public function getAllMessage($db) {
        //old version code
//        $result = $db->query('SELECT * FROM `messages` WHERE 1');
//        $arr = array();
//        while ($row = $result->fetch_assoc()) {
//            $arr[] = $row;
//        }
//        return $arr;
        //prepare statements
        $stmt = $db->prepare('SELECT * FROM `messages` WHERE 1');
        $stmt->execute();
        $stmt->bind_result($id, $author, $subject, $msgDate, $msgBody);
        $arr = array();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return $arr;
    }

    /* @
     * insert a Message object
     */

    public function addMessage($db, $author, $subject, $msgDate, $msgBody) {
        $stmt = $db->prepare('INSERT INTO `messages`(`author`, `subject`, `msgDate`, `msgBody`) VALUES (?,?,?,?)');
        $stmt->bind_param('ssss', $author, $subject, $msgDate, $msgBody);
        if ($stmt->execute()) {
            return true;
        };
        $stmt->close();
    }

    /* @
     * update a message given a Message object to the database
     */

    public function editMessage($db, $author, $subject, $msgDate, $msgBody, $msg_id) {
        $stmt = $db->prepare('UPDATE `messages` SET `author`=?,`subject`=?,`msgDate`=?,`msgBody`=? WHERE id=?');
        $stmt->bind_param('ssssi', $author, $subject, $msgDate, $msgBody, $msg_id);
        if ($stmt->execute()) {
            return true;
        }
        $stmt->close();
    }

    /* @
     * delete given message by id
     */

    public function deleteMessage($db, $msg_id) {
        $stmt = $db->prepare('DELETE FROM `messages` WHERE id=?');
        $stmt->bind_param('i', $msg_id);
        $stmt->execute();
        $stmt->close();
    }

}
