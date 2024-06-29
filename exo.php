<?php
    require_once '_connec.php';

    $pdo = new \PDO(DSN, USER, PASS);
    
    $query = "SELECT * FROM friend";
    $statement = $pdo->query($query);
    $friendsObject = $statement->fetchAll(PDO::FETCH_OBJ);
   
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['firstname']) && !empty($_POST['lastname'])) {
        $firstname = trim($_POST['firstname']);
        $lastname = trim($_POST['lastname']);
    
        $statement = $pdo->prepare("INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname)");
        $statement->bindParam(':firstname', $firstname);
        $statement->bindParam(':lastname', $lastname);
        $statement->execute();
    
        header("Location: index.php");
        exit();
    }
    



