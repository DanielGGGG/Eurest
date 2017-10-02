<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- (no zoom no phone) <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
    <title>index.view</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
<div>
<div class="background-img">
    <img class="background-img" src="images/BlueCurves.jpg" alt="header" position="top" width="150%">
</div>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Merk and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class="merk img-rounded" src="images/eurest.jpg" alt="eurest">
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!--<li <img class="topnav-icons fa fa-home w3-left w3-bar-item w3-button" href="#" src="images\homeicon.jpeg" alt="home" height="20%" width="20%" align="middle"> </li> -->
                    <li><img class="homeicon" href="#" src="images\homeicon.png" alt="home"></li>
                    <li><a href="#">eerstelink<span class="sr-only">(current)</span></a></li>
                    <li><a href="#">tweedelink</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown? <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">link 1</a></li>
                            <li><a href="#">link 2</a></li>
                            <li><a href="#">link 3</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">losse link</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Inloggen</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
</div>

</body>