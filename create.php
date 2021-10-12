<?php
    if(isset($_POST['submit'])){
        if(empty($_POST['email'])){
            echo 'A valid email address is required.';
        }
        else{
            echo htmlspecialchars($_POST['email']);
        }
        if(empty($_POST['title'])){
            echo 'A title is required.';
        }
        else{
            echo htmlspecialchars($_POST['title']);
        }
        if(empty($_POST['ingredients'])){
            echo 'Pizzas need at least one ingredient, my dude.';
        }
        else{
            echo htmlspecialchars($_POST['ingredients']);
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
            <input type="email" name="email" id="email" >
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