<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="process.php" method="POST" enctype="multipart/form-data">

        Image Upload: <input type="file" name="image" required accept="image/*" multiple>

        <br><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>