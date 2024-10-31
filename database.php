<?php include 'head.php'; ?>

<main>
    <h2>PHP Database Integration</h2>
    <p>PHP provides excellent support for connecting with databases, allowing for data storage, retrieval, and management. PHP is most commonly used with MySQL, though it also supports other databases like PostgreSQL and SQLite.</p>

    <h3>Example of MySQL Connection</h3>
    <p>Here's an example of connecting to a MySQL database in PHP:</p>
    <pre>
    &lt;?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "database";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    ?&gt;
    </pre>
</main>

<?php include 'footer.php'; ?>
