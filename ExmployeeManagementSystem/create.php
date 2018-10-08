<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Get the form values that were sent by addEmployee.php
  $first = $_POST['firstName'];
  $last = $_POST['lastName'];
  $hire = $_POST['hireDate'];

  // @TODO: your database code should  here
  //---------------------------------------------------
  // Credentials
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "cestar";

  // 1. Create a database connection
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  // show an error message if PHP cannot connect to the database
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }


//INSERT INTO `employees` (`id`, `first_name`, `last_name`, `hire_date`) VALUES ('2', 'sss', 'www', '2017-08-07');
  // 2. Perform database query (INSERT DATA IN TABLE)
  $sql = "INSERT INTO employees";
  $sql .= "(first_name,last_name,hire_date)";
  $sql .= "VALUES ";
  $sql .= "(";
  $sql .= "'" . $first . "', ";
  $sql .= "'" . $last . "', ";
  $sql .= "'" . $hire . "'";
  $sql .= ")";

  echo $sql . "<br/>";

  $results = mysqli_query($connection, $sql);

  if ($results == TRUE) {
    echo "<h1> Succeess! </h1>";
  }
  else {
    echo "Database query failed. <br/>";
    echo "SQL command: " . $query;
    exit();
  }

  // 4. Release returned data
//  mysqli_free_result($results);

  // 5. Close database connection
  mysqli_close($connection);

  //---------------------------------------------------

  // @TODO: delete these two statement after your add your db code
  echo "I got a POST request! <br />";
  print_r($_POST);


} else {

  // you got a GET request, so
  // redirect person back to add employee page
  header("Location: " . "addEmployee.php");
  exit();
}
?>
