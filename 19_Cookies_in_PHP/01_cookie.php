<!-- //Cookiees:
    //A cookie is a small file that the server embeds on the user's computer.
    
    //Each time the same computer requests a page with a browser, it will send the cookie too.
    
    //Cookies are used to remember information about the user.
    
    //Cookies are stored in the browser and are sent to the server with every request.

    //Cookies are used to store user preferences, login information, and other data.

    //Syntax:

    //setcookie(name, value, expire, path, domain, secure, httponly);

    //name: The name of the cookie.
    //value: The value of the cookie. This value is stored on the user's computer.
    //expire: The expiration date of the cookie. This is a Unix timestamp. If this parameter is not set, the cookie will expire at the end of the session.
    //path: The path to set the cookie for. If not specified, it will be set for the current directory and all subdirectories.
    //domain: The domain to set the cookie for. If not specified, it will be set for the current domain.
    //secure: If set to true, the cookie will only be sent over secure connections (HTTPS).
    //httponly: If set to true, the cookie will only be accessible through the HTTP protocol. This means that JavaScript will not be able to access the cookie.
    //This is a security feature to help prevent XSS attacks. -->

<?php
    // Set cookies (run this part only once, or use different session logic for testing)
    setcookie('name', 'shivam modi', time() + 3600, '/');  // 1 hour expiry
    setcookie('Age', '20', time() + 3600, '/');

    // Now check if cookies are set
    if (isset($_COOKIE['name']) && isset($_COOKIE['Age'])) {
        echo "<br>Cookie Name: " . $_COOKIE['name'] . "<br>";
        echo "Cookie Age: " . $_COOKIE['Age'] . "<br>";
    } else {
        echo "Cookie not set<br>";
    }

    // Delete a cookie (set expiry time to the past)
    setcookie('name', '', time() - 3600, '/');  // Delete cookie by setting expiry to past
    setcookie('Age', '', time() - 3600, '/');  // Delete cookie by setting expiry to past

        // Check if cookies are deleted
    if (!isset($_COOKIE['name']) && !isset($_COOKIE['Age'])) {
        echo "Cookies deleted successfully<br>";
    } else {
        echo "Cookies still exist<br>";
    }
?>
