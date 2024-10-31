<?php include 'head.php'; ?>

<main>
    <h2>PHP Functions</h2>
    <ul>
        <li><strong>What are Functions?</strong> Functions are reusable blocks of code that perform specific tasks. They help in organizing code and avoiding repetition.</li>
        
        <li><strong>Defining a Function:</strong> Use the <code>function</code> keyword to create a function. Example:</li>
        <pre>function greet($name) {
    return "Hello, " . $name;
}</pre>

        <li><strong>Calling a Function:</strong> Invoke a function by using its name followed by parentheses:</li>
        <pre>echo greet("John");</pre>

        <li><strong>Function Parameters:</strong> Functions can take parameters for more flexibility. Example:</li>
        <pre>function add($a, $b) {
    return $a + $b;
}</pre>

        <li><strong>Return Values:</strong> Use the <code>return</code> statement to send a value back to the caller.</li>
        
        <li><strong>Anonymous Functions:</strong> Functions without names, also known as closures. Example:</li>
        <pre>$sum = function($a, $b) {
    return $a + $b;
};</pre>
    </ul>
</main>

<?php include 'footer.php'; ?>