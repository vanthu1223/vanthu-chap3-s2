<?php 
require "templates/header.php" ?>
<ul class="list-group">
<?php
   // YOUR CODE HERE
?>
    <li class="list-group-item"><?php 
    if(isset($_POST["username"])){
        echo $_POST["username"];
    }
     ?></li>
    <li class="list-group-item"><?php 
    if(isset($_POST["email"])){
        echo $_POST["email"];
    }
     ?></li>
    <li class="list-group-item"><?php 
    if(isset($_POST["password"])){
        echo $_POST["password"];
    }
     ?></li>
    <li class="list-group-item"><?php 
    if(isset($_POST["number"])){
        echo $_POST["number"];
    }
     ?></li>
    <li class="list-group-item"><?php 
    if(isset($_POST["message"])){
        echo $_POST["message"];
    }
     ?></li>

</ul>
<?php require "templates/footer.php"?>