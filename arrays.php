<?php include 'head.php'; ?>

<main>
    <h2>PHP Arrays</h2>
    <ul>
        <li><strong>Indexed Arrays:</strong> Use numeric indexes to store multiple values. Example:
            <pre>$colors = array("Red", "Green", "Blue");</pre>
        </li>

        <li><strong>Associative Arrays:</strong> Use named keys instead of numbers. Example:
            <pre>$ages = array("John" => 25, "Doe" => 30);</pre>
        </li>

        <li><strong>Multidimensional Arrays:</strong> Contain other arrays. Example:
            <pre>$students = array(array("John", 25), array("Doe", 30));</pre>
        </li>

        <li><strong>Array Functions:</strong> PHP provides many built-in functions for arrays, such as 
            <pre>array_push()</pre>, 
            <pre>array_pop()</pre>, and 
            <pre>count()</pre>.
        </li>
        
        <li><strong>Array Sorting:</strong> Use functions like 
            <pre>sort()</pre> for sorting indexed arrays and 
            <pre>asort()</pre> for sorting associative arrays by values.
        </li>
        
        <li><strong>Looping Through Arrays:</strong> Use loops (e.g., 
            <pre>foreach</pre>) to iterate over array elements for processing or display.
        </li>
    </ul>
</main>

<?php include 'footer.php'; ?>