<?php require APPROOT . '/views/inc/headerclient.php'; ?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3">Client</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>

                    <th scope="col">NOM</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach( $data['client'] as $client){?>
                <tr>
                    <th scope="row"> <?= $client->getNom() ?></th>
                    <th scope="row"> <?= $client->getPrenom() ?></th>
                    <th scope="row"> <?= $client->getLogin()->getEmail() ?></th>
                    <th scope="row"> <?= $client->getLogin()->getRole()?></th>
                </tr>


                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>