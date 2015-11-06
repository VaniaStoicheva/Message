
<?php

$title = 'MessageBoard';
require_once 'html/header.php';
require_once 'class/db-utils.php';
require_once 'class/config.php';

$board = new DBUtils();
$row = $board->getAllMessage($db);
require_once 'view/viewAllMessage.php';

if (isset($_GET['delete'])) {
    $msg_id = (int) mysqli_real_escape_string($db, $_GET['delete']);
    $rowToDelete = $board->deleteMessage($db, $msg_id);
}
echo '<br/><a href="view/addNewMessage.php?">Добави нов коментар</a>';

require_once 'html/footer.php';


