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

    //segunda pagina formacion
      $lugar_studio = $_POST["lugar_studio"];
      $paisEstudio = $_POST["paisEstudio"];
      $Ainicio = $_POST["Ainicio"];
      $Afinal = $_POST["Afinal"];
      $especializacion = $_POST["especializacion"];    
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
  .my_text
    {
        width:500px;
        height:25px;
        font-size: 20px;
    }
  .my_choice
  {
      font-size: 20px;
  }
</style>
<div class = "grid_title">
  <center><p> IDIOMAS/APTITUDES</p></center>
</div>
</head>
<body>
<form id="idiomas_aptitudes" action="curriculum.php" method="post">
<input type="hidden" name="puesto" value="<?php echo $puesto; ?>">
<input type="hidden" name="pais" value="<?php echo $pais; ?>">
<input type="hidden" name="finicio" value="<?php echo $finicio; ?>">
<input type="hidden" name="ffinal" value="<?php echo $ffinal; ?>">
<input type="hidden" name="funcion1" value="<?php echo $funcion1; ?>">
<input type="hidden" name="funcion2" value="<?php echo $funcion2; ?>">
<input type="hidden" name="funcion3" value="<?php echo $funcion3; ?>">
<input type="hidden" name="funcion4" value="<?php echo $funcion4; ?>">
<input type="hidden" name="lugar_studio" value="<?php echo $lugar_studio; ?>">
<input type="hidden" name="paisEstudio" value="<?php echo $paisEstudio; ?>">
<input type="hidden" name="Ainicio" value="<?php echo $Ainicio; ?>">
<input type="hidden" name="Afinal" value="<?php echo $Afinal; ?>">
<input type="hidden" name="especializacion" value="<?php echo $especializacion; ?>">


<div class="container">
<label for="idioma">IDIOMAS</label>
    <div>
    <label class = "my_choice" for="idioma1">Inglés</label>
<input type="checkbox" id="idioma1" name="idioma1" value="Inglés"><br>
<label class = "my_choice" for="idioma2">portugués</label>
<input type="checkbox" id="idioma2" name="idioma2" value="Portugués"><br>
<label class = "my_choice" for="idioma3">Francés</label>
<input type="checkbox" id="idioma3" name="idioma3" value="Francés">

</div>
<br>
<label for="nivel">¿En que nivel?</label>
<div id="nivel">
  <input type="radio" id="basico" name="nivel" value="basico">
  <label class = "my_choice" for="basico">Básico</label>
  <input type="radio" id="intermedio" name="nivel" value="intermedio">
  <label class = "my_choice" for="intermedio">Intermedio</label>
  <input type="radio" id="avanzado" name="nivel" value="avanzado">
  <label class = "my_choice" for="avanzado">Avanzado</label>
  <input type="radio" id="fluido" name="nivel" value="fluido">
  <label class = "my_choice" for="fluido">Fluido</label>
</div>

<div class ="container">
	<label for="aptitud1">Aptitudes</label>
	<textarea  class = "my_text" id="aptitud1" name="aptitud1" rows="10" cols="100" required></textarea>

	<label for="aptitud2"></label>
	<textarea  class = "my_text" id="aptitud2" name="aptitud2" rows="10" cols="100" required></textarea>

	<label for="aptitud3"></label>
	<textarea  class = "my_text" id="aptitud3" name="aptitud3" rows="10" cols="100" required></textarea>

	<label for="aptitud4"></label>
	<textarea  class = "my_text" id="aptitud4" name="aptitud4" rows="10" cols="100" required></textarea>
	</div>

    <div class ="container">
	<label for="habilidad1">Habilidades</label>
	<textarea  class = "my_text" id="habilidad1" name="habilidad1" rows="10" cols="100" required></textarea>

	<label for="habilidad2"></label>
	<textarea  class = "my_text" id="habilidad2" name="habilidad2" rows="10" cols="100" required></textarea>

	<label for="habilidad3"></label>
	<textarea  class = "my_text" id="habilidad3" name="habilidad3" rows="10" cols="100" required></textarea>

	<label for="habilidad4"></label>
	<textarea  class = "my_text" id="habilidad4" name="habilidad4" rows="10" cols="100" required></textarea>
	</div>

<center><input class ="my_input" type="submit" value="Enviar"></center>
</form>
</body>
</html>