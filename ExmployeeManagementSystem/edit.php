<?php
// if (isset($_GET["id"]) == FALSE) {
//   // missing an id parameters, so
//   // redirect person back to add employee page
//   header("Location: " . "employees.php");
//   exit();
// }

$id = $_GET["id"];
echo $id;
// @TODO: Your code should show the person's information in the form

// @TODO: your database code should  here
//---------------------------------------------------


//---------------------------------------------------




if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // get items from DATABASE
  $person = [];
  $person["firstName"] = $_POST['firstName'];
  $person["lastName"] = $_POST['lastName'];
  $person["hireDate"] = $_POST['hireDate'];

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
  else {
    echo "in else";
  }

  // @TODO: your database code should go somewhere here
  //---------------------------------------------------
  $sql = "UPDATE employees SET first_name = '" . $person["firstName"] . "', ";
  $sql .= "last_name = '" . $person["lastName"] . "', ";
  $sql .= "hire_date = '" . $person["hireDate"] . "' ";
  $sql .= "WHERE id = " . $id;

  $result = mysqli_query($connection, $sql);
  if ($result == FALSE) {
    echo "Database query failed. <br/>";
    echo "SQL command: " . $sql;
    exit();
  }

  echo $sql;
  //---------------------------------------------------

  // @TODO: delete these two statement after your add your db code
  // echo "I got a POST request! <br />";
  // print_r($_POST);

  mysqli_close($connection);


}
include("header.php");

?>
    <div class="container">
      <div class = "columns">
        <div class="column col-10 col-mx-auto">

          <!-- @TODO: fill in the ACTION and METHOD portions -->
          <form action="<?php echo "edit.php?id=".$id ?>" method="POST" class="form-group">

            <!-- @TODO: fill in the value="" parameters -->
            <label class="form-label" for="firstName">First Name</label>
            <input type="text" name="firstName" value="" />

            <label class="form-label" for="lastName">Last Name</label>
            <input type="text" name="lastName" value="" />

            <label class="form-label" for="hireDate">Hire Date</label>
            <input type="text" name="hireDate" value="" />

            <p>
              <input type="submit" value="Update Employee" />
            </p>
          </form>

          <p>
            <a href="employees.php" class="btn">Go Back</a>
          </p>

        </div> <!--// col-12 -->
      </div> <!-- // column -->
    </div> <!--// container -->

<?php
  include("footer.php");
?>
