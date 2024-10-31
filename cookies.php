<?php include 'head.php'; ?>

<main>
    <h2>PHP Cookies</h2>
    <ul>
        <li><strong>What are Cookies?</strong> Cookies are small files stored on the user's computer by the web browser while browsing a website. They are used to remember information about the user.</li>
        
        <li><strong>Setting Cookies:</strong> Use the <code>setcookie()</code> function to create a cookie. Example:</li>
        <pre>setcookie("username", "JohnDoe", time() + (86400 * 30), "/");</pre>

        <li><strong>Accessing Cookies:</strong> Access cookie values through the <code>$_COOKIE</code> superglobal. Example:</li>
        <pre>echo $_COOKIE["username"];</pre>

        <li><strong>Deleting Cookies:</strong> To delete a cookie, set its expiration date to a past time:</li>
        <pre>setcookie("username", "", time() - 3600, "/");</pre>
        
        <li><strong>Cookie Security:</strong> Always be cautious with sensitive information. Use secure flags and HTTP-only attributes to enhance security.</li>
    </ul>
</main>

<?php include 'footer.php'; ?>
