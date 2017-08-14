<?
 $fraseheader='No dejes que te ganen!';
//METAS
 $titulopagina= "Desapalabrados - Gana al apalabrados haciendo trampas";
 $metadescripcion ="Busca todas las palabras que puedes formar con tus letras de apalabrados";
 $metakeys = "Desapalabrados, apalabadros, trampas, trampas apalabrados, trucos, truco apalabrados, crea palabras, letras, angry words, palabras crusadas, chollo"; // SEPARADO POR COMAS
//METAS
 ?>
<html>
<head>

<title><? echo $titulopagina; ?></title>
<meta name="Description" content="<? echo $metadescripcion; ?>">
<meta name="Keywords" content="<? echo $metakeys; ?>">
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<script type="text/javascript" src="google.js"></script>
</head>
<body>
<div id="wrapper">
    <div id="header">
	<? require('header.php'); ?>
    </div>
    <div id="main">
        <div id="column_left">
	  <br>



<div>
<table border="0" cellspacing="0" cellpadding="0" align="center"><tr><td>
<?

$titol=utf8_decode('Selecciona Idioma');
$num_titol=strlen($titol);
for($z=0;$z<=$num_titol-1;$z++) {
if($titol[$z]==' ') { echo '<span class=espaciofichapequena>&nbsp;</span>'; } else {
echo '<span class=fichapequena>' .   strtr(strtoupper($titol[$z]), utf8_decode('áéíóúñ'), utf8_decode('ÁÉÍÓÚÑ')) . '</span>';  }
}
?></td></tr></table>
<br><table align="center" width="100%"><tr><td align="center">
<? $altura='96'; ?>
<a href="esp.php"><img src="banderas/es.png" alt="Español" width="<? echo $altura; ?>" height="<? echo $altura; ?>"></a>
<a href="cat.php"><img src="banderas/cat.png" alt="Catalán" width="<? echo $altura; ?>" height="<? echo $altura; ?>"></a>
<a href="#"><img src="banderas/uk.png" alt="Inglés" width="<? echo $altura; ?>" height="<? echo $altura; ?>"></a>
<a href="#"><img src="banderas/fr.png" alt="Francés" width="<? echo $altura; ?>" height="<? echo $altura; ?>"></a>
<a href="#"><img src="banderas/de.png" alt="Alemán" width="<? echo $altura; ?>" height="<? echo $altura; ?>"></a>
<a href="#"><img src="banderas/se.png" alt="Sueco" width="<? echo $altura; ?>" height="<? echo $altura; ?>"></a>
<a href="#"><img src="banderas/nl.png" alt="Holandés" width="<? echo $altura; ?>" height="<? echo $altura; ?>"></a>
</td></tr></table>
<table width="100%"><tr><td align="center"><img src="images/apkandroid.png"></td></tr></table>
</div>







        </div>
        <div id="column_right">
   <? include('colum_right.php'); ?>

        </div>
       <br style="clear:both;">
    </div>
    <div id="footer">
    <? include('footer.php'); ?>
    </div>
    <br>
</div>





</body>
</html>
