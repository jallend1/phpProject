<?php 
    $conn = mysqli_connect('localhost', 'jallend1', 'mypassword', 'pizza');
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <?php 
        include('./templates/header.php');
        include('./templates/footer.php');
    ?>
</html>