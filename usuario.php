<?php

//Importar conexion

require 'includes/config/database.php';
$db = conectarDB();


//Crear un email y password

$email = "j.mansolesc.223@gmail.com";
$password = "123456";
$passwordHash = password_hash($password, PASSWORD_DEFAULT);


//Query para crear el usuario

$query = "INSERT INTO usuarios (email, password)  VALUES ( '${email}' , '${passwordHash}');";

echo $query;


//Agregarlo a la base de datos
mysqli_query($db, $query);