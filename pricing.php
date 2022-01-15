<?php
session_start();

require "Controller/App.php";
$app = new App();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/pricing.css" />
    <script type = "text/javascript" src="js/map.js"></script>

    <title>PowerWashers</title>
</head>
<body>
<?php
if ($app->loggedIn()) {
    include("header_logged_in.php") ;
} else {
    include("header.php") ;
}
?>

    <div class="container pricing">
      <div class="row">
        <div class="col-12 col-xl-4">
          <div class="card shadow mx-auto mb-5">
            <img
              class="card-img-top img-fluid"
              src="img/stone.jpg"
              alt="Stone tiles"
            />
            <div class="card-block">
              <h4 class="card-title">Stone surfaces</h4>
              <div class="row card-text">
                <div class="col">
                  <p>less than 200m²</p>
                  <p>more than 200m²</p>
                </div>
                <div class="col text-end">
                  <p>1,80€</p>
                  <p>1,60€</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4">
          <div class="card shadow mx-auto mb-5">
            <img
              class="card-img-top img-fluid"
              src="img/asphalt-pavement.jpg"
              alt="Asphalt pavement"
            />
            <div class="card-block">
              <h4 class="card-title">Asphalt pavement</h4>
              <div class="row">
                <div class="col card-text">
                  <p>less than 200m²</p>
                  <p>more than 200m²</p>
                </div>
                <div class="col text-end">
                  <p>2,00€</p>
                  <p>1,80€</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4">
          <div class="card shadow mx-auto mb-5">
            <img
              class="card-img-top img-fluid"
              src="img/shingles.jpg"
              alt="Roof shingles"
            />
            <div class="card-block">
              <h4 class="card-title">Roof shingles</h4>
              <div class="row">
                <div class="col card-text">
                  <p>less than 200m²</p>
                  <p>more than 200m²</p>
                </div>
                <div class="col text-end">
                  <p>1,70€</p>
                  <p>1,50€</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-xl-4">
          <div class="card shadow mx-auto mb-5">
            <img class="card-img-top img-fluid" src="img/wood.jpg" alt="Wood" />
            <div class="card-block">
              <h4 class="card-title">Wood</h4>
              <div class="row">
                <div class="col card-text">
                  <p>less than 200m²</p>
                  <p>more than 200m²</p>
                </div>
                <div class="col text-end">
                  <p>1,70€</p>
                  <p>1,50€</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4">
          <div class="card shadow mx-auto mb-5">
            <img
              class="card-img-top img-fluid"
              src="img/facade.jpg"
              alt="Facade"
            />
            <div class="card-block">
              <h4 class="card-title">Facade</h4>
              <div class="row">
                <div class="col card-text">
                  <p>less than 200m²</p>
                  <p>more than 200m²</p>
                </div>
                <div class="col text-end">
                  <p>2,50€</p>
                  <p>2,20€</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4">
          <div class="card shadow mx-auto mb-5">
            <img
              class="card-img-top img-fluid"
              src="img/interior.jpg"
              alt="Interior"
            />
            <div class="card-block">
              <h4 class="card-title">Interiors</h4>
              <div class="row">
                <div class="col card-text">
                  <p>less than 200m²</p>
                  <p>more than 200m²</p>
                </div>
                <div class="col text-end">
                  <p>2,20€</p>
                  <p>2,00€</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container text-center"><p>All prices are per m²</p></div>
<?php include("footer.php") ?>
  </body>
</html>
