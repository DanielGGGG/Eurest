<?php
include 'index.view.php';
?>
<head>

    <!-- Zodat alle soorten tekens (letters, cijfers, symbolen) gebruikt kunnen worden -->
    <meta charset="UTF-8">

    <!--De naam van de webpagina-->
    <title>Productoverzicht</title>

    <!-- Instellingen voor hoe de webpagina gerenderd word op verschillende platforms -->
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=0.1, maximum-scale=1.0, minimum-scale=1"
          http-equiv="X-UA-Compatible" content="ie=edge" >

    <!-- Er wordt gebruikt gemaakt van het framework bootstrap-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/Productpaginastyle.css">


</head>

<div class="container container-table">
    <div class="row content">
        <div class="col-md-4 text-center">
            <div class="container">
                <div class="well well-sm">
                    <div>
                        <strong>Alle producten</strong>
                    </div>

                </div>
                <div id="products" class="row list-group">
                    <div class="item  col-xs-12 col-lg-4 col-md-6">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="images/brownies.jpg" alt="" />
                            <div class="caption">
                                <h4 class="group inner list-group-item-heading">
                                    Heerlijke brownies</h4>
                                <p class="group inner beschrijving list-group-item-text">
                                    Heerlijke brownies, echt heel lekker! Een genot voor je buikje! Ik hou van
                                    deze brownies om heel eerlijk te zijn.</p>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <p class="lead">
                                            €2.10</p>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <a class="btn btn-success" href="#">Voeg toe </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-lg-4 col-md-6">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="images/broodje1.jpg" alt="#" />
                            <div class="caption">
                                <h4 class="group inner list-group-item-heading">
                                    Lekker broodje</h4>
                                <p class="group inner beschrijving list-group-item-text">
                                    Best lekker broodje vind ik zelf, maar ja ik kan niet beslissen voor u dus koop hem! Ohja
                                    heb al gezegd dat hij lekker is?</p>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <p class="lead">
                                            €1.50</p>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <a class="btn btn-success" href="#">Voeg toe </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item  col-xs-12 col-lg-4 col-md-6">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="images/cake.jpg" alt="#" />
                            <div class="caption">
                                <h4 class="group inner list-group-item-heading">
                                    Chocolade cake</h4>
                                <p class="group inner beschrijving list-group-item-text">
                                    Man man man deze cake, ik zeg het maar eventjes: H-E-E-R-L-I-J-K. Alleen wel een beetje
                                    veel dus als je deze koopt neem dan ook gelijk wat vrienden mee.</p>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <p class="lead">
                                            €6.70</p>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <a class="btn btn-success" href="">Voeg toe </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xs-12 col-lg-4 col-md-6">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="images/tostis.jpg" alt="#" />
                            <div class="caption">
                                <h4 class="group inner list-group-item-heading">
                                    Lekker warme tosti</h4>
                                <p class="group inner beschrijving list-group-item-text">
                                    Lekker met de beste kaas en ham van de wereld! Oke dat is misschien niet helemaal
                                    waar maar het is wel een zeer lekkere tosti!</p>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <p class="lead">
                                            €1.30</p>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <a class="btn btn-success" href="">Voeg toe </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item  col-xs-12 col-lg-4 col-md-6">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="images/broodje3.jpg" alt="#" />
                            <div class="caption">
                                <h4 class="group inner list-group-item-heading">
                                    Nog een broodje</h4>
                                <p class="group inner beschrijving list-group-item-text">
                                    Jummie</p>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <p class="lead">
                                            €0.90</p>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <a class="btn btn-success" href="">Voeg toe </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item  col-xs-12 col-lg-4 col-md-6">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="images/broodje2.jpg" alt="#" />
                            <div class="caption">
                                <h4 class="group inner list-group-item-heading">
                                    Nog een broodje</h4>
                                <p class="group inner beschrijving list-group-item-text">
                                    Nog een lekker broodje, wie had dat verwacht?</p>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <p class="lead">
                                            €1.60</p>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <a class="btn btn-success" href="">Voeg toe</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



