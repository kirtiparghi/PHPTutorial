<?php
  include("header.php");

  // 1 - Database information
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "cestar";

  // 2 - Connect to the database and handle any connection errors
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  if (mysqli_connect_errno())
  {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
  }

  // 3 - Make the SQL query and send to database
  $query = "SELECT * FROM employees";

  $results = mysqli_query($connection, $query);

  // 4 - Handle the response from database
  if ($results == FALSE) {
    echo "Database query failed. <br/>";
    echo "SQL command: " . $query;
    exit();
  }
?>

    <div class="container">
      <div class = "columns">
        <div class="column col-10 col-mx-auto">
          <a href="addEmployee.php" class="btn"> Add Employee </a>
          <table class="table">
            <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Hire Date</th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
            </tr>

            <!-- we got a results from the database, so put them into the table -->
            <?php while ($employee = mysqli_fetch_assoc($results)) { ?>
              <tr>
                <td><?php echo $employee['id']; ?></td>
                <td><?php echo $employee['first_name']; ?></td>
                <td><?php echo $employee['last_name']; ?></td>
                <td><?php echo $employee['hire_date']; ?></td>
                <td><a class="action" href="<?php echo 'show.php?id=' . $employee['id']; ?>">View</a></td>
                <td><a class="action" href="<?php echo 'edit.php?id=' . $employee['id']; ?>">Edit</a></td>
                <td><a class="action" href="<?php echo 'delete.php?id='. $employee["id"]; ?>">Delete</a></td>
              </tr>
            <?php } ?>
          </table>
        </div> <!--// col-12 -->
      </div> <!-- // column -->
    </div> <!--// container -->
    <?php
      // clean up and close database
      mysqli_free_result($results);
      mysqli_close($connection);

      include("footer.php");
    ?>
