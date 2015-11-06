<?php

class Massage {

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

}
