<?php
    if(isset($_POST['submit'])){
        if(empty($_POST['email'])){
            echo 'A valid email address is required.';
        }
        else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo 'A valid email address is required.';
            }
            // echo htmlspecialchars($_POST['email']);
        }
        if(empty($_POST['title'])){
            echo 'A title is required.';
        }
        else{
            $title = $_POST['title'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
                echo 'Title must be letter and spaces only.';
            }
        }
        if(empty($_POST['ingredients'])){
            echo 'Pizzas need at least one ingredient, my dude.';
        }
        else{
            $ingredients = $_POST['ingredients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
                echo 'Ingredients must be a comma separated list.';
            };
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <?php include('./templates/header.php'); ?>
    
    <section class="container grey-text">
        <h4 class="center">Create your pizza!</h4>
        <form action="create.php" method="POST" class="white">
            <label for="email">Your Email:</label>
            <input type="text" name="email" id="email" >
            <label for="name">Pizza Name:</label>
            <input type="text" name="title" id="title" >
            <label for="ingredients">Ingredients (Comma Separated): </label>
            <input type="text" name="ingredients" id="ingredients" >
            <div class="center">
                <input type="submit" value="hello" name="submit" class="btn brand z-depth-0">
            </div>

        </form>

    </section>

    <?php include('templates/footer.php'); ?>
</html>