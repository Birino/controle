<html>
    <head><title>Aprendendo PHP</title></head>
<body>

<?php
var_dump($_POST);
if(isset($_POST['texto']))
   {
    $texto = $_POST['texto'];
    echo $texto;
   }
      
    ?>
    <form method=post action="<?php $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="texto" id="texto" value="" size=10>
        <br>
        <input type='submit' name='sub' value='Enviar!'>
  </form>
    
</body>
</html>