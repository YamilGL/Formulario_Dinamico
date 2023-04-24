<?php

      //primera pagina experiencia
      $puesto = $_POST["puesto"];
      $pais = $_POST["pais"];
      $finicio = $_POST["finicio"];
      $ffinal = $_POST["ffinal"];
      $funcion1 = $_POST["funcion1"];
      $funcion2 = $_POST["funcion2"];
      $funcion3 = $_POST["funcion3"];
      $funcion4 = $_POST["funcion4"];
    ?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulario CV</title>
	<meta  charset = "utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<style>
		.container {
			display: flex;
			flex-direction: column;
			align-items: flex-start;
			font-size: 35px;
			margin: 0 auto;
          max-width: 500px;
		}
		.grid_2{
			display: grid;
  			gap: 10px;
  			margin-right: 20px;
			grid-template-columns: 50% 50%;
			margin: 0 auto;
          	max-width: 500px;
			font-size: 25px;
				
		}
		.grid_title
		{
			font-size: 60px;
        	background-color: rgb(255, 255,255);
          	padding: 10px;   	
		}
		label {
			margin-bottom: 5px;
		}

		input[type="submit"] {
			margin-top: 10px;
		}
		.my_input
		{
			width:500px;
			height:35px;
			font-size: 20px;
		}
        .my_input_date
		{
			width:300px;
			height:35px;
			font-size: 20px;
		}
	</style>
	<div class = "grid_title">
		<center><p> FORMACION</p></center>
	</div>
</head>
<body>
    <form id="formacion" action="idiomas_aptitudes.php" method="post">
    <input type="hidden" name="puesto" value="<?php echo $puesto; ?>">
    <input type="hidden" name="pais" value="<?php echo $pais; ?>">
    <input type="hidden" name="finicio" value="<?php echo $finicio; ?>">
    <input type="hidden" name="ffinal" value="<?php echo $ffinal; ?>">
    <input type="hidden" name="funcion1" value="<?php echo $funcion1; ?>">
    <input type="hidden" name="funcion2" value="<?php echo $funcion2; ?>">
    <input type="hidden" name="funcion3" value="<?php echo $funcion3; ?>">
    <input type="hidden" name="funcion4" value="<?php echo $funcion4; ?>">
	<div class="container">


		<label for="lugar_studio">¿Dónde estudiaste?</label>
		<input class = "my_input" type="text" id="lugar_studio" name="lugar_studio" list="lugar_studio_list" required>
		<datalist id="lugar_studio_list">
			<option value="Universidad Católica de San Pablo">
			<option value="Universidad Nacional de San Agustín de Arequipa ">
			<option value="Universidad Nacional Mayor de San Marcos">
			<option value="Pontificia Universidad Católica del Perú">
			<option value="Universidad Nacional de Ingeniería">     
		</datalist><br>

        <label for="paisEstudio">¿En cual país?</label>
		<input class = "my_input" type="text" id="paisEstudio" name="paisEstudio" list="paisEstudio_list" required>
		<datalist id="paisEstudio_list">
			<option value="Perú">
			<option value="Argentina">
			<option value="Ecuador">
			<option value="Bolivia">
			<option value="Chile">
		</datalist><br>

		<label>¿En que año fue?</label>
		</div>
        <div class = "grid_2">
		
		<label for="Ainicio" >Año de inicio</label>
		<input class ="my_input_date" type="number" id="Ainicio" name="Ainicio" min="1963" max="2023" step="1" placeholder="Ingresa el año">
		<label for="Afinal">Añó de fin</label>
		<input class ="my_input_date" type="number" id="Afinal" name="Afinal" min="1963" max="2023" step="1" placeholder="Ingresa el año">
    </div>
    <br>
    <div class="container">

    <label for="especializacion">¿En qué te especializaste?</label>
		<input class = "my_input" type="text" id="especializacion" name="especializacion" list="especializacion_list" required>
		<datalist id="especializacion_list">
			<option value="Ingeniería Civil">
			<option value="Ingeniería Mecánica">
			<option value="Ingeniería Industrial">
			<option value="Marketing Digital">
			<option value="Neurología">     
		</datalist>
    </div>

<center><input class ="my_input" type="submit" value="Continuar"></center>
</form>
</body>
</html>
