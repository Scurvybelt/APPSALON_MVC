<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function esUltimo(string $actual,string $proximo): bool{
    if($actual !== $proximo ){
        return true;
    }
    return false;
}

//FUncion que revisa que el usuario este autenticado

function isAuth() : void{
    if(!isset($_SESSION['login'])){//si el usuario no esta logi in mandas al usuario a la pagina principal 
        header('Location: /');
    }
}

function isAdmin(): void{
    if(!isset($_SESSION['admin'])){
        header('Location: /');
    }
}