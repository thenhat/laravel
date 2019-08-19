<?php
session_start();
?>

<h1>UserName: <?php echo $_SESSION["user"].["username"]?></h1>
<h1>UserName: <?php echo $_SESSION["user"].["password"]?></h1>
