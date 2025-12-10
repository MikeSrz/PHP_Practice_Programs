<?php
$usuarios = [
    "mario"  => "aaaa",
    "manolo" => "oooo"
];
$usuario_input  = $_POST['usuario'] ?? '';
$password_input = $_POST['password'] ?? '';
$autenticado = false;

// Opción Técnica 1: Acceso directo (Más eficiente O(1))
if (isset($usuarios[$usuario_input]) && $usuarios[$usuario_input] === $password_input) {
    $autenticado = true;
}
if ($autenticado) {
    include 'ok.php';
} else {
    include 'ko.php';
}
?>