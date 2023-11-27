<?php require "templates/header.php" ?>
<?php
    // YOUR CODE HERE 
?>
    <div class="alert alert-secondary">
        <strong>Color: </strong> <span><?php 
        if(isset($_POST["color"])){
            echo $_POST["color"];
        }
         ?></span>
    </div>
    <div class="alert alert-info">
        <strong>Range: </strong> <span><?php 
        if(isset($_POST["range"])){
            echo $_POST["range"];
        } ?></span>
    </div>
    <div class="alert alert-danger">
        <strong>Date: </strong> <span><?php 
        if(isset($_POST["date"])){
            echo $_POST["date"];
        }?></span>
    </div>

<?php require "templates/footer.php" ?>