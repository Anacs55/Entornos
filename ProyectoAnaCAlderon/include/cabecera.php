<?php
function cabecera($titulo)
{
 print "<!DOCTYPE html>\n";
 print "<html lang=\"es\">\n";
 print "<head>\n";
 print " <meta charset=\"utf-8\">\n";
 print " <title>$titulo</title>\n";
 print " <meta name=\"viewport\" content=\"width=device-width,
initial-scale=1.0\">\n";
 print " <link rel='stylesheet' href='./estilo/estilo.css' title='estilo.css' type='text/css'>\n";
 print "</head>\n";
 print "\n";
 print "<body>\n";
print "
<div id='arriba'>
    <img class='imagen' src='./imagenes/log.png'>
    <h1 id='titulos'> $titulo</h1>\n
</div>
";


}


?>
