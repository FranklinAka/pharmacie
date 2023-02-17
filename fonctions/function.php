<?php
function nav_item(string $lien, string $titre, string $linkClass): string
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
function nav_menu(string $linkClass=''): string
{
    return
        nav_item('/index.php', 'Accueil', $linkClass) .
        nav_item('/horaire/contact.php', 'contact', $linkClass) .
        nav_item('/meteo/meteo.php', 'meteo', $linkClass) .
        nav_item('/horaire/horaire.php', 'horaire', $linkClass) .
        nav_item('/horaire/info.php', 'info', $linkClass);

}
function getWeatherData() {
    try {
    $curl = curl_init("http://api.openweathermap.org/data/2.5/weather?q=abidjan,ci&units=metric&appid=1b43f9bdc8c0f420c279054620016f44&lang=fr");
    curl_setopt_array($curl,[
    CURLOPT_CAINFO => __DIR__ . DIRECTORY_SEPARATOR .'php'.'cert.cer',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 1]);
    $data = curl_exec($curl);
    if ($data === false){
    throw new Exception(curl_error($curl));
    } else {
    if (curl_getinfo($curl,CURLINFO_HTTP_CODE) === 200){
    $data = json_decode($data, true);
    echo 'Abidjan '.$data['main']['temp'].' °C';
    }
    }
    } catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
    } finally {
    curl_close($curl);
    }
    }

?>