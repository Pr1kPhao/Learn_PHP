<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>php dog shit</title>
</head>
<body>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    Name : <input type="text" name="fname">
    <input type="submit">
</form>
    <?php
//  1. Indexed Arrays
//  2. Assciative Arrays
//  3. Multidimensional Arrays
    $cars = array("BMW" => "1m", "Ford" => "2m", "Honda" => "3m");
    
    foreach($cars as $name => $value)

    // $cars = ["BMW"] = "1m";
    // $cars = ["Ford"] = "2m";
    // $cars = ["Honda"] = "3m";
// PHP Super global variables
    /**
     * $GLOBALS
     * $_SERVER
     * $_REQUEST
     * $_POST
     * $_GET
     * $_FILES
     * $_ENV
     * $_COOKIE
     * $_SESSION
     */


  /**$x = 10;
     $y = 5;

     function addition (){
        $GLOBALS ['z'] = $GLOBALS ['x'] + $GLOBALS ['y'];
     }

     addition();
     echo $z;*/

/**echo $_SERVER ['PHP_SELF'];
echo "<br>";
echo $_SERVER ['SERVER_NAME'];
echo "<br>";
echo $_SERVER ['HTTP_HOST'];
echo "<br>";
echo $_SERVER ['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER ['SCRIPT_NAME'];
echo "<br>";*/

if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST ['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}

?>
</body>
</html>