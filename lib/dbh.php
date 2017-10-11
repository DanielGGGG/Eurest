<?php
/**
class Connectionn{
    public $server = "mariadb.clow.nl";
    public $port = '3306';
    public $username = 's1117723';
    public $password = 'dLYZKryVYe2kJbQ';
    public $database = 'code-runners';

    public function make(){
       try {
            $conn = new PDO("mysql:host=$this->server;port=$this->port;dbname=$this->database;", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function test(){
        var_dump($this->database);
    }

}

*/

class Connection
{
    public function probeer()
    {
        try {
            $pdoDriver = "mysql";
            $pdoHost = "mariadb.clow.nl";
            $pdoDB = "code-runners";
            $pdoUser = "s1117723";
            $pdoPassword = "dLYZKryVYe2kJb";
            $pdo = new PDO($pdoDriver . ':host=' . $pdoHost . ';dbname=' . $pdoDB, $pdoUser, $pdoPassword);

        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
            exit();
        }


        // Run Query
        $sql = 'SELECT * FROM product';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $datas = $stmt->fetchAll();
        echo "<table><tr><th>ID</th><th>Productplaatje</th><th>Beschrijving</th></tr>";
        foreach ($datas as $data) {
            echo "<tr>";
            echo "<td>" . $data['idproduct'] . "</td>";
            echo "<td>" . $data['productplaatje'] . "</td>";
            echo "<td>" . $data['productbeschrijving'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}