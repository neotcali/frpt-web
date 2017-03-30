<!DOCTYPE html>
<html>
 <head>
  <title>Jaimee? </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>

 </head>
 <body>
  <center>
 <?php echo "<p>123 testando</p>"; ?>
  </center>
 <br>
 <div style="float:right">
   <select id="cliente">
     <option value="1">Cliente A</option>
     <option value="2">Cliente B</option>
     <option value="3">Cliente C</option>
   </select>
 </div>

<br>
<center>
<input id="produto" type="text" placeholder="Produto"></input>
</center>
 </body>
<script>
 $(function() {
     $("#produtos").autocomplete({
         source: "produtos.php",
         minLength: 2,
         select: function(event, ui) {
             var id = ui.item.id;
             alert (id);
             }

       });
     });
</script>
</html>
