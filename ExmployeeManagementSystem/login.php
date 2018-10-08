<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/spectre.min.css">
    <link rel="stylesheet" href="css/spectre-exp.min.css">
    <link rel="stylesheet" href="css/spectre-icons.min.css">
  </head>
  <body>
    <header>
      <h1> LOGIN PAGE </h1>
    </header>
  <body>

    <div class="container">
      <div class="columns">
        <div class="column col-10 col-mx-auto">

          <!-- @TODO: Fil in the ACTION and METHOD -->
          <form action="employees.php" method="POST" class="form-group">

            <label class="form-label" for="firstName">Email ID</label>
            <input type="text" name="emailid" value="" />
          
            <label class="form-label" for="password">Password</label>
            <input type="text" name="password" value="" />

            <p>
              <input type="submit" value="SUBMIT" />
            </p>
          </form>


        </div> <!--//col-10-->
      </div> <!--//columns -->
    </div> <!--// container -->

  </body>
</html>

