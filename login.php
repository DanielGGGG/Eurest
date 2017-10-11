<?php

ob_start();
session_start();
include 'lib/db.php';
include 'index.view.php';
?>
<html>
<body>

        <div class="logo">
            <?php

            //login
            if(isset($_POST['login'])) {
                $username = $_POST['email'];
                $password = $_POST['password'];
                $password = password_hash($password, PASSWORD_BCRYPT);
                $result = $conn->prepare("SELECT idgebruiker FROM Gebruiker WHERE email = :username AND password = :password LIMIT 1");
                $result->execute(array(':username' => $_POST['email'], ':password' => $_POST['password']));

                $row = $result->fetch(PDO::FETCH_ASSOC);

            if ($result->rowCount() > 0) {
                $_SESSION['id'] = $row['idgebruiker'];
                header('Location: index.php');
            }
            else { ?> <div class="profieltext"> <?php
                echo "Foute gegevens.";
                }
            }
                ?>

            </div>
        </div>
        </div>
    </div>
</body>
    <?php include 'forms/loginform.html'; ?>
</html>