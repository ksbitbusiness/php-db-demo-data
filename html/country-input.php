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
      <form class="row g-3">
        <div class="col-12">
          <label for="Code" class="form-label">Code</label>
          <input type="text" class="form-control" id="Code">
        </div>
        <div class="col-12">
          <label for="Name" class="form-label">Name</label>
          <input type="text" class="form-control" id="Name">
        </div>
        <div class="col-12">
          <label for="Continent" class="form-label">Continent</label>
          <input type="text" class="form-control" id="Continent">
        </div>
        <div class="col-12">
          <label for="Region" class="form-label">Region</label>
          <input type="text" class="form-control" id="Region">
        </div>
        <div class="col-12">
          <label for="SurfaceArea" class="form-label">SurfaceArea</label>
          <input type="text" class="form-control" id="SurfaceArea">
        </div>
        <div class="col-12">
          <label for="Population" class="form-label">Population</label>
          <input type="text" class="form-control" id="Population">
        </div>
        <div class="col-12">
          <label for="LocalName" class="form-label">LocalName</label>
          <input type="text" class="form-control" id="LocalName">
        </div>
        <div class="col-12">
          <label for="GovernmentForm" class="form-label">GovernmentForm</label>
          <input type="text" class="form-control" id="GovernmentForm">
        </div>
        <div class="col-12">
          <label for="Code2" class="form-label">Code2</label>
          <input type="text" class="form-control" id="Code2">
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
