<?php include "classes/Klientai-class.php"; ?>
<?php $klientai = new Klientai(); ?>
<?php //var_dump($klientai->klientai); ?>
<div class="row">
    <div class="col-lg-8">
        <h1>Klientai</h1>
    </div>    
</div>
<div class="row">
    <div class="col-lg-8">
          <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Vardas</th>
                    <th>Pavarde</th>
                    <th>Amzius</th>
                    <th>Miestas</th>
                </tr>
                <?php //$klientai->showClients(); ?>
                <!-- Klaseje turi buti kuo maziau kodo kuris atsakingas uz atvaizdavima -->
                <?php foreach($klientai->klientai as $key => $klientas) { ?>
                    <tr>
                        <td><?php echo $key; ?></td>
                        <td><?php echo $klientas["vardas"]; ?></td>
                        <td><?php echo $klientas["pavarde"]; ?></td>
                        <td><?php echo $klientas["amzius"]; ?></td>
                        <td><?php echo $klientas["miestas"]; ?></td>
                    </tr>
                <?php } ?>    
            </table>
    </div> 
</div>         

