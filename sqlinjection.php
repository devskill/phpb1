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
{
    $name = $_REQUEST["name"];

    $servername = "localhost";
    $database = "phpdemo";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    echo "Connected successfully";
    
    $sql = "INSERT INTO Students (name, is_active) VALUES ('$name', false)";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>