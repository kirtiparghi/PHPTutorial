<?php
  include("header.php");
?>
    <div class="container">
      <div class="columns">
        <div class="column col-10 col-mx-auto">


          <!-- the form to add a new employee -->
          <form action="create.php" method="POST" class="form-group">

            <label class="form-label" for="firstName">First Name</label>
            <input type="text" name="firstName" value="" />


            <label class="form-label" for="lastName">Last Name</label>
            <input type="text" name="lastName" value="" />

            <label class="form-label" for="hireDate">Hire Date</label>
            <input type="text" name="hireDate" value="" />

            <p>
              <input type="submit" value="Create Employee" />
            </p>
          </form>

          <a href="employees.php" class="btn">Go Back </a>

        </div> <!--//col-10-->
      </div> <!--//columns -->
    </div> <!--// container -->
<?php include("footer.php")?>
