<?php include 'head.php'; ?>

<main>
    <h2>PHP String Handling</h2>
    <ul>
        <li><strong>What are Strings?</strong> Strings are sequences of characters used to represent text in PHP.</li>
        
        <li><strong>Creating Strings:</strong> You can create strings using single or double quotes. Example:</li>
        <pre>$string1 = 'Hello';</pre>
        <pre>$string2 = "World";</pre>

        <li><strong>String Concatenation:</strong> Use the <code>.</code> operator to combine strings. Example:</li>
        <pre>$greeting = $string1 . ' ' . $string2;</pre>

        <li><strong>String Length:</strong> Use the <code>strlen()</code> function to get the length of a string. Example:</li>
        <pre>$length = strlen($greeting);</pre>

        <li><strong>String Functions:</strong> PHP provides many functions for string manipulation, such as <code>strtoupper()</code> to convert to uppercase and <code>strtolower()</code> for lowercase.</li>

        <li><strong>Substrings:</strong> Use <code>substr()</code> to extract parts of a string. Example:</li>
        <pre>$part = substr($greeting, 0, 5); // Outputs "Hello"</pre>
    </ul>
</main>

<?php include 'footer.php'; ?>
