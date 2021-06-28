<?php
  if( $_SERVER[ 'REQUEST_METHOD' ] === "POST" ) {
    $mysqliPointer = new mysqli( "localhost" , "ksbitbusiness" , "ksbitbusiness" , "ksbitbusiness" );
    if( empty( $mysqliPointer ) ) {
      echo "db connection error.";
      exit;
    }

    $CountryCode = $_POST[ 'CountryCode' ];
    $Language = $_POST[ 'Language' ];
    $IsOfficial = $_POST[ 'IsOfficial' ];
    $Percentage = $_POST[ 'Percentage' ];

    $query = "INSERT INTO countrylanguage ( CountryCode , Language , IsOfficial , Percentage )";
    $query .= " VALUES ( '$CountryCode' , '$Language' , '$IsOfficial' , $Percentage )";
    $mysqliPointer->query( $query );

    if( $mysqliPointer->error ) {
      echo $query;
      echo $mysqliPointer->error;
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>MySQL Sample Database Demo</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Database List</a>
      </div>
    </nav>
    <div class="container">
      <h3>countrylanguage 登録</h3>
      <form method="post" action="#"class="row g-3">
        <div class="col-12">
          <label for="CountryCode" class="form-label">CountryCode</label>
          <input type="text" class="form-control" id="CountryCode" name="CountryCode">
        </div>
        <div class="col-12">
          <label for="Language" class="form-label">Language</label>
          <input type="text" class="form-control" id="Language" name="Language">
        </div>
        <div class="col-12">
          <label for="IsOfficial" class="form-label">IsOfficial</label>
          <input type="text" class="form-control" id="IsOfficial" name="IsOfficial">
        </div>
        <div class="col-12">
          <label for="Percentage" class="form-label">Percentage</label>
          <input type="text" class="form-control" id="Percentage" name="Percentage">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-info">
            登録
          </button>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
