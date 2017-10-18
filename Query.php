<?php
/**
 * Created by PhpStorm.
 * User: ko
 * Date: 10-10-2017
 * Time: 13:26
 */

class Connection
{
    private $pdo;
    private $productname;

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
        //$sql = 'select * FROM product';
        $stmt = $this->pdo->prepare('select * FROM product');
        $stmt->execute();
        return $stmt->fetchAll();


    }

    public function insertProduct()
    {
        $productimage = $_POST["productimage"];
        $productname = $_POST["productname"];
        $productdescription = $_POST["productdescription"];
        $productalergics = $_POST["alergics"];
        $productprice =  $_POST["price"];


        $sql = 'INSERT INTO product
                (:productfoto,
                 :productnaampje,
                 :beschrijving,
                 :alergierer,
                 :prijsje)';

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':productfoto',$productimage, PDO::PARAM_STR);
        $stmt->bindParam(':productnaampje',$productname,PDO::PARAM_STR);
        $stmt->bindParam(':beschrijving',$productdescription);
        $stmt->bindParam(':alergierer',$productalergics,PDO::PARAM_STR);
        $stmt->bindParam(':prijsje',$productprice,PDO::PARAM_STR);

        $stmt->execute();

    }

    public function removeProduct()
    {

        foreach ($_GET as $name => $content) {
            $this->productname = $name;
        }


        $this->productname = str_replace('_', ' ', $this->productname);

        $sql = "DELETE FROM product
            where productnaam =:productnaamperd";



        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':productnaamperd',$this->productname,PDO::PARAM_STR);
        $stmt->execute();


    }

    public function editProduct()
    {
        try {

            $name = $_GET["productname"];
            $description = $_GET["description"];
            $alergics = $_GET["alergics"];
            $price = floatval($_GET['price']);
            $productimage = $_GET["productimage"];
            $id = $_GET["id"];


            $sql =
                "UPDATE product SET 
            productnaam =:naam,
            productbeschrijving =:descriptie,
            allergieen =:alergieren,
            productprijs =:prijs,
            productplaatje =:productafbeelding
            WHERE idproduct =:productid";


            $stmt = $this->pdo->prepare($sql);

            $stmt->bindParam(':naam', $name, PDO::PARAM_STR);
            $stmt->bindParam(':descriptie', $description, PDO::PARAM_STR);
            $stmt->bindParam(':alergieren', $alergics, PDO::PARAM_STR);
            $stmt->bindParam(':prijs', $price);
            $stmt->bindParam(':productafbeelding', $productimage, PDO::PARAM_STR);
            $stmt->bindParam(':productid', $id, PDO::PARAM_STR);


            $stmt->execute();
            echo $stmt->rowCount() . 'records UPDATED succesfully';


        } catch (PDOException $e) {
            echo $sql . '<br>' . $e->getMessage();

        }
    }


}


?>

