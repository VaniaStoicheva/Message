<?php

class MessageModel extends BaseModel{
    private $id = 0;
    private $author = '';
    private $subject = '';
    private $msgDate = '';
    private $msgBody = '';

    public function __construct($id, $author, $subject, $msgDate, $msgBody) {
        $this->setId($id);
        $this->setAuthor($author);
        $this->setSubject($subject);
        $this->setMsgDate($msgDate);
        $this->setMsgBody($msgBody);
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function setMsgDate($msgDate) {
        $this->msgDate = $msgDate;
    }

    public function getMsgDate() {
        return $this->msgDate;
    }

    public function setMsgBody($msgBody) {
        $this->msgBody = $msgBody;
    }

    public function getMsgBody() {
        return $this->msgBody;
    }

    public function messages() {
        return $msg = $this->getId() . '/' . $this->getAuthor() . '/' . $this->getSubject() . '/'
                . $this->getMsgDate() . '/' . $this->getMsgBody() . '<br/>';
    }

    public function getAllMessage(){
        $stmt =  self::$db->prepare('SELECT * FROM `messages` WHERE 1');
        $stmt->execute();
        $stmt->bind_result($id, $author, $subject, $msgDate, $msgBody);
        $arr = array();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $arr[] = $row;
        }
        return $arr;
    }
    public function deleteMessage($msg_id) {
        $stmt = self::$db->prepare('DELETE FROM `messages` WHERE id=?');
        $stmt->bind_param('i', $msg_id);
        $stmt->execute();
        $stmt->close();
    }
}

