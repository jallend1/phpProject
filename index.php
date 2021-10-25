<?php 
    $conn = mysqli_connect('localhost', 'jallend1', 'mypassword', 'pizza');
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
    // Write the query for all the pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas';
    // Actually make the query and gets the result
    $result = mysqli_query($conn, $sql);
    // Fetch the results in an arry
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // Frees result from memory
    mysqli_free_result($result);
    // Closes connection
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
    <?php 
        include('./templates/header.php');
        include('./templates/footer.php');
    ?>
</html>