
<html>
 <head>
  <title>Curso PHP Progressivo</title>
 </head>
 <body>
 <form action='home.php' method="get">
  Nota 1: <input type="text" name="valor1"><br>
  Nota 2: <input type="text" name="valor2"><br>
  Nota 3: <input type="text" name="valor3"><br>
  <input type="submit">
 </form>
 
 <?php 
  $valor1 = $_GET['valor1'];
  $valor2 = $_GET['valor2'];
  $valor3 = $_GET['valor3'];

  $media = ($valor1 + $valor2 + $valor3)/3;

  echo "Média: $media";
 ?>
 </body>
</html>