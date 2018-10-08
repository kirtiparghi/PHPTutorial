<?php
  if (isset($_GET["id"]) == FALSE) {
    // missing an id parameters, so
    // redirect person back to add employee page
    header("Location: " . "employees.php");
    exit();
  }

  // save the ID so you can use it later
  $id = $_GET["id"];

  // check for a POST request
  if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // @TODO: your database code should  here
    //---------------------------------------------------
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



    // @TODO: your database code should go somewhere here
    //---------------------------------------------------
    $sql = "DELETE FROM employees where id=" . $id;
    $result = mysqli_query($connection, $sql);

        echo "employee is deleted";


    //---------------------------------------------------

    // @TODO: delete these two statements after you are done adding your database code
    //echo "I got a POST request! <br/>";
    print_r($_POST);
  }
include("header.php");
?>
    <div class="container">
      <div class = "columns">
        <div class="column col-10 col-mx-auto">

          <!-- @TODO: Ask user to confirm they want to get delete a person! -->


        </div> <!--// col-12 -->
      </div> <!-- // column -->
    </div> <!--// container -->
<?php include("footer.php");?>
