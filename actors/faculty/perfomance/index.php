<!-- <!DOCTYPE html> -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Analysis</title>
    <!-- CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />

    <!-- jQuery and JS bundle w/ Popper.js -->
    <style>
      .bg {
        /* The image used */
        background-image: url("photos/photo.jpg");

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .card {
        background-color: rgba(0, 0, 0, 0.2);
        color: rgb(247, 239, 239);
        font-weight: bold;
      }
    </style>
  </head>

  <body class="container bg">
    <br />

    <h1
      style="
        padding-top: 60px;
        text-align: center;
        color: rgb(247, 239, 239);
        font-size: 40px;
        font-family: Arial, Helvetica, sans-serif;
      "
    >
      Data Analysis
    </h1>
    <br />
    <br />

    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem">
          <div class="card-body">
            <h5 class="card-title">Student perfomance</h5>
            <p class="card-text"></p>
            <a href="std_perf/index.php" class="btn btn-secondary"
              >Click to view</a
            >
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem">
          <div class="card-body">
            <h5 class="card-title">Trends of student Evaluations</h5>
            <p class="card-text"></p>
            <a href="Eval_trends/index.php" class="btn btn-warning">Click to view</a>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem">
          <div class="card-body">
            <h5 class="card-title">Grades in higher level courses</h5>
            <p class="card-text"></p>
            <a href="future_grades/index.php" class="btn btn-info">Click to view</a>
          </div>
        </div>
      </div>
    </div>
    <br />
    </div>
  </body>

  <script
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"
  ></script>
</html>
