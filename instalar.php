<!DOCTYPE html>
<html>
<head>

	<title>Hey, let's database</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <?php
  include 'config.php';
  //testar banco de dados
  echo 'Verificando banco de dados ';
  try {
  $db = new PDO('mysql:host='.$host, $usuario, $senha, $options);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $ex) {
  echo $ex->getCode();
  echo '<br><center>Verifique sua configuração:</center></br>';
  echo '<br>Host: '.$host;
  echo '<br>Úsuario: '.$usuario;
  echo '<br>Verifique também sua senha!';
  }
  //Criar Banco
  $banco = "`".str_replace("`","``",$banco)."`";
  echo $banco.' ... ';
  $db->query("CREATE DATABASE IF NOT EXISTS $banco");
  $db->query("use $banco");
  echo 'OK';
  echo '<br>';

  //Criar Tabelas
  	echo 'Criando tabelas ...<br><br>';
  $tableExists = $db->query("SHOW TABLES LIKE 'produtos'")->rowCount() > 0;
     if(!$tableExists){
  //alterar os campos das tabelas
  	$sql = "CREATE TABLE produtos (
  	url VARCHAR(255) NOT NULL,
  	indicador_id int(8) NOT NULL,
  	direcao VARCHAR(1) NOT NULL
  	meta DECIMAL(16,4) NOT NULL
  	)";

      $db->exec($sql);
      echo " Produtos: OK<br>";
      }

  $tableExists = $db->query("SHOW TABLES LIKE 'clientes'")->rowCount() > 0;
     if(!$tableExists){

     $sql = "CREATE TABLE clientes (
  	id int(50) NOT NULL,
  	url VARCHAR(255) NOT NULL,
  	indicadores VARCHAR(255) NOT NULL,
  	PRIMARY KEY (id)
  	)";

      $db->exec($sql);
      echo " Clientes: OK<br>";
      }



  $db = null;

  ?>
  <br>
  <center><a href="index.php"><u>Retornar</u></a>

  </body>
  </html>
