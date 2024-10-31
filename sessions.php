<?php include 'head.php'; ?>

<main>
    <h2>PHP Sessions</h2>
    <ul>
        <li><strong>What are Sessions?</strong> Sessions are a way to store information (in variables) to be used across multiple pages. They are often used to maintain user state.</li>
        
        <li><strong>Starting a Session:</strong> Use the <code>session_start()</code> function to begin a session. Example:</li>
        <pre>session_start();</pre>

        <li><strong>Storing Session Variables:</strong> You can store data in session variables using the <code>$_SESSION</code> superglobal. Example:</li>
        <pre>$_SESSION["username"] = "JohnDoe";</pre>

        <li><strong>Accessing Session Variables:</strong> Retrieve session variables as needed:</li>
        <pre>echo $_SESSION["username"]; // Outputs "JohnDoe"</pre>

        <li><strong>Destroying a Session:</strong> To end a session and delete all session variables, use:</li>
        <pre>session_destroy();</pre>
    </ul>
</main>

<?php include 'footer.php'; ?>
