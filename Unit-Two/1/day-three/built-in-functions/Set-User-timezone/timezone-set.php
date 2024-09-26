<?php

if (isset($_COOKIE['user_timezone'])) {
    $user_timezone = $_COOKIE['user_timezone'];
    date_default_timezone_set($user_timezone);
} else {
    //we can set default timezone if the user's cookie is not set
    date_default_timezone_set('Asia/Tokyo');
}

/* 
Note: This code checks if a cookie named user_timezone has been set 
      by the browser. The cookie stores the user's detected timezone.
*/
?>

<html>
<head>
    <title>Timezone Example</title>
    <script src="timezone.js"></script>
</head>
<body>
    <h1>Current Date and Time in Your Timezone</h1>
    <p>
        <?php
        // This code displays the current date and time in the user's timezone
        echo "The current time is: " . date('Y-m-d H:i:s'); 
        ?>
    </p>
</body>
</html>
