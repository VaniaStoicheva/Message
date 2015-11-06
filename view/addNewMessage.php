<?php
require_once '../html/header.php';
require_once '../class/message.php';
require_once '../class/db-utils.php';
require_once '../class/config.php';
?>
<form method="post">
    <label>Автор</label>
    <input type="text" name='author'/><br/>
    <label>Категория</label>
    <input type="text" name='subject'/><br/>
    <label>date</label>
    <input type="text" name='msgDate'/><br/>
    <label>Коментар</label>
    <textarea cols="10" rows="3" name="msgBody"></textarea><br/>
    <input type="submit" name='add' value='Добави коментар'/>
</form>
<a href='../index.php'>Начало</a>
<?php
if(isset($_POST['author'])&& isset($_POST['subject']) && isset($_POST['msgDate']) && isset($_POST['msgBody'])){
$board=new DBUtils();

    $author=  mysqli_real_escape_string($db,$_POST['author']);
    $subject=  mysqli_real_escape_string($db,$_POST['subject']);
    $msgDate=  mysqli_real_escape_string($db,$_POST['msgDate']);
    $msgBody=  mysqli_real_escape_string($db,$_POST['msgBody']);
    if($board->addMessage($db, $author, $subject, $msgDate, $msgBody)){
   echo '<p>Записа е добавен успешно</p>';
}
} 
