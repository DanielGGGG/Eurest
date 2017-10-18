<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require 'index.view.php';
require 'Query.php';
$dbh = new Connection();
$dbh->make();

$dbh->removeProduct();

?>


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
                    <?php
                    $items = $dbh->SelectAllproduct();
                    foreach ($items as $item) {

                        if ($item['bijnaop'] == 0) {
                            $status = "Het product is niet op";

                        }
                        if ($item['bijnaop'] == 1) {
                            $status = "Het product is bijna op";

                        }
                        if ($item['op'] == 1) {
                            $status = "Het product is helaas op";
                        }

                        echo '<div class="item  col-xs-12 col-lg-4 col-md-6">
                        <div class="thumbnail">
                            <img class="group list-group-image" src="' . $item['productplaatje'] . '" alt="" />
                            <div class="caption">
                                <h4 class="group inner list-group-item-heading">
                                    ' . $item['productnaam'] . '</h4>
                                <p class="group inner beschrijving list-group-item-text">
                                    ' . $item['productbeschrijving'] . '</p>
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <p class="lead">
                                          € ' . $item['productprijs'] . ' </p>
                                    </div>
                                    <div class="col-xs-6 col-md-6" >
                                        ' . $status . '
                                    </div>
                                    <div class="col-xs-6 col-md-6">
                                        <form method ="get" action="removeproducts.php" >
                                          <input type="submit" name="'.$item['productnaam'].'" value="verwijder">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


