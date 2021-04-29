<html>
<head>
<title>Hello World</title>
</head>
<body>
Hello, World
<?php
    // You can comment like this, single line comment
    # or you can comment like this
    /*
     * This is how you do multiple line comments, same as Java 
     */

    # this file is saved as index so browsers automatically 
    # open as the home page
    echo "Test PHP";

?>
<!-- method="post" post the data to process.php-->
<form action="process.php" method="post">
Enter your name<input name="name" type="text">
    <input type="submit">
</form>
</body>

</html>
