<?php 

$nome = $_POST['nome'];

$senha = $_POST['pass'];

echo "nome:".$nome. "<br>";
echo "senha:".$senha. "<br>";

echo "...". "<br>";

echo "<hr>";

$comidaPref = $_POST['comidaPref'];

echo $comidaPref;

echo "<hr>";


$diciplinas = '';

if(isset($_POST['redes'])){
     $diciplinas .="redes de computadores <br>";
}

if(isset($_POST['JavaScript'])){
     $diciplinas .="java script <br>";
}

if(isset($_POST['Java'])){
     $diciplinas .="Programaçao em java <br>";
}

if(isset($_POST['Arquitetura'])){
     $diciplinas .="Arquitetura e manutençao de computadores";
}

echo $diciplinas."<br>";