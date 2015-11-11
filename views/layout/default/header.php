<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php if(isset($title)) echo htmlspecialchars($this->title);?></title>
    </head>
    <body>
        <ul>
            <li><a href="/">Home</a></li>
            <?php if($this->isLogedIn):?>
            <li><a href="/message">Messages</a></li>
              </ul>
            <div>
                <span>Hello ,<?php echo $_SESSION['username'];?></span>
            </div>
        <form action="/account/logout">
            <input type="submit" value="Logout"/>
        </form>
            <?php endif;?>
        <div id="text"><?php include 'message.php';?></div> 