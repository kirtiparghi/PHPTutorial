<?php
  include("header.php");
?>

<div class="container">
  <div class="column">
    <div class="column col-10 col-mx-auto">
      <?php
            if (isset($_GET["id"]) == FALSE) {
              echo "<p>ID is missing </p>";
            }
            else {
              // get the id from the URL
              $id = $_GET["id"];

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
              $sql = "SELECT id, first_name, last_name, hire_date FROM employees where id=" . $id;
              $result = mysqli_query($connection, $sql);

              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
                  }
              }
              //---------------------------------------------------

            }
          ?>
          <p>
            <a href="employees.php" class="btn">Go Back</a>
          </p>
    </div>
  </div>
</div>
<?php
  include("footer.php");
?>
