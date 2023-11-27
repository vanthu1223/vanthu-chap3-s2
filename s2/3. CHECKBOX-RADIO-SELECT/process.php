<?php require "templates/header.php" ?>
<?php
// YOUR CODE HERE
?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php
            if (isset($_POST["option"])) {
                echo $_POST["option"];
            }
             ?></h2>
        </div>
    </div>
    <div class="card mb-3">
    <div class="card-header">Gender</div>
    <div class="card-body">
        <?php 
        if (isset($_POST["gender"])) {
            if ($_POST["gender"] === "Female") {
                echo '<img src="images/female.png" alt="Female">';
            } else {
                echo '<img src="images/male.png" alt="Male">';
            }
        }
        ?> 
    </div>
</div>
<div class="card">
    <div class="card-header">Subject</div>
    <div class="card-body">
        <?php
        if (isset($_POST["checkbox"])) {
            foreach ($_POST["checkbox"] as $subject) {
                echo $subject . "<br>";
            }
        }
        ?>
    </div>
</div>

<?php require "templates/footer.php" ?>