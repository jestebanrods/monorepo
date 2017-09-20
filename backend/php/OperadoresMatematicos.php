<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Operadores Matematicos</title>
    </head>
    <body>
        <p>&nbsp;</p>
        <form name="form1" method="post" action="">
          <p>
            <label for="num1"></label>
            <input type="text" name="num1" id="num1">
            <label for="num2"></label>
            <input type="text" name="num2" id="num2">
            <label for="operacion"></label>
            <select name="operacion" id="operacion">
              <option>Suma</option>
              <option>Resta</option>
              <option>Multiplicación</option>
              <option>División</option>
              <option>Módulo</option>
              <option>Incremento</option>
              <option>Decremento</option>
            </select>
          </p>
          <p>
            <input type="submit" name="button" id="button" value="Enviar">
          </p>
        </form>
        <p>&nbsp;</p>
        <?php
			if(isset($_POST["button"])) {
				$numero1=$_POST["num1"];
				$numero2=$_POST["num2"];
				$operacion=$_POST["operacion"];
				if(!strcmp("Suma",$operacion)) {
					echo "El Resultado Es: " . ($numero1+$numero2);
				}elseif(!strcmp("Resta",$operacion)) {
					echo "El Resultado Es: " . ($numero1-$numero2);
				}elseif(!strcmp("Multiplicación",$operacion)) {
					echo "El Resultado Es: " . ($numero1*$numero2);
				}elseif(!strcmp("División",$operacion)) {
					echo "El Resultado Es: " . ($numero1/$numero2);
				}elseif(!strcmp("Incremento",$operacion)) {
					$numero1++;
					echo "El Resultado Es: " . ($numero1);
				}else {
					$numero1--;
					echo "El Resultado Es: " . ($numero1);
				}
			}
		?>
    </body>
</html>