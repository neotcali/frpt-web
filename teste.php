<html>
<body>
<?php
//exibir conteudo JsonSerializable
$url='http://2013-2016.indicadores.cidadessustentaveis.org.br/';
$unparsed_json = file_get_contents($url.'/indicators');
$json_object = json_decode($unparsed_json);
?>
<pre>
<?php
print_r ($json_object);
?>
</pre>
</body>
</html>
