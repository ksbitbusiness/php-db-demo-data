<?php
  $mysqliPointer = new mysqli( "localhost" , "ksbitbusiness" , "ksbitbusiness" , "ksbitbusiness" );
  if( empty( $mysqliPointer ) ) {
    echo "db connection error.";
    exit;
  }

  $query = "SELECT ID , Name , CountryCode , District , Population FROM city ORDER BY RAND() LIMIT 0 , 10";
  $result_city = $mysqliPointer->query( $query );

  $query = "SELECT Code , Name , Continent , Region , SurfaceArea , IndepYear , Population , LocalName , HeadOfState , Capital , Code2 FROM country ORDER BY RAND() LIMIT 0 , 10";
  $result_country = $mysqliPointer->query( $query );

  $query = "SELECT CountryCode , Language , IsOfficial , Percentage FROM countrylanguage ORDER BY RAND() LIMIT 0 , 10";
  $result_countrylanguage = $mysqliPointer->query( $query );
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
      <h3>city</h3>
      <table class="table table-primary">
        <thead>
          <th>ID</th>
          <th>Name</th>
          <th>CountryCode</th>
          <th>District</th>
          <th>Population</th>
        </thead>
        <tbody>
          <?php while( $row = $result_city->fetch_assoc() ) { ?>
            <tr>
              <td><?php echo $row[ 'ID' ]; ?></td>
              <td><?php echo $row[ 'Name' ]; ?></td>
              <td><?php echo $row[ 'CountryCode' ]; ?></td>
              <td><?php echo $row[ 'District' ]; ?></td>
              <td><?php echo $row[ 'Population' ]; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="container">
      <h3>country</h3>
      <table class="table table-secondary">
        <thead>
          <th>Code</th>
          <th>Name</th>
          <th>Continent</th>
          <th>Region</th>
          <th>SurfaceArea</th>
          <th>IndepYear</th>
          <th>Population</th>
          <th>LocalName</th>
          <th>HeadOfState</th>
          <th>Capital</th>
          <th>Code2</th>
        </thead>
        <tbody>
          <?php while( $row = $result_country->fetch_assoc() ) { ?>
            <tr>
              <td><?php echo $row[ 'Code' ]; ?></td>
              <td><?php echo $row[ 'Name' ]; ?></td>
              <td><?php echo $row[ 'Continent' ]; ?></td>
              <td><?php echo $row[ 'Region' ]; ?></td>
              <td><?php echo $row[ 'SurfaceArea' ]; ?></td>
              <td><?php echo $row[ 'IndepYear' ]; ?></td>
              <td><?php echo $row[ 'Population' ]; ?></td>
              <td><?php echo $row[ 'LocalName' ]; ?></td>
              <td><?php echo $row[ 'HeadOfState' ]; ?></td>
              <td><?php echo $row[ 'Capital' ]; ?></td>
              <td><?php echo $row[ 'Code2' ]; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="container">
      <h3>countrylanguage</h3>
      <table class="table table-info">
        <thead>
          <th>CountryCode</th>
          <th>Language</th>
          <th>IsOfficial</th>
          <th>Percentage</th>
        </thead>
        <tbody>
          <?php while( $row = $result_countrylanguage->fetch_assoc() ) { ?>
            <tr>
              <td><?php echo $row[ 'CountryCode' ]; ?></td>
              <td><?php echo $row[ 'Language' ]; ?></td>
              <td><?php echo $row[ 'IsOfficial' ]; ?></td>
              <td><?php echo $row[ 'Percentage' ]; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>

