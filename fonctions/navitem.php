<?php
if (!function_exists('nav_item')){
        function nav_item(string $lien, string $titre, string $linkClass=''): string
    {
        $classe = 'nav-item';
        if ($_SERVER['SCRIPT_NAME'] === $lien){
            $classe .= ' active';
        }
        return <<<HTML
        <li class="$classe">
            <a class ="$linkClass" href="$lien">$titre</a>
        </li>
HTML;
    }
}
?>

<?= nav_item('/login.php','Accueil', $linkClass); ?>
<?= nav_item('/horaire/contact.php','contact', $linkClass); ?>
<?= nav_item('/meteo/meteo.php','meteo', $linkClass); ?>
<?= nav_item('/horaire/horaire.php','horaire', $linkClass); ?>
<?= nav_item('/horaire/info.php','info', $linkClass); ?>

