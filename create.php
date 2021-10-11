<!DOCTYPE html>
<html lang="en">
    <?php include('./templates/header.php'); ?>
    
    <section class="container grey-text">
        <h4 class="center">Create your pizza!</h4>
        <form action="" method="" class="white">
            <label for="email">Your Email:</label>
            <input type="email" name="email" id="email">
            <label for="name">Pizza Name:</label>
            <input type="text" name="title" id="title">
            <label for="ingredients">Ingredients (Comma Separated): </label>
            <input type="text" name="ingredients" id="ingredients">
            <div class="center">
                <input type="submit" value="hello" class="btn brand z-depth-0">
            </div>

        </form>

    </section>

    <?php include('templates/footer.php'); ?>
</html>