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
            <a class="navbar-brand" href="index.html">GOES</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Latest</a></li>
            <li><a href="mesoscale.html">Mesoscale</a></li>
            <li><a href="METAR.html">METARS</a></li>
            <li><a href="about.html">About</a></li>
          </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <center>
        <h1>GOES 18 live reception and METAR search!</h1>
        </center>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <center>
                <h1>Latest FD FC image</h1>
                <?php
                $dir = '/home/lemon/goes18/';
                $base_url = './fd/fc/2022-11-07';
                $newest_mtime = 0;
                $show_file = 'BROKEN';
                if ($handle = opendir($dir)) {
                    while (false !== ($file = readdir($handle))) {
                        if (($file != '.') && ($file != '..')) {
                            $mtime = filemtime("$dir/$file");
                            if ($mtime > $newest_mtime) {
                                $newest_mtime = $mtime;
                                $show_file = "$base_url/$file";
                            }
                        }
                    }
                }
                print '<img src="' .$show_file. '" alt="Latest FD FC image">';
                ?>
                <img class="img-responsive" src="GOES18_FC.jpg" alt="Latest FC image">
            </center>
        </div>
        <div class="col-sm-6">
            <center>
                <h1>Latest FD image</h1>
                <img class="img-responsive" src="GOES18_FD.jpg" alt="Latest FC image">
            </center>
        </div>
    </div>
</body>
</html>