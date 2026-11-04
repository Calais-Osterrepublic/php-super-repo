<?php 
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // recieve email if submitted
        $email = trim(htmlspecialchars($_POST['email']));

        // use of filter_var
        if (empty($email)) {
            $error = "Nothing was submitted";
        }
        elseif (filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = "Thank you. A confirmation will be sent to " . $email;
        }
        else {
            $error = $email . " is not a valid email address";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

</head>
<body>
    <form method="POST" action="register.php">
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        <?php if (isset($error)):?>
            <p><?= $error ?></p>
        <?php endif;?>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>