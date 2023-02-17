<?php
$fichier = null;
function ajouter(): void{
    //voir ou on va enregistrer les vus
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur';
    $fichier_journalier = $fichier . '-' . date('Y-m-d');
    incremente_compteur($fichier);
    incremente_compteur($fichier_journalier);
}
function incremente_compteur(string $fichier):void {
    $compteur = 1;
    if (file_exists($fichier)){
        //si le fichier existe on increment le fichier
        $compteur = (int)file_get_contents($fichier);
        $compteur++;
    }
        file_put_contents($fichier, $compteur); 
}

function nombre_vus(): string{
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR .'data'. DIRECTORY_SEPARATOR . 'compteur';
    return file_get_contents($fichier);
}
function nombre_de_vus(int $annee, int $mois): int{
    $mois = str_pad($mois , 2,'0', STR_PAD_LEFT);
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur' . $annee . '-' . $mois .'-'. '*';
    $fichiers = glob($fichier);
    $total = 0;
    foreach ($fichiers as $fichier) {
        $total += (int)file_get_contents($fichier);
    }
    return $total;
}
function nombre_de_vus_detail(int $annee, int $mois): array {
    $mois = str_pad($mois , 2,'0', STR_PAD_LEFT);
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'compteur' . $annee . '-' . $mois .'-'. '*';
    $fichiers = glob($fichier);
    $visites = [];
    foreach ($fichiers as $fichier) {
        $parties = explode('-', basename($fichier));
        $visites[] = [
            'annee' => $parties[1],
            'mois' => $parties[2],
            'jour' => $parties[3],
            'visites' => file_get_contents($fichier),
        ];
    }
    return $visites;
}
?>