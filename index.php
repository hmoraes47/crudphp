<!DOCTYPE html>
    <html lang="en">
        <head>            
            <meta charset="UTF-8">

            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <title>crud operation - create, read, att e del</title>

            <!-- bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        </head>

    <body>

        <?php require_once 'process.php'; ?>

        <div class="row justify-content-center">
            <table class="table">
            <?php 
                $mysqli = new mysqli('localhost', 'root', '', 'crudphpnew') or die(mysqli_error($mysqli));
                $result = $mysqli->query("SELECT * FROM data;") or die($mysqli->error);
                    pre_r($result->fetch_assoc());
                        while ($row = $result->fetch_assoc()):?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['info']; ?></td>
                        <td><?php echo $row['location']; ?></td>
                        <td><?php echo $row['inforelative']; ?></td>
                    </tr>
                        <?php endwhile; ?>
            </table>
        </div>

        <?php 
            function pre_r( $array ) {
                echo '<pre>';
                print_r($array);
                echo '</pre>';
            }
        ?>
        ?>

        <div class="row justify-content-center">
        <!-- form -->
        <form action="process.php" method="POST">
            <!-- 1 campo -->
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="name" class="form-control" value="nome completo">
            </div>
            <br>
            <!-- 2 campo -->
            <div class="form-group">
                <label>Inserir no banco de informações:</label>
                <input type="text" name="info" class="form-control" value="keys, code, passwords">
            </div>
            <br>
            <!-- 3 campo -->
            <div class="form-group">
                <label>Location</label>
                <input type="text" name="location" class="form-control" value="localização atual">
            </div>
            <br>
            <!-- 4 campo -->
            <div class="form-group">
                <label>Informação relativa a key</label>
                <input type="text" name="inforelative" class="form-control" value="key associada">
            </div>
            <br>

            <button type="submit" class="btn btn-primary" name="save">Salvar</button>

        </form>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>


    </html>