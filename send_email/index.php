<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include 'links.php';
    ?>
    <title>Send Email</title>
</head>

<body>
    <div class="container my-5">
        <h1 class="mb-3">Contact Us</h1>
        <form method="POST" action="send_email.php">
            <input class="form-control mb-4" type="text" name="name" placeholder="Enter name">
            <input class="form-control mb-4" type="email" name="email" placeholder="Enter email">
            <input class="form-control mb-4" type="text" name="phone" placeholder="Enter phone">

            <button class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>


</body>

</html>