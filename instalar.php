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
  	$sql = "CREATE TABLE produtos(
   CODPROD   INTEGER  NOT NULL PRIMARY KEY
  ,DESCRICAO VARCHAR(40) NOT NULL
  ,QTESTGER  INTEGER  NOT NULL
  ,MARCA     VARCHAR(6) NOT NULL
);
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (47928,'DISCO CORTE 101,6X3,2X15,9 A36Q BNA25',2,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (18999,'LIXA A275 P500 127X0X0 PUMA',532,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (20763,'REBOLO R.SIL.VERDE 10X2X1.1/4 G60',2,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (31539,'BEAR-TEX F 130X240 747 A/O VF',50,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (705,'LIXA FERRO K 246 G150',1178,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (706,'LIXA FERRO K 246 G180',484,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (707,'LIXA FERRO K 246 G220',494,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (708,'LIXA FERRO K 246 G240',221,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (709,'LIXA FERRO K 246 G280',1174,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (710,'LIXA FERRO K 246 G320',473,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (711,'DISCO LIXA 7 FERRO G16',201,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (712,'DISCO LIXA 7 FERRO G24',235,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (713,'DISCO LIXA 7 FERRO G36',13824,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (714,'DISCO LIXA 7 FERRO G50',164,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (715,'DISCO LIXA 7 FERRO G60',173,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (716,'DISCO LIXA 7 FERRO G80',501,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (717,'DISCO LIXA 7 FERRO G100',361,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (718,'DISCO LIXA 7 FERRO G120',314,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (720,'DISCO LIXA 7 MARMORE G60',1322,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (721,'DISCO LIXA 7 MARMORE G36',1034,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (804,'REBOLO RETO COMUM 10X1.1/2 A46',1,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (805,'REBOLO RETO COMUM 10X1.1/2 A60',1,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (15378,'REBOLO BRANCO 70X30X12 38A46 KVS',82,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (15502,'LIXA R228 G100 38X19X102 CONE',1709,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (15718,'LIMA FINA 128X25X5 NSA320 G5V',121,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (15833,'DISCO DIAM SEG 110X7,5X20 15039708',20,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (15941,'REBOLO RETO COMUM 100X12X20 A60',10,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (40564,'DISCO PUMA VELCRO G400 6" A275',426,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (808,'REBOLO RETO COMUM 10X2 A-46',3,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (812,'REBOLO RETO COMUM 12X1.1/4 A46',2,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (814,'REBOLO RETO COMUM 12X1.1/2 A24',6,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (815,'REBOLO RETO COMUM 12X1.1/2 A36',5,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (816,'REBOLO RETO COMUM 12X1.1/2 A46',2,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (15943,'REBOLO RETO COMUM 76,2X12,7X16 A60',1,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (15993,'DISCO DESB 7X1/4 INOX BDA680',494,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (16060,'REBOLO RETO MAXI MEDIO 6X1',7,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (16061,'REBOLO RETO MAXI GROSSO 6X1',6,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (817,'REBOLO RETO COMUM 12X1.1/2 A60',2,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (820,'REBOLO RETO COMUM 12X2 A46',3,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (16071,'LIXA A275 FE 93X115 P0800',12023,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (16494,'LIXA A275 P600 127X0X0 PUMA',1522,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (17160,'PONTA MONTADA A34 NORTON',627,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (17161,'PONTA MONTADA B 91',578,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (17583,'REBOLO RETO 254X12,7X76,2 38A60 KVS',2,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (832,'DISCO CORTE 7X1/8X7/8 AR332 INOX',1624,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (837,'DISCO LIXA 4.1/2 FERRO G50',1886,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (838,'DISCO DESB 4.1/2X3/16 INOX BDA530',4387,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (839,'DISCO LIXA 4.1/2 FERRO G80',2520,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (17713,'REBOLO BRANCO 10X3/4 38A46K',1,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (17770,'REBOLO BRANCO 6X1 38A60K',10,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (17776,'LIXA NO FIL A275 G600 230X280 SECA',2939,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (855,'DISCO LIXA 4.1/2 FERRO G24',1841,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (18998,'LIXA NO FIL A275 G400 230X280 SECA',983,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (19364,'LIXA SPEED LOK F944 G36 DL 51',76,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (856,'DISCO LIXA 4.1/2 FERRO G36',307,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (857,'DISCO DESB 7X1/4 BDA600',1767,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (859,'DISCO SEGMENTADO NSP200',1,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (862,'REBOLO BRANCO 254X101,6X38,10',2,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (864,'DISCO CORTE 4.1/2X1/8X7/8 AR332 INOX',11684,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (866,'DISCO CORTE 9X1/8X7/8 AR332 INOX',111,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (872,'DISCO FLAP DISC 4.1/2 G50',243,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (873,'DISCO FLAP DISC 4.1/2 G60',476,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (19366,'LIXA SPEED LOK F944 G60 DL 51',100,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (19369,'LIXA SPEED LOK F944 G60 DL 76',8,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (20722,'DISCO DESB 4.1/2X1/4 BDA630 CLEAN',908,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (20723,'DISCO DESB 7X1/4 BDA630 CLEAN',72,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (20860,'DISCO FLAP DISC 7X7/8 G40',205,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (21387,'DISCO DIAM CONT 110X5X20 15039701',57,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (875,'DISCO FLAP DISC 4.1/2 G120',1791,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (876,'DISCO FLAP DISC 7X7/8 G60',1244,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (877,'DISCO FLAP DISC 7X7/8 G50',11,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (878,'DISCO FLAP DISC 7X7/8 G80',37,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (879,'DISCO FLAP DISC 7X7/8 G120',10,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (880,'DISCO LIXA 4.1/2 FERRO G120',734,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (887,'DISCO DIAM 110X8X20 PRO TURBO 15039685',212,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (22045,'DISCO FLAP DISC 4.1/2 G40',30,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (22262,'LIXA NO FIL A275 G800 230X280 SECA',100,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (897,'LIXA NO FIL A219 G80 225X275',300,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (898,'LIXA NO FIL A219 G100 225X275',147,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (899,'LIXA NO FIL A219 G120 225X275',204,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (901,'LIXA NO FIL A219 G180 225X275',240,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (904,'LIXA NO FIL A219 G280 225X275',140,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (23372,'DISCO CORTE 7X5/32 BDA443',1196,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (23438,'LIXA SEEDED GEL F944 7" G36',450,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (23951,'REBOLO BRANCO 6X1 38A46K',20,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (24283,'DISCO DESB 9" 230BA680',80,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (24397,'LIXA FITA 50X45 K246 G36',74,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (24881,'DISCO CORTE 7X1/8 5NZ24 S1ONZR122',53,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (722,'DISCO LIXA 7 MARMORE G120',12,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (723,'DISCO LIXA 7 MARMORE G180',51,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (724,'LIXA MASSA A 257 G60',1369,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (725,'LIXA MASSA A 257 G80',3016,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (726,'LIXA MASSA A 257 G100',3000,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (727,'LIXA MASSA A 257 G120',2458,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (728,'LIXA MASSA A 257 G150',7299,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (729,'LIXA MASSA A 257 G180',750,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (906,'LIXA NO FIL A219 G360 225X275',70,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (913,'DISCO LIXA 4.1/2 FERRO G60',4283,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (730,'LIXA MASSA A 257 G220',2518,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (731,'DISCO CORTE 7X1/8 AR312',13778,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (732,'DISCO CORTE 9X1/8 AR312',748,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (733,'DISCO CORTE 10X1/8X1 AR312',61,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (734,'DISCO CORTE 12X1/8X1 AR312',455,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (735,'DISCO CORTE 14X1/8 AR312',725,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (736,'DISCO CORTE 10X1/8 MR822 CONCRETO',24,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (738,'DISCO CORTE 14X1/8 MR822 CONCRETO',114,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (926,'DISCO LIXA AVOS 4.1/2 F425 G36 MARMORE',18,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (927,'DISCO LIXA AVOS 4.1/2 F425 G60 MARMORE',120,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (928,'DISCO LIXA AVOS 4.1/2 F425 G120 MARMORE',19,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (26792,'DISCO CORTE 4.1/2X1/16X7/8 BHP12 FINO',816,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (26793,'DISCO CORTE 7X1/16X7/8 BHP12 FINO',290,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (27885,'REBOLO BRANCO PRATO 6X3/4X1.1/4 38A46',3,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (28854,'DISCO FLAP MAXI CLASSIC 4.1/2 G40',5660,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (28855,'DISCO FLAP MAXI CLASSIC 4.1/2 G50',3469,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (740,'DISCO CORTE 9X1/8 MR830 CONCRETO',3,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (741,'DISCO CORTE 7X1/8 MR832 CONCRETO',210,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (743,'DISCO CORTE 4.1/2X1/8X7/8 AR312',16629,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (930,'SUPORTE AVOS DISCO 7',6,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (28856,'DISCO FLAP MAXI CLASSIC 4.1/2 G60',7572,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (28857,'DISCO FLAP MAXI CLASSIC 4.1/2 G80',991,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (28858,'DISCO FLAP MAXI CLASSIC 4.1/2 G120',4183,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (28859,'DISCO FLAP MAXI CLASSIC 7" G40',832,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (28860,'DISCO FLAP MAXI CLASSIC 7" G60',6806,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (28861,'DISCO FLAP MAXI CLASSIC 7" G80',1523,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (28873,'BEAR TEX 130X240 G600',5,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (955,'DISCO CORTE 10X1/8X3/4 AR312',44,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (957,'DISCO CORTE 12X1/8X3/4 AR312',156,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (958,'DISCO CORTE 12X1/8X5/8 AR312',287,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (29301,'LIXA AGUA T 277 G60',2260,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (29578,'LIXA K131 120X45 G36',4,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (31186,'FITA CREPE 18X50 05539544867',633,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (31187,'FITA CREPE 24X50 66254482103',905,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (757,'REBOLO RETO VIDIA 8X1 C60',2,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (762,'DISCO CORTE 7X5/32 BDA440',11,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (763,'DISCO DESB 4.1/2X3/16 BDA50',1577,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (766,'DISCO DESB 7X1/4 BDA630 INOX',3137,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (968,'LIXA AGUA JET401 G1200',444,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (969,'DISCO LIXA AVOS 4.1/2 F224 G24 FERRO',1,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (981,'DISCO CORTE 4.1/2X1/16X7/8 BNA12',5800,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (982,'DISCO CORTE 7X5/64X7/8 BNA22 INOX',307,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (31188,'FITA CREPE 48X50 05539544871',929,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (31858,'DISCO MULTIUSO 114,3X2,2X22,22 CDA 1-2-3',10459,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (32963,'DISCO PUMA VELCRO G80 6" A275',3026,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (32965,'DISCO PUMA VELCRO G220 6" A275',2608,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (32985,'CINTA ESTREITA W427 G600 75X610',211,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (39220,'BUCHA REDUCAO REBOLO 31,8X12,7',4,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (767,'DISCO DESB 7X1/4 BDA640',3816,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (768,'DISCO DESB 9X1/4 BDA640',763,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (769,'DISCO DESB 7X1/4 BDA650',243,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (775,'REBOLO RETO COMUM 6X3/4 A24',22,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (776,'REBOLO RETO COMUM 6X3/4 A36',1,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (780,'REBOLO RETO COMUM 6X1 A24',7,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (39233,'BUCHA REDUCAO REBOLO 38,1X25,4',5,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (34774,'FITA ISOL HOBBY 19X20 66254474164',1401,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (35072,'SPEED LOK BEAR TEX A0 CMARROM DL 51MM',98,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (781,'REBOLO RETO COMUM 6X1 A36',3,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (782,'REBOLO RETO COMUM 6X1 A46',1,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (785,'REBOLO RETO COMUM 8X3/4 A24',2,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (788,'REBOLO RETO COMUM 8X3/4 A60',20,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (789,'REBOLO RETO COMUM 8X1 A24',6,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (14753,'SUPORTE DISCO SCF 127MM-5/16',1,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (14758,'DISCO LIXA ROSETE G120 F227',199,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (14759,'DISCO LIXA ROSETE G100 F227',4469,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (14760,'DISCO LIXA ROSETE G80 F227',220,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (14811,'LIXA R241 50 38X19X102 CONE',2598,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (14871,'DISCO PUMA VELCRO G120 5"',99,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (35073,'SPEED LOK BEAR TEX A0 M VERML. DL 51MM',118,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (35074,'SPEED LOK BEAR TEX A0 VF AZUL DL 51MM',119,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (35075,'LIXA SPEED LOK F921 G120 DL 51',90,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (35685,'REBOLO RETO 304,8X31,8X50,8 A60NVH',1,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (36651,'DISCO DESB DIAMANTADO 105MMXM14',1,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (790,'REBOLO RETO COMUM 8X1 A36',4,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (795,'REBOLO RETO COMUM 10X1 A36',4,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (796,'REBOLO RETO COMUM 10X1 A46',4,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (797,'REBOLO RETO COMUM 10X1 A60',1,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (14886,'DISCO FLAP DISC 4.1/2 G80',880,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (14887,'DISCO CORTE 4X1/8X5/8 AR312',5,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (14999,'DISCO CORTE 4.1/2X3/64X7/8 BNA12 EXTRA',1518,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (15000,'DISCO CORTE 7X1/16X7/8 BNA12',773,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (15001,'DISCO DESB 4.1/2X1/4 BDA640',24403,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (15006,'DISCO LIXA 4.1/2 FERRO G100',519,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (15140,'LIXA R228 G80 38X19X102 CONE',5796,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (15141,'DISCO PUMA VELCRO G80 5"',1680,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (36837,'REBOLO BRANCO 127,0X12,7X31,75 38A60KVH',21,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (39221,'BUCHA REDUCAO REBOLO 38,1X31,8',93,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (39219,'BUCHA REDUCAO REBOLO 31,8X19,0',59,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (40064,'REBOLO CHANFRADO 203,2X9,5X31,75 A80',8,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (40577,'REBOLO RETO COMUM 1A AR LVH 10X1X3',1,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (41667,'DISCO FLAP MAXI CLASSIC 7" G120',3580,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (41731,'DISCO FLAP MAXI CLASSIC 7" G50',1805,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48357,'DRESSADOR DIAM. 600/2,5N-13-98,6-0-13F',1,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48249,'DISCO DESB 4.1/2X1/4X7/8 BDA600 CLASSIC',495,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48250,'DISCO DESB 7X1/4X7/8 BDA600 CLASSIC',1300,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48251,'REBOLO RETO ALINDUM 6X3/4X1.1/4 A24',8,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48252,'REBOLO RETO ALUNDUM 6X3/4X1.1/4 A46',9,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48254,'REBOLO RETO ALUNDUM 6X1X1.1/4 A24',10,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48255,'REBOLO RETO ALUNDUM 6X1X1.1/4 A46',6,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48030,'FITA EMPACOTAMENTO TRANSP 48X45',79,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48256,'REBOLO RETO ALUNDUM 6X1X1.1/4 A60',7,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48238,'DISCO CORTE 10X1/8X3/4 AR302 CLASSIC',11,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48239,'DISCO CORTE 10X1/8X1 AR302 CLASSIC',17,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48240,'DISCO CORTE 4.1/2X1/8X7/8 AR302 CLASSIC',2537,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48241,'DISCO CORTE 7X1/8X7/8 AR302 CLASSIC',1562,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48242,'DISCO CORTE 9X1/8X7/8 T41 CLASSIC',185,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48243,'DISCO CORTE 12X1/8X5/8 AR302 CLASSIC',20,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48244,'DISCO CORTE 12X1/8X3/4 AR302 CLASSIC',16,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48245,'DISCO CORTE 12X1/8X1 AR302 CLASSIC',38,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48246,'DISCO CORTE 4.1/2X3/64X7/8 T41 CLASSIC',1399,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48247,'DISCO CORTE 4.1/2X1/16X7/8 T41 CLASSIC',1670,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (48248,'DISCO CORTE 7X1/16X7/8 T41 CLASSIC',986,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (669,'LIXA AGUA JET401 G1500',347,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (685,'LIXA AGUA T 277 G80',251,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (686,'LIXA AGUA T 277 G100',662,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (687,'LIXA AGUA T 277 G120',1499,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (688,'LIXA AGUA T 277 G150',492,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (689,'LIXA AGUA T 277 G180',1299,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (690,'LIXA AGUA T 277 G220',572,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (691,'LIXA AGUA T 277 G240',1231,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (692,'LIXA AGUA T 277 G280',492,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (693,'LIXA AGUA T 277 G320',1599,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (694,'LIXA AGUA T 277 G360',241,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (695,'LIXA AGUA T 277 G400',1296,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (696,'LIXA AGUA T 277 G500',196,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (697,'LIXA AGUA T 277 G600',2312,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (698,'LIXA FERRO K 246 G36',2822,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (699,'LIXA FERRO K 246 G40',1081,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (700,'LIXA FERRO K 246 G50',1623,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (701,'LIXA FERRO K 246 G60',2225,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (702,'LIXA FERRO K 246 G80',2681,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (703,'LIXA FERRO K 246 G100',2949,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (704,'LIXA FERRO K 246 G120',1924,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (43538,'REBOLO RETO 254X31,8X76,2 G60 1A60KVH',1,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (41149,'BOINA PELE DUPLA FACE',8,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (42424,'DISCO DIAM CLASSIC SEGM 110X20',2390,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (42425,'DISCO DIAM CLASSIC TURBO 110X20',146,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (43889,'DISCO FLAP DISC 4.1/2 G40 TWINFIBER',2,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (46607,'DISCO DESB 230X4X22,23 BDA403',1000,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (46677,'DISCO DIAM SEGMENT 180X22,23 70184645783',23,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (49444,'DISCO PUMA VELCRO G120 6"',35,'NORTON');
INSERT INTO produtos(CODPROD,DESCRICAO,QTESTGER,MARCA) VALUES (49414,'DISPLAY DE CHAO',1,'NORTON');
";

      $db->exec($sql);
      echo " Produtos: OK<br>";
      }
<!--
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
-->


  $db = null;

  ?>
  <br>
  <center><a href="index.php"><u>Retornar</u></a>

  </body>
  </html>
