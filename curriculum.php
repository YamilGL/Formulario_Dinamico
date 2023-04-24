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

    //tercera pagina idiomas/aptitudes
    $idioma1 = isset($_POST['idioma1']) ? $_POST['idioma1'] : '';
    $idioma2 = isset($_POST['idioma2']) ? $_POST['idioma2'] : '';
    $idioma3 = isset($_POST['idioma3']) ? $_POST['idioma3'] : '';
    $nivel = isset($_POST["nivel"]) ? $_POST['nivel'] : ' ';
    $aptitud1 = $_POST["aptitud1"];
    $aptitud2 = $_POST["aptitud2"];
    $aptitud3 = $_POST["aptitud3"];
    $aptitud4 = $_POST["aptitud4"];
    $habilidad1 = $_POST["habilidad1"];
    $habilidad2 = $_POST["habilidad2"];
    $habilidad3 = $_POST["habilidad3"];
    $habilidad4 = $_POST["habilidad4"];
    ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Curriculum vitae</title>
    <meta  charset = "utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      .grid {
  display: grid;
  grid-template-columns: 25% 75%;
  gap: 10px;

  max-width: 1000px;
  margin: 0 auto;
 
}    

      .grid-header {
          font-size: 20px;
          background-color: rgb(88, 88, 88);
          padding: 10px;
          margin: 0 auto;
          max-width: 980px;
         
      }
      .grid-item-l {
        background-color: rgb(242, 242, 242);
          font-size: 20px;
          padding: 20px;
          text-align: left;
          
      }
      .grid-item-r {
          font-size: 20px;
          padding: 20px;
          text-align: left;
      }
    </style>
  </head>
  <body>
    <div class="grid-header">
        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTiM1rweE2Spk3O_JwPNGl7t9TYpJZVpv1pHetgjsMCTJLjin8C" style="width: 200px; height: 200px;border-radius: 50%;margin-right: 100px;margin-left: 40px;">
        <div style="display:inline-block;" >
            <center><h1 style="color:rgb(213, 213, 213);">José Martínez</h1>
            <h2 style="color:rgb(175, 175, 175);">PUESTO OCUPADO/BUSCANDO</h2>    </center>
              
            </div>
        </div>
    <div class="grid">
      <div class="grid-item-l">
        <u><h2>CONTACTO</h2></u>
    <p> 999 999 999</p>
    <p> jose.martinez@gmail.com</p>
    <p> México DF</p>
    <p> linkendin,com/se.martinez</p>


    <u><h2>IDIOMAS</h2></u>
    <p> Español: nativo</p>
    <p><?php if($idioma1 =="Inglés"){ echo $idioma1; echo ": ".$nivel;}?></p>
    <p><?php if($idioma2 =="Portugués"){ echo $idioma2; echo ": ".$nivel;}?></p>
    <p><?php if($idioma3 =="Francés"){ echo $idioma3; echo ": ".$nivel;}?></p>


    <u><h2>APTITUDES</h2></u>
    <ul type="disk">
    <li><?php echo $aptitud1;?></li>
    <li><?php echo $aptitud2;?></li>
    <li><?php echo $aptitud3;?></li>
    <li><?php echo $aptitud4;?></li>
</ul>

    <u><h2>HABILIDADES</h2></u>
    <ul type="disk">
    <li><?php echo $habilidad1;?></li>
    <li><?php echo $habilidad2;?></li>
    <li><?php echo $habilidad3;?></li>
    <li><?php echo $habilidad4;?></li>
    </ul>


    <u><h2>OTROS INTERESES</h2></u>
    <ul type="disk">
    <li> Creador de vincanas</li>
    <li> paseos ecologicos grupales</li>
    <li> Lectura grupal en inglés</li>
    </ul>



      </div>
      <div class="grid-item-r" >
        <u><h2>PERFIL</h2></u>
    <p> Trabajo social con 4 años de experiencia en proyectos colectivos<br>
      Mi objetivo es lograr que los jovenes obtengan acceso<br> 
      a la educacion superior mediante logros deportivos </p>


      <u><h2>EXPERIENCIA LABORAL</h2></u>  
    <b><h3><?php echo $puesto;?></h3></b>
    <p style="color:rgb(128, 128, 128);"><b><?php echo $pais;?>,</b>| <?php echo $finicio."/";  echo  $ffinal;?></p>
    <ul type="disk"> 
    <li> <?php  echo $funcion1?></li>
    <li> <?php  echo $funcion2?> </li>
    <li><?php  echo $funcion3?></li>
    <li> <?php  echo $funcion4?> </li>
    </ul>
          
  <b><h3>Trabajador Social</h3></b>
    <p style="color:rgb(128, 128, 128);"><b>MexicoDF,</b>| 2020-2022</p>
    <ul type="disk">
    <li> Funciones para seguimiento de casos para jovenes con problemas de<br>
    adicciones.</li>
    <li> Capacitaciones e integracion vinculadas a medidas preventivas</li>
    <li> Recopilacion de evidencias para auditorias y progrmas sociales</li>
    </ul>

  <b><h3>Trabajador Social(prácticas)</h3></b>
    <p style="color:rgb(128, 128, 128);"><b>Zaragoza, España</b>| 2019-2020</p>
    <ul type="disk">
    <li> Profesor de lengua española e inglesa para jovenes migrantes.</li>
    <li> Monitor de actividades ecologicas con adolescentes</li>
    <li> Corrdinador de areas deportivas</li>
    </ul>


    <u><h2>FORMACION</h2></u> 
    <h3><b><?php echo $especializacion?></b></h3>
    <p style="color:rgb(128, 128, 128);"><b><?php echo $lugar_studio.','.$paisEstudio;?></b>| <?php echo $Ainicio.'-'; echo $Afinal;?></p>
    <h3><b>Licenciatura Profesional</b></h3>
    <p style="color:rgb(128, 128, 128);"><b>Universidad de la frontera, Mexico DF</b>| 2011-2012</p>
      </div>
    </div>
    

  </body>
</html>