<?php

   $dbHost = 'mysqlserver.ctxtwwh0ilx9.us-east-1.rds.amazonaws.com';
   $dbUsername = 'admin';
   $dbPassword = 'Brasilhexa2022';
   $dbName = 'bancosingandsync';


  $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);


  if($conexao->connect_errno)
  {
    echo "ERRO";
  }
  else
  {
    echo "Conexão realizada com sucesso";  
  }

?>