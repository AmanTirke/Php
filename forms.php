<?php include 'head.php'; ?>

<main>
    <h2>PHP Forms</h2>
    <ul>
        <li><strong>Form Basics:</strong> HTML forms collect user input, allowing various field types like text, radio, checkbox, and submit buttons.</li>
        <li><strong>Form Methods:</strong> Use <code>GET</code> for data retrieval (data visible in URL) and <code>POST</code> for data submission (data hidden).</li>
        <li><strong>Accessing Form Data:</strong> Use <code>$_GET</code> and <code>$_POST</code> superglobals to access submitted data. Example: <code>$username = $_POST['username'];</code></li>
        <li><strong>Data Validation:</strong> Validate user inputs to ensure data integrity and security. Check for empty fields, correct formats, and prevent harmful data.</li>
        <li><strong>Example Form:</strong></li>
        <pre>
            &lt;form method="post" action="submit.php"&gt;
                &lt;label for="username"&gt;Username:&lt;/label&gt;
                &lt;input type="text" id="username" name="username" placeholder="Enter your username"&gt;
                &lt;input type="submit" value="Submit"&gt;
            &lt;/form&gt;
        </pre>
    </ul>
</main>

<?php include 'footer.php'; ?>