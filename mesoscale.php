<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>GOES live reception!</title>
    <link rel="icon" href="icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-custom">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">GOES</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">Latest</a></li>
            <li class="active"><a href="mesoscale.php">Mesoscale</a></li>
            <li><a href="METAR.php">METARS</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <center>
        <h1>GOES 18 Latest FC Mesoscale images</h1>
        </center>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <center>
                <h1>Mesoscale 1</h1>
                <img class="img-responsive" src="GOES18_M1.jpg" alt="Latest FC image">
            </center>
        </div>
        <div class="col-sm-6">
            <center>
                <h1>Mesoscale 2</h1>
                <img class="img-responsive" src="GOES18_M2.jpg" alt="Latest FC image">
            </center>
        </div>
    </div>
</body>
</html>