<?php
// Autor: Darius Gabriel Dobre <dariusgd19@gmail.com>
// EL nombre por defecto es Mundo
$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print "Hola, {$nombre}\n"
?>
