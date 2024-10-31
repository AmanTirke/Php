<?php include 'head.php'; ?>

<main>
    <h2>PHP Syntax Basics</h2>
    <h3>Variables</h3>
    <p>In PHP, variables start with a `$` symbol, and no declaration is required before using them. PHP variables can store different data types, including strings, integers, and arrays.</p>
    <pre>
    &lt;?php
    $greeting = "Hello, World!";
    echo $greeting;
    ?&gt;
    </pre>

    <h3>Conditional Statements</h3>
    <p>PHP supports common conditional statements, such as `if`, `else`, and `else if`, for controlling the flow of a program based on conditions.</p>
    <pre>
    &lt;?php
    $age = 20;
    if ($age &gt;= 18) {
        echo "You are eligible to vote.";
    } else {
        echo "You are not eligible to vote.";
    }
    ?&gt;
    </pre>

    <h3>Loops</h3>
    <p>PHP supports `for`, `while`, and `foreach` loops for executing code repeatedly based on a condition.</p>
    <pre>
    &lt;?php
    for ($i = 0; $i &lt; 5; $i++) {
        echo "Number: $i &lt;br&gt;";
    }
    ?&gt;
    </pre>
</main>

<?php include 'footer.php'; ?>