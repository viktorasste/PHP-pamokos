<?php include "functions.php";  ?>
<?php session_start(); ?>
<?php addClient(); ?>
<?php deleteClient(); ?>
<?php updateClient(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klientai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


</head>
<body>
    <div class="container">
    <!-- 1 eilute su 5 -->
    <!-- Kaip prideti nauja klienta i faila per forma pasinaudojant funkciniu budu -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addClient">
          Add client
        </button>
        <!-- Modal -->
        <div class="modal fade" id="addClient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pridėti naują klientą</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col-lg-12">
                          <form method="post" action="klientai.php" enctype="multipart/form-data">
                              <div class="mb-3">
                                  <label for="vardas">Vardas</label>
                                  <input type="text" class="form-control" id="vardas" name="vardas">
                              </div>
                              <div class="mb-3">
                                  <label for="pavarde">Pavarde</label>
                                  <input type="text" class="form-control" id="pavarde" name="pavarde">
                              </div>
                              <div class="mb-3">
                                  <label for="amzius">Amzius</label>
                                  <input type="text" class="form-control" id="amzius" name="amzius">
                              </div>
                              <div class="mb-3">
                                  <label for="miestas">Miestas</label>
                                  <input type="text" class="form-control" id="miestas" name="miestas">
                              </div>
                              <div class="mb-3">
                                  <label for="nuotrauka">Nuotrauka</label>
                                  <input type="file" name="nuotrauka" id="nuotrauka">
                              </div>
                              <div class="mb-3">
                                  <button type="submit" class="btn btn-primary float-end" name="addClient">Add Client</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <?php showMessage(); ?>
        <table class="table table-striped">
            <tr>
                <th>Eil nr.</th>
                <th>Nuotrauka</th>
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>Amžius</th>
                <th>Miestas</th>
                <th>Veiksmai</th>
            </tr>
            <?php getClients(); ?>
        </table>

    <!-- 1. kaip atvirkstine tvarka atvaizduoti id? x -->
    <!-- 2. neveikia sesijos zinute x
I just solved my problem by adding exit after redirecting user to escape the execution of the register page, so the session won't be unset in the current page before using it in the next page.
-->
    </div>
</body>
</html>
