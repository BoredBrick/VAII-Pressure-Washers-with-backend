<?php
require "Controller/App.php";
session_start();
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
    <link rel="stylesheet" href="css/about_us.css" />
    <script type = "text/javascript" src="js/map.js"></script>
    <script src="plugins/toast/jquery.toast.min.js""></script>
    <link rel="stylesheet" href="plugins/toast/jquery.toast.min.css"/>

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

    <div class="container about-us">
      <h2>About us</h2>
      <p>
        We are longtime friends and college students. We have visited many
        countries and cities. In many places, terraces, businesses and houses,
        we have noticed that they are dirty, neglected and overgrown with moss.
        We wondered if anything could be done about it. We therefore decided to
        bring to Slovakia a new perspective on cleanliness and care of external
        surfaces.
      </p>
      <p>
        <b>
          Our vision is to return households and businesses to their original
          appearance, cleanliness and value.
        </b>
      </p>
      <p>
        We want to change the view of typical Slovak business.
        <b>
          We want to bring quality, professionalism, care and satisfaction.</b
        >
      </p>
    </div>

    <div class="container reviews text-center">
      <h2>Your reviews</h2>

      <div class="row text-center">
        <div class="col-lg-4">
          <img class="img-fluid review-photo" src="img/review1.jpg" alt="" />
          <p class="reviewer">Daniel</p>
          <p>★★★★★</p>
          <p>
            I just wanted to let you know that your guys pressure washed my tile
            roof yesterday, and they did a great job! The guys were friendly,
            thorough and respectful of my surrounding property. I had you do my
            roof 3 years ago, and I was impressed then at how much better it
            looked. Keep up the good work!
          </p>
        </div>
        <div class="col-lg-4">
          <img class="img-fluid review-photo" src="img/review2.jpg" alt="" />
          <p class="reviewer">Mr. Hankey</p>
          <p>★★★★★</p>
          <p>
            The two individuals from Power Washers were a pleasure to work with.
            They were on time, very thorough and did an excellent job on my
            drive, sidewalks and exterior areas I had requested for power
            washing of my townhome. I would highly recommend Power Washers.
          </p>
        </div>
        <div class="col-lg-4">
          <img class="img-fluid review-photo" src="img/review3.jpg" alt="" />
          <p class="reviewer">Jana</p>
          <p>★★★★★</p>
          <p>
            Hi there, I just wanted to share with you how happy I am with the
            work that Daniel did at my home today. He did a phenomenal job, and
            he was incredibly friendly and polite. My pool screen enclosure was
            a green moldy mess, and now it is sparkling white. The patio was a
            dirty eyesore, and now it is squeaky clean. Thanks again
          </p>
        </div>
      </div>
    </div>

<?php include("footer.php") ?>
  </body>
</html>
