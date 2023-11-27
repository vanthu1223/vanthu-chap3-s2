<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
  
    ?>
        <tr>
            <td><?php 
            if(isset($_POST["username"])){
                echo $_POST["username"];
            }
            ?></td>
            <td><?php 
             if(isset($_POST["email"])){
                echo $_POST["email"];
            }
             ?></td>
            <td><?php 
             if(isset($_POST["password"])){
                echo $_POST["password"];
            }
             ?></td>
            <td><?php 
             if(isset($_POST["number"])){
                echo $_POST["number"];
            } ?></td>
            <td><?php
             if(isset($_POST["message"])){
                echo $_POST["message"];
            }
             ?></td>
            <td><?php 
             if(isset($_POST["province"])){
                echo $_POST["province"];
            } ?></td>
            <td>
                <?php 
                    if(isset($_POST["checkbox"])){
                        foreach($_POST["checkbox"] as $subject){
                            echo $subject. "\t";
                        }
                    }
                ?>
            </td>
            <td><?php 
             if(isset($_POST["gender"])){
                echo $_POST["gender"];
            }
             ?></td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>