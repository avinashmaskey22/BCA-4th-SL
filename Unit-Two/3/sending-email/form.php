<?php require 'script.php'; ?>

<?php
if (isset($_POST['submit'])) {
    if (empty($_POST['uEmail']) || empty($_POST['uSubject']) || empty($_POST['uMessage'])) {
        $response = "All fields are required.";
    } else {
        $response = sendMail($_POST['uEmail'], $_POST['uSubject'], $_POST['uMessage']);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Sending Email in PHP using PHPMailer and Gmail SMTP Server</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="em">Enter Your Email:</label>
        <input type="email" id="em" name="uEmail">
        
        <br><br>
        
        <label for="sub">Enter a Subject:</label>
        <input type="text" id="sub" name="uSubject">
        
        <br><br>
        
        <label for="msg">Enter Your Message:</label><br>
        <textarea name="uMessage" id="msg" rows="10" cols="40" style="font-family: 'Times New Roman', Times, serif;"></textarea>
        
        <br><br>
        
        <input type="submit" name="submit">
    </form>

    <?php
    if (@$response == "success") {
    ?>
        <p style="color: green;">Email Send Successfully!!</p>
    <?php
    } else {
    ?>
        <p style="color: red;"><?php echo @$response; ?></p>

    <?php
    }
    ?>
</body>

</html>