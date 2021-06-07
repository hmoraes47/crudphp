<?php 

    $mysqli = new mysqli('localhost', 'root', '', 'crudphpnew') or die(mysqli_error($mysqli));

    if(isset($_POST['save'])){

        $name = $_POST['name'];
        $info = $_POST['info'];
        $location = $_POST['location'];
        $inforelative = $_POST['inforelative'];

        $mysqli->query("INSERT INTO data (name, info, location, inforelative) VALUES('$name', '$info', '$location', '$inforelative')") or 
            die($mysqli->error);
    }

?>