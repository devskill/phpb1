<html>
    <body>
        <h1>Form</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="text" name="name"/>
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
        echo $_REQUEST["name"];
?>