<?php
  if( $_SERVER[ 'REQUEST_METHOD' ] === "POST" ) {
    $mysqliPointer = new mysqli( "localhost" , "ksbitbusiness" , "ksbitbusiness" , "ksbitbusiness" );
    if( empty( $mysqliPointer ) ) {
      echo "db connection error.";
      exit;
    }

    $Code = $_POST[ 'Code' ];
    $Name = $_POST[ 'Name' ];
    $Continent = $_POST[ 'Continent' ];
    $Region = $_POST[ 'Region' ];
    $SurfaceArea = $_POST[ 'SurfaceArea' ];
    $Population = $_POST[ 'Population' ];
    $LocalName = $_POST[ 'LocalName' ];
    $GovernmentForm = $_POST[ 'GovernmentForm' ];
    $Code2 = $_POST[ 'Code2' ];

    $query = "INSERT INTO country ( Code , Name , Continent , Region , SurfaceArea , Population , LocalName , GovernmentForm , Code2 )";
    $query .= " VALUES ( '$Code' , '$Name' , '$Continent' , '$Region' , $SurfaceArea , $Population , '$LocalName' , '$GovernmentForm' , '$Code2' )";
    $mysqliPointer->query( $query );

    if( $mysqliPointer->error ) {
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
      <h3>country 登録</h3>
      <form method="post" class="row g-3">
        <div class="col-12">
          <label for="Code" class="form-label">Code</label>
          <input type="text" class="form-control" id="Code" name="Code">
        </div>
        <div class="col-12">
          <label for="Name" class="form-label">Name</label>
          <input type="text" class="form-control" id="Name" name="Name">
        </div>
        <div class="col-12">
          <label for="Continent" class="form-label">Continent</label>
          <input type="text" class="form-control" id="Continent" name="Continent">
        </div>
        <div class="col-12">
          <label for="Region" class="form-label">Region</label>
          <input type="text" class="form-control" id="Region" name="Region">
        </div>
        <div class="col-12">
          <label for="SurfaceArea" class="form-label">SurfaceArea</label>
          <input type="text" class="form-control" id="SurfaceArea" name="SurfaceArea">
        </div>
        <div class="col-12">
          <label for="Population" class="form-label">Population</label>
          <input type="text" class="form-control" id="Population" name="Population">
        </div>
        <div class="col-12">
          <label for="LocalName" class="form-label">LocalName</label>
          <input type="text" class="form-control" id="LocalName" name="LocalName">
        </div>
        <div class="col-12">
          <label for="GovernmentForm" class="form-label">GovernmentForm</label>
          <input type="text" class="form-control" id="GovernmentForm" name="GovernmentForm">
        </div>
        <div class="col-12">
          <label for="Code2" class="form-label">Code2</label>
          <input type="text" class="form-control" id="Code2" name="Code2">
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
