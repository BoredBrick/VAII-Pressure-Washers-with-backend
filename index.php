<?php
require "App.php";
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
    <link rel="stylesheet" href="css/style.css" />
      <script type = "text/javascript" src="js/script.js"></script>

      <title>PowerWashers</title>
  </head>
  <body>
  <?php include("header.html") ?>

    <div class="container-fluid shadow main-cont">
      <img id="main-img" src="img/pw-main.jpeg" alt="" />
      <div class="centered">HIGH-PRESSURE CLEANING</div>
      <div class="centered-bottom-text">FOR HOMES AND BUSINESSES</div>
    </div>

    <div class="container-fluid bg-dark text-white text-center p-5">
      <div class="container why-us">
        <h2>Why should you choose us?</h2>
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-3">
            <h3>No worries</h3>
            <p>Don't worry about strenuous cleaning. We will do it for you!</p>
          </div>
          <div class="col-12 col-sm-6 col-lg-3">
            <h3>Honest work</h3>
            <p>We are perfectionists and we will not miss any detail</p>
          </div>

          <div class="col-12 col-sm-6 col-lg-3">
            <h3>Young handy team</h3>
            <p>
              We work efficiently and thanks to you we are constantly improving
            </p>
          </div>

          <div class="col-12 col-sm-6 col-lg-3">
            <h3>We care about you</h3>
            <p>Your satisfaction is our greatest value</p>
          </div>
        </div>
        <hr />
      </div>
      <h2 id="services">Some of our services</h2>
    </div>

    <div
      id="mainCarousel"
      class="carousel slide shadow"
      data-bs-ride="carousel"
    >
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#mainCarousel"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#mainCarousel"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#mainCarousel"
          data-bs-slide-to="2"
          aria-label="Slide 3"
        ></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active slide-1">
          <div class="container-fluid carousel-container ">
            <h2><b>DECK CLEANING</b></h2>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci
              enim dolorem quo officia impedit eveniet corporis, explicabo illo
              consequatur deserunt.
            </p>
          </div>
        </div>

        <div class="carousel-item slide-2">
          <div class="container-fluid carousel-container">
            <h2><b>WALKWAY CLEANING</b></h2>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam
              recusandae distinctio natus, vero accusamus quo hic nemo debitis
              cumque architecto aperiam ipsa similique reiciendis maxime odio
              officia nisi expedita culpa!
            </p>
          </div>
        </div>

        <div class="carousel-item slide-3">
          <div class="container-fluid carousel-container">
            <h2><b>WALL CLEANING</b></h2>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla
              exercitationem nihil voluptatum est ex atque omnis eaque iste
              soluta, nobis facilis ad quidem, explicabo eveniet eius sequi
              necessitatibus fugiat cupiditate vero assumenda hic animi ratione?
            </p>
          </div>
        </div>
      </div>

      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#mainCarousel"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#mainCarousel"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  <?php include("footer.php") ?>

  </body>
</html>
