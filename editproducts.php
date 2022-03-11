<?php

require './bdd.php';

if (isset($_POST['sub'])) { 
    if (
            !empty($_POST['quantity'])
        )    
    {
        $id = $_GET['id'];
        $quantitypr = htmlspecialchars($_POST['quantity']);

        $req = $bdd->prepare("UPDATE products SET quantity= ? WHERE ID = ?");
        $req->execute([$quantitypr, $id]);
        
        $req->closeCursor();

        header("Location: liste.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method='POST'>
            <label for='quantity'>Quantity :</label>
            <input type="number" name="quantity" id="quantity" >
            <input type="submit" name="quantity" id="quantity" >
        </form>
    </body>
</html>