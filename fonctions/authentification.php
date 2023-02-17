<?php
function est_connect(): bool{
    return !empty($_SESSION['connecte']); 
}

function utilisateur_connect(): void {
    if (!est_connect()) {
        header('location:../index.php');
        exit();
    }
}
?>