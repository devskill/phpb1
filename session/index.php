<?php
session_start();
?>
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
    if(isset($_COOKIE["devskill_user_location_info"]))
        $info = $_COOKIE["devskill_user_location_info"];
    else
        $_COOKIE["devskill_user_location_info"] = "Country:BD, Lang:Bangla, Time:+6GMT";


    if($_SERVER["REQUEST_METHOD"] == "POST")
        $_SESSION["name"] = $_REQUEST["name"];

    if(isset($_REQUEST["name"]))
        echo "Name from request : " . $_REQUEST['name'] . "<br/>";
    if(isset($_SESSION["name"]))
        echo "Name from session : " . $_SESSION['name'] . "<br/>";
?>
<a href="save.php">Go to save page</a>