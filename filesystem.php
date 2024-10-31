<?php include 'head.php'; ?>

<main>
    <h2>PHP File System</h2>
    <ul>
        <li><strong>What is the File System?</strong> The file system allows you to read, write, and manage files on the server using PHP.</li>
        
        <li><strong>Opening a File:</strong> Use the <code>fopen()</code> function to open a file. Example:</li>
        <pre>$file = fopen("example.txt", "r");</pre>

        <li><strong>Reading a File:</strong> Use <code>fread()</code> or <code>fgets()</code> to read data from a file:</li>
        <pre>$content = fread($file, filesize("example.txt"));</pre>

        <li><strong>Writing to a File:</strong> Use <code>fwrite()</code> to write data to a file. Example:</li>
        <pre>$file = fopen("example.txt", "w");</pre>
        <pre>fwrite($file, "Hello, World!");</pre>

        <li><strong>Closing a File:</strong> Always close the file using <code>fclose()</code>:</li>
        <pre>fclose($file);</pre>
        
        <li><strong>Checking File Existence:</strong> Use <code>file_exists()</code> to check if a file exists. Example:</li>
        <pre>if (file_exists("example.txt")) { echo "File exists."; }</pre>
    </ul>
</main>

<?php include 'footer.php'; ?>
