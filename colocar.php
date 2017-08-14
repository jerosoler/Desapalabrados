
<b>presntacion.html</b>

<pre>
<code>
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Taxi Corp&lt;/title&gt;
&lt;link rel="stylesheet" type="text/css" href="stylesheet.css"&gt;
&lt;script src="js/jquery-1.7.2.js"&gt;&lt;/script&gt;
&lt;script&gt;
var left = 0;
function animacion(){
left +=3;
$("#presentacion").css({"left":""+left+"px"});
if (left&lt;400) { setTimeout("animacion()",20); }
}
&lt;/script&gt;
&lt;/head&gt;
&lt;body onload="animacion()"&gt;
&lt;div id="presentacion"&gt;
&lt;a href="index.html"&gt;Pulse aquí para entrar en la Web&lt;/a&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;

</code>
</pre>


<b>index.html</b>

<pre>
<code>
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Taxi Corp&lt;/title&gt;
&lt;link rel="stylesheet" type="text/css" href="stylesheet.css"&gt;
&lt;script src="js/jquery-1.7.2.js"&gt;&lt;/script&gt;

&lt;/head&gt;

&lt;frameset cols="180,*" FRAMEBORDER=0 FRAMESPACING=0 BORDER=0&gt;
  &lt;frame src="menu.php" name="menu" noresize &gt;
  &lt;frame src="contenido.php" name="contenido"&gt;
&lt;/frameset&gt;

&lt;/html&gt; 
</code>
<pre>


<b>contenido.php</b>

<pre>
<code>
&lt;html&gt;
&lt;head&gt;
&lt;link rel="stylesheet" type="text/css" href="stylesheet.css"&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h3&gt;TAXI CORP&lt;/h3&gt;&lt;br&gt;
&lt;h3&gt;SU COMPANÍA DE TAXIS&lt;/h3&gt;
&lt;hr&gt;
&lt;?php 
echo date("d")." de ";
$mes = date("n");
switch ($mes){
 case 1:
 echo "Enero";
 break;

case 2:
 echo "Febrero";
 break;

case 3:
 echo "Marzo";
 break;

case 4:
 echo "Abril";
 break;

case 5:
 echo "Mayo";
 break;

case 6:
 echo "Junio";
 break;

case 7:
 echo "Julio";
 break;

case 8:
 echo "Agosto";
 break;

case 9:
 echo "Septiembre";
 break;

case 10:
 echo "Octubre";
 break;

case 11:
 echo "Noviembre";
 break;

case 12:
 echo "Disiembre";
 break;
}
echo " de " .date("Y");
?&gt;
&lt;/body&gt;
&lt;/html&gt;
 
</code>
</pre>


<b>menu.php</b>

<pre>
<code>
&lt;html&gt;
&lt;head&gt;
&lt;link rel="stylesheet" type="text/css" href="stylesheet.css"&gt;
&lt;/head&gt;
&lt;body&gt;
TAXI CORP&lt;br&gt;
&lt;a href="presentacion.html" target="contenido"&gt;Presentacion&lt;/a&gt;
&lt;/body&gt;
&lt;/html&gt;

</code>
</pre>



<b>stylesheet.css</b>

<pre>
<code>
BODY {
  background: #000;
  color: #FFF;
}

#presentacion {
  position: absolute;
  top: 200px;
  left: -350px;
  width: 400px;
  height: 400px;
  background: #F90;
  }
</code>
</pre>