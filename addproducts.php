<?php

require 'index.view.php';

?>

<div class="container container-table">
    <div class="row content">
        <div class="col-md-4 text-center">
            <div class="container">
                <form action="addsucces.php" method="get">
                <div class="col-md-2 col-xs-12">
                    <input type="text" name="productname" placeholder="Productnaam">
                </div>
                <div class="col-md-2 col-xs-12">
                    <input type="text" name="description" placeholder="Productbeschrijving">
                </div>
                <div class="col-md-2 col-xs-12 ">
                    <input type="text" name="alergics" placeholder="Allergieën">
                </div>

               <div class="col-md-2 col-xs-12">
                    <input type="text" name="price" placeholder="prijs">
                </div>
                <div class="col-md-2 col-xs-12">
                    <input type="text" name="productimage" placeholder="Link naar afbeelding">
                </div>
                <div class="col-md-2 col-xs-12">
                    <input type="submit">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>






