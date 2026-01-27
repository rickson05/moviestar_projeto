<?php

    $db_name = "moviestar";
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";

  // Tenta estabelecer  conexão com PDO (PHP Data Objects)
  try{
      $conn = new PDO("mysql:host=$db_host; dbname=$db_nome", "$db_user", "$db_pass");

      // Habilitar erros PDO
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  } catch(PDOException $e){

    $error = $e->getMenssage();

    echo "Erro de conexão: " . $error;
  }