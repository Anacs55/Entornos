<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='./estilo/style.css' title='estilo.css' type='text/css'>
</head>
<body>
    <?php
    print "
    <header>
        <img class='imagen' src='./imagenes/log.png'>
        <h1 id='titulos'>Platitas</h1>\n
    </header>
    ";

echo "
<main>
    <div class='Nombres'><p> Nombre y apellidos:" .$_GET['Nombre']." </p> </div>
    <br><br><br>
    
    <div class='tipos'><p>Tipos de planta: " .$_GET['plantas']."</p></div>
    <br><br><br>

    <div class='caracteristicas'><p>Características:".$_GET['caracteristicas']."</p>
    <br><br><br>

    

    <div class='ele'><p>Plantas favoritas: </p></div>";
    if(isset($_GET['Bonsai'])){
        echo '<img src="./imagenes/bonsai.png" width="20%"> <br>';
    }
    if(isset($_GET['Cactus'])){
        echo '<img src="./imagenes/cactus.png" width="20%"> <br>';
    }
    if(isset($_GET['Helecho'])){
        echo '<img src="./imagenes/helecho.png" width="20%"> <br>';
    }
    if(isset($_GET['Orquidea'])){
        echo '<img src="./imagenes/Orquidea.png" width="20%"> <br>';
    }
    if(isset($_GET['Perenne'])){
        echo '<img src="./imagenes/perenne.png" width="20%"> <br>';
    }
    if(isset($_GET['Palmera'])){
        echo '<img src="./imagenes/palmera.png" width="20%"> <br>';
    }
    if(isset($_GET['Suculenta'])){
        echo '<img src="./imagenes/sucu.png" width="20%"> <br>';
    }
    if(isset($_GET['Carnivora'])){
        echo '<img src="./imagenes/carne.png" width="20%"> <br>';
    }
    if(isset($_GET['Huerto'])){
        echo '<img src="./imagenes/hue.png" width="20%"> <br>';
    }
 


    echo'<br><br><br>';
    echo'<div class num>';
    echo 'Tienes ' .$_GET['numero'].' planta/as<br>';
    for ($i=0; $i < $_GET['numero']; $i++) { 
        echo '<img  src="imagenes/planta.png" width="10%" >';
    }
    print'<br>';
    echo'</div>';
    //puntuación
    echo "<div class='puntuacion'><p>Puntuación:".$_GET['Puntuacion']."</p> </div>";
    $numeros= array('1','2','3','4','5');
    
    for ($i=0; $i < $_GET['Puntuacion']; $i++) { 
        if ($numeros == $_GET['Puntuacion']) {
      }
  }
  echo "<img src='imagenes/".$_GET['Puntuacion'].".png' width='50%'>";
  echo'<br><br>';
    
// CONTAR PALABRAS
$cadena=$_GET['mensaje'];
 
echo "Hay ".str_word_count($cadena, 0). " palabras en la cadena ";
 
$array_cadena = str_word_count($cadena, 1);
foreach ($array_cadena as $palabra) {
	echo $palabra;
	}

"</main>
";

?>
</body>
</html>