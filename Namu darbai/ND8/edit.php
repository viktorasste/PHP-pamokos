<?php include "functions.php"; ?>
<?php $klientas = getClient($_GET["id"]); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redaguoti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-4">

            <!-- taip neveikia -->
                <!-- <form method="post" action="klientai.php"> -->
                <form method="post" action="klientai.php" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <div class="form-group">
                        <label for="vardas">Vardas</label>
                        <input type="text" class="form-control" value="<?php echo $klientas["vardas"]; ?>" id="vardas" name="vardas">
                    </div>
                    <div class="form-group">
                        <label for="pavarde">Pavarde</label>
                        <input type="text" class="form-control" value="<?php echo $klientas["pavarde"]; ?>" id="pavarde" name="pavarde">
                    </div>
                    <div class="form-group">
                        <label for="amzius">Amzius</label>
                        <input type="text" class="form-control" value="<?php echo $klientas["amzius"]; ?>" id="amzius" name="amzius">
                    </div>
                    <div class="form-group">
                        <label for="miestas">Miestas</label>
                        <input type="text" class="form-control" value="<?php echo $klientas["miestas"]; ?>" id="miestas" name="miestas">
                    </div>
                    <div class="form-group">
                                  <label for="nuotrauka">Nuotrauka</label>
                                  <input type="file"  name="nuotrauka" id="nuotrauka">
                              </div>
                    <button type="submit" class="btn btn-primary" name="updateClient">Update Client</button>
                </form>
            </div
        </div>
    </div>

</body>
</html>