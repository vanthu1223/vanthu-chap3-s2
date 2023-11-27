<?php require_once 'templates/header.php' ?>
<?php

$colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
?>

<div class="card">
    <div class="card-body">
        <?php
        if(isset($_POST["checkbox"])){
            foreach($_POST["checkbox"] as $subject){
                $random = $colors[array_rand($colors)];
                echo '<button class="btn btn-'.$random.'">'.$subject.'</button>';
            }
        }
        ?>
    </div>
</div>

<?php require_once 'templates/footer.php' ?>