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

    public function make()
    {

        try {
            $pdoDriver = "mysql";
            $pdoHost = "mariadb.clow.nl:3306";
            $pdoUser = "s1117723";
            $pdoPassword = "dLYZKryVYe2kJb";
            $pdoDB = "code-runners";
            $this->pdo = new PDO($pdoDriver . ':host=' . $pdoHost . ';dbname=' . $pdoDB, $pdoUser, $pdoPassword);

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
        $sql = 'INSERT INTO product($_POST["productimage"],
                $_POST("productname"),
                $_POST["productdescription"],
                $_POST["alergics"],
                $_POST["price"])';

        $stmt= $this->pdo->prepare($sql);
        $stmt->execute();

    }
}
