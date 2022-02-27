
<?php
function cuerpo($Nombre){
    
    print " 
    <main>
    <form action='procesaar.php' method='get' id='formulario'>
   
            <div class='Nombres'>
            <label for='Nombre' name='Nombre' value='Nombre' id='Nombre'>Nombre y Apellidos:</label>
                <input type='text' name='Nombre' id='Nombre' >
            </div>

            <br><br><br>

            <div class='plantita'>
            <h3 class='planta'>Tipos de plantas:</h3>
            <div class='plantas'>
            <br>
                <input type='radio' name='plantas' value='Plantas de exterior' > Plantas de exterior <br>
                <input type='radio' name='plantas' value='Plantas de interior' > Plantas de interior <br>
                <input type='radio' name='plantas' value='Árboles' > Árboles <br>
                <input type='radio' name='plantas' value='Flores' > Flores <br>
                <input type='radio' name='plantas' value='Huerto' > Huerto <br>
                <input type='radio' name='plantas' value='Semillas' > Semillas <br>
              </div> </div>
                <br> 
             <div class='car'>   
            <label for='caracteristica' id='caracteristica'>Características:</label><br> 
            <select name='caracteristicas' id='caracteristicas'>
                <option name=caracteristicas value='No has seleccionado nada' selected> ... </option>
                <option name=caracteristicas value='Con flores' > Con flores</option>
                <option name=caracteristicas value='Sin flores' > Sin flores</option>
                <option name=caracteristicas value='Planta pequeña'> Planta pequeña</option>
                <option name=caracteristicas value='Planta grande'> Planta grande</option>
                <option name=caracteristicas value='Colores vivos'> Colores vivos</option>
            </select> 
            </div>
            <br> 
            <br> 
            <br> 
            <div class='elige'>
            <h3 id='ele'>Eligue la planta que más te guste: </h3>
            <div id='checkbox'>
                <input type='checkbox' name='Bonsai' value='Bonsai' id='bonsai' > Bonsai. <br> 
                <input type='checkbox' name='Cactus' value='Cactus' id='cactus' > Cactus. <br> 
                <input type='checkbox' name='Helecho' value='Helecho' id='helecho' > Helecho. <br> 
                <input type='checkbox' name='Orquidea' value='Orquidea' id='Orquidea'> Orquídeas. <br> 
                <input type='checkbox' name='Perenne' value='Perenne' id='Perenne'> Perenne. <br> 
                <input type='checkbox' name='Palmera' value='Palmera' id='Palmera' > Palmeras. <br> 
                <input type='checkbox' name='Suculenta' value='Suculenta' id='Suculenta' > Suculentas. <br> 
                <input type='checkbox' name='Carnivora' value='Carnívora' id='Carnívora' > Carnívoras. <br> 
                <input type='checkbox' name='Huerto' value='Huerto' id='huerto' > Plantas de huerto. <br> 
           </div> 
           </div>

           <br><br><br><br>
           
           
           <div class='numero'>
           <label for='numero' name='numero' value='numero' id='numero'>¿Cuántas plantas tienes? </label> 
           <input type='number' name='numero' id='numero' max='40' min='0' >
           </div>
           
           <br><br><br>
       <div class='Puntuacion'>
       <label for='Puntuacion' name='Puntuacion' value='Puntuacion' id='Puntuacion'>Puntuación: </label> 
       <input type='number' name='Puntuacion' id='Puntuacion' max='5' min='0' >
       </div>
           <br><br><br><br>
           
            <div id='text'>
            <textarea id='mensaje' name='mensaje' rows='10' cols='70'>Dime las características que quieres para tu nueva planta, según lo que desees tener (exposición, color, tamaño,periodo de floración) 
o escribe alguna planta en concreto(Azuzenas,Begonia Elatior, Ficus, Yucca Elephantipes).
            </textarea>
            </div>
            <br><br><br><br>
            <button type='submit' name='submit' value='submit'>Enviar</button>
           </main> 

           <footer>
            <p>Ana Calderón Sanroque</p>
            <p>Entornos de desarrollo<p>
           </footer>
 ";
}

?>

