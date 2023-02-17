<?php
require_once "fonctions/authentification.php";
utilisateur_connect();
require_once 'fonctions/compteur.php';
$annee = (int)date('Y');
$annee_select = empty($_GET['annee']) ? null : (int)($_GET['annee']);
$mois_select = empty($_GET['mois']) ? null : ($_GET['mois']);
if ($annee_select && $mois_select){
    $total = nombre_de_vus($annee_select, $mois_select);
    $detail = nombre_de_vus_detail($annee_select, $mois_select);
}else{
    $total = nombre_vus();
}
$mois = [
    '01' => 'janvier',
    '02' => 'fevrier',
    '03' => 'mars',
    '04' => 'avil',
    '05' => 'mai',
    '06' => 'juin',
    '07' => 'juillet',
    '08' => 'aout',
    '09' => 'septembre',
    '10' => 'octobre',
    '11' => 'novembre',
    '12' => 'decembre',
];
require_once 'element/header.php';
?>
<div class="row">
    <div class="col-md-4">
        <div class="list-group">
            <?php for($i=0; $i<1; $i++): ?>
                <a class="list-group-item <?= $annee - $i === $annee_select ? ' active' : ''; ?>" href="dashoard.php?annee=<?= $annee - $i ?>"><?= $annee - $i?></a>
                <?php if ($annee - $i === $annee_select): ?>
                    <div class="list-group">
                        <?php foreach($mois as $num => $moi):?>
                            <a class="list-group-item <?= $num === $mois_select ? ' active' : ''; ?>" href="dashoard.php?annee=<?= $annee_select; ?>&mois=<?= $num ?>">
                                <?= $moi ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
        </div>
    </div>
</div>
<div class = "col-md-8">
    <div class="card">
        <div class="card-body">
            <strong style="font-size:3em;"><?= $total ?></strong><br>
            visite<?= $total > 1 ? 's' : '' ?> total
        </div>
    </div>
    <?php if (isset($detail)): ?>
    <h2>detail des vistes pour le mois</h2>
    <table class = "table table-striped">
        <thead>
            <tbody>
                <tr>
                    <th>Jour</th>
                    <th>Mois</th>
                    <th>Année</th>
                    <th>Nombre de visite</th>
                </tr>
            <tbody>
        </thead>
            <?php foreach($detail as $ligne): ?>
            <tr>
                <td><?= $ligne['jour'] ?></td>
                <td><?= $ligne['mois'] ?></td>
                <td><?= $ligne['annee'] ?></td>
                <td><?= $ligne['visites'] ?>visite<?= $ligne[' visites'] > 1 ? 's' : '' ?></td>
            </tr>
        <?php endforeach; ?>
        </thead>
    </table>
    <?php endif; ?>
</div>

<?php
require 'element/footer.php';
?>