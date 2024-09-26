// This code access the users local timezone who resides in any part of the world
var userTimezone = Intl.DateTimeFormat().resolvedOptions().timeZone;

// This code sets the timezone in a cookie if it hasn't been set already
if (document.cookie.indexOf('user_timezone') === -1) {
    document.cookie = "user_timezone=" + userTimezone + "; path=/";
    location.reload();
}

/* 
   Note: The location.reload() or page reload allows PHP to detect the cookie and 
   apply the user's timezone. Now, in our case "user_timezone" cookie will be available 
   to PHP on the server side
*/
