<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


class Connection
{
    private $pdo;

    /**
     * private $productimage;
     * public $productnaam = $_GET["productname"];
     * public $productdescription = $_GET["productdescription"];
     * public $alergics = $_GET["alergics"];
     * public $price = $_GET["price"];
     * */

    public function make()
    {

        try {
            $pdoDriver = "mysql";
            $pdoHost = "mariadb.clow.nl:3306";
            $pdoUser = "s1117723";
            $pdoPassword = "dLYZKryVYe2kJb";
            $pdoDB = "code-runners";
            $this->pdo = new PDO($pdoDriver . ':host=' . $pdoHost . ';dbname=' . $pdoDB, $pdoUser, $pdoPassword);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die($e->getMessage());

        }

    }

    public function selectAllproduct()
    {

        //Run Query
        $sql = 'select * FROM product';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $datas = $stmt->fetchAll();


    }

    public function insertProduct()
    {
        $sql = 'INSERT INTO product(productplaatje,productnaam,productbeschrijving,allergieen,productprijs,bijnaop,op)
        values("' . $_GET["productimage"] . '",
        "' . $_GET["productname"] . '",
        "' . $_GET["description"] . '",
        "' . $_GET["alergics"] . '",
        "' . $_GET["price"] . '",
        0,0 )';


        $this->pdo->exec($sql);
        require 'index.view.php';
        echo '
            <div class="container container-table">
                <div class="row content">
                    <div class="col-md-4 text-center">
                        <div class="container">
                       
                            <div class="col-md-2 col-xs-12">
                              Uw product is succesvol toegevoegd
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
    }
}

$dbh = new Connection();
$dbh->make();
$dbh->insertProduct();