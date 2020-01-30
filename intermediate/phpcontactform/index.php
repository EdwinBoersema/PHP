<?php
    $msg = '';
    $msgClass = '';

    // Check for submit
    if(filter_has_var(INPUT_POST, 'submit')){
        // Get form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // validate required fields
        if(!empty($name) && !empty($email) && !empty($message)) {
            //check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                // failed
                $msg = 'Please use a valid email.';
                $msgClass = 'alert-danger';
            } else {
                // passed
                $toEmail = 'edwinboersema@gmail.com';
                $subject = 'Contact Request From '.$name;
                $body = `<h2>Contact Request</h2>
                    <h4>Name</4><p>"$name"</p>
                    <h4>Email</4><p>"$email"</p>
                    <h4>Message</4><p>"$message"</p>`;
                // Email Headers
                $headers = 'Mime-Version: 1.0' . "\r\n";
                $headers .= "Content-Type:text/html;charset=UTF-8" ."\r\n";

                // Additional Headers
                $headers .= "From: " .$name. "<".$email.">" . "\r\n";

                if(mail($toEmail, $subject, $body, $headers)){
                    // Email Sent
                    $msg = "Your email has been sent";
                    $msgClass = "alert-succes";
                } else {
                    //Failed
                    $msg = "Your email was not sent";
                    $msgClass = "alert-danger";
                }
            }
        } else {
            $msg = 'Please fill in all fields';
            $msgClass = 'alert-danger';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">My Website</a>
        </nav>
    </div>

    <div class="container">
    <?php if($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>"><?php echo 
            $msg; ?>
        </div>
    <?php endif; ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ""; ?>">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ""; ?>">
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ""; ?></textarea>
        </div>
        <br>
        <button class="btn btn-primary" name="submit" type="submit">Sumbit</button>
    </form>
    </div>

</body>

</html>