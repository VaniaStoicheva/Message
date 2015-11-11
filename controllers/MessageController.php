<?php

class MessageController extends BaseController
{
    private $db;
    public function onInit() {
        $this->title='Messages';
        $this->db=new MessageModel($id, $author, $subject, $msgDate, $msgBody);
    }
function index() {
    $this->getAllMessage();
    $this->renderView();
}
    public function getAllMessage(){
        $this->db->getAllMessage();
    }
    public function deleteMessage($id){
        
    }
}
