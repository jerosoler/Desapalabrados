<? require('conex.php');  
$idioma='Español';
$pag='esp.php';
$textobuscar='Buscar';
$textobuscadas='Letras buscadass: ';
$placeholder="Introduce letras";
//BD
$tabla='espanol';
$columna='palabra';
//BD
$bandera='es.png';
//METAS
 $titulopagina= "Desapalabrados - Gana al apalabrados haciendo trampas - Español";
 $metadescripcion ="Busca todas las palabras que puedes formar con tus letras de apalabrados en español";
 $metakeys = "Desapalabrados, apalabadros, trampas, trampas apalabrados, trucos, truco apalabrados, crea palabras, letras, angry words, palabras crusadas, chollo, español, spanish"; // SEPARADO POR COMAS
//METAS


?>


<html>
<head>

<title><? echo $titulopagina; ?></title>
<meta name="Description" content="<? echo $metadescripcion; ?>">
<meta name="Keywords" content="<? echo $metakeys; ?>">
<link rel="shortcut icon" href="favicon.ico"/>

<link rel="stylesheet" type="text/css" href="stylesheet.css">

<meta name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />

</head>
<body> 

<div id="divheader">
	
	
<table align="center" cellspacing="2" cellpadding="2"><tr><td height="8"></td></tr><tr><td>
	<span class="fichatitulo"  onClick="javascrip:location.href='index.php';">D</span>
	<span class="fichatitulo2" onClick="javascrip:location.href='index.php';">E</span>
	<span class="fichatitulo" onClick="javascrip:location.href='index.php';">S</span>
	<span class="fichatitulo2" onClick="javascrip:location.href='index.php';">A</span>
	<span class="fichatitulo" onClick="javascrip:location.href='index.php';">P</span>
	<span class="fichatitulo2" onClick="javascrip:location.href='index.php';">A</span>
	<span class="fichatitulo" onClick="javascrip:location.href='index.php';">L</span>
	<span class="fichatitulo2" onClick="javascrip:location.href='index.php';">A</span>
	<span class="fichatitulo" onClick="javascrip:location.href='index.php';">B</span>
	<span class="fichatitulo2" onClick="javascrip:location.href='index.php';">R</span>
	<span class="fichatitulo" onClick="javascrip:location.href='index.php';">A</span>
	<span class="fichatitulo2" onClick="javascrip:location.href='index.php';">D</span>
	<span class="fichatitulo" onClick="javascrip:location.href='index.php';">O</span>
	<span class="fichatitulo2" onClick="javascrip:location.href='index.php';">S</span>
	</td></tr>
	<tr><td align="left" class="minifraseheader"><br><? echo $fraseheader; ?></td></tr></table> 

	

</div>

<div id="divmain">
<p width="5"></p>
<?

$titol=utf8_decode($idioma);
$num_titol=strlen($titol);
for($z=0;$z<=$num_titol-1;$z++) {
echo '<span class=fichapequena>' .   strtr(strtoupper($titol[$z]), utf8_decode('áäàéëèíïìóöòúüùñç'), utf8_decode('ÁÄÀÉËÈÍÏÌÓÖÒÚÜÙÑÇ')) . '</span>'; 
}
?>
&nbsp;<img src="banderas/<?echo $bandera;?>" width="25" height="25">
<br><br>
<div><table valign="top" cellspacing="0" cellpadding="0" border="0"><tr><td>
<form action="<? echo $pag; ?>" method="post">
<input type="text" name="id_palabra" placeholder="<? echo $placeholder; ?> " value='<? if($_POST['id_palabra']) { echo $_POST['id_palabra']; }?>'>
<input type="submit" name="enviar" value="<? echo $textobuscar; ?>">
</form></td></tr></table>
</div>
<?


if ($_POST['id_palabra']) { 
	
//$cadena = strtr($cadena, "áäàéëèíïìóöòúüùñ", "aaaeeeiiiooouuun");


$original=strtr(strtolower($_POST['id_palabra']), utf8_decode("ÁÄÀÉËÈÍÏÌÓÖÒÚÜÙ"), utf8_decode("áäàéëèíïìóöòúüù"));
$original3 = strtr($original, utf8_decode("aaaeeeiiiooouuu"), utf8_decode("áäàéëèíïìóöòúüù"));

$original2= $original3;


$palabra=$original2;
$abcedario = 'abcdefghijklmnopqrstuvwxyz';
$newabc[0] = $abcedario;
$numletras = strlen($palabra);





$la=0;
$lb=0;
$lc=0;
$ld=0;
$le=0;
$lf=0;
$lg=0;
$lh=0;
$li=0;
$lj=0;
$lk=0;
$ll=0;
$lm=0;
$ln=0;
$lo=0;
$lp=0;
$lq=0;
$lr=0;
$ls=0;
$lt=0;
$lu=0;
$lv=0;
$lw=0;
$lx=0;
$ly=0;
$lz=0;

//$la+=1;




$busqueda = "";
for($i=0;$i<=$numletras-1;$i++) {
$letra[$i]=$palabra[$i];

//NEW CODE 
 if ($letra[$i]==utf8_decode('á')) { 
$busqueda .= "AND ((palabra LIKE '%a%') OR (palabra NOT LIKE '%a%')) "; 
$newabc[$i] = str_replace('a','',$newabc[$i]);
$la+=1;
} 
 if ($letra[$i]==utf8_decode('ä')) { 
$busqueda .= "AND ((palabra LIKE '%a%') OR (palabra NOT LIKE '%a%')) "; 
$newabc[$i] = str_replace('a','',$newabc[$i]);
$la+=1;
} 
 if ($letra[$i]==utf8_decode('à')) { 
$busqueda .= "AND ((palabra LIKE '%a%') OR (palabra NOT LIKE '%a%')) "; 
$newabc[$i] = str_replace('a','',$newabc[$i]);
$la+=1;
} 

 if ($letra[$i]==utf8_decode('é')) { 
$busqueda .= "AND ((palabra LIKE '%e%') OR (palabra NOT LIKE '%e%')) "; 
$newabc[$i] = str_replace('e','',$newabc[$i]);
$le+=1;
} 
 if ($letra[$i]==utf8_decode('ë')) { 
$busqueda .= "AND ((palabra LIKE '%e%') OR (palabra NOT LIKE '%e%')) "; 
$newabc[$i] = str_replace('e','',$newabc[$i]);
$le+=1;
} 
 if ($letra[$i]==utf8_decode('è')) { 
$busqueda .= "AND ((palabra LIKE '%e%') OR (palabra NOT LIKE '%e%')) "; 
$newabc[$i] = str_replace('e','',$newabc[$i]);
$le+=1;
} 
 if ($letra[$i]==utf8_decode('ú')) { 
$busqueda .= "AND ((palabra LIKE '%u%') OR (palabra NOT LIKE '%u%')) "; 
$newabc[$i] = str_replace('u','',$newabc[$i]);
$lu+=1;
}
if ($letra[$i]==utf8_decode('ü')) { 
$busqueda .= "AND ((palabra LIKE '%u%') OR (palabra NOT LIKE '%u%')) "; 
$newabc[$i] = str_replace('u','',$newabc[$i]);
$lu+=1;
} 
if ($letra[$i]==utf8_decode('ù')) { 
$busqueda .= "AND ((palabra LIKE '%u%') OR (palabra NOT LIKE '%u%')) "; 
$newabc[$i] = str_replace('u','',$newabc[$i]);
$lu+=1;
}  

 if ($letra[$i]==utf8_decode('ó')) { 
$busqueda .= "AND ((palabra LIKE '%o%') OR (palabra NOT LIKE '%o%')) "; 
$newabc[$i] = str_replace('o','',$newabc[$i]);
$lo+=1;
} 
if ($letra[$i]==utf8_decode('ö')) { 
$busqueda .= "AND ((palabra LIKE '%o%') OR (palabra NOT LIKE '%o%')) "; 
$newabc[$i] = str_replace('o','',$newabc[$i]);
$lo+=1;
} 
if ($letra[$i]==utf8_decode('ò')) { 
$busqueda .= "AND ((palabra LIKE '%o%') OR (palabra NOT LIKE '%o%')) "; 
$newabc[$i] = str_replace('o','',$newabc[$i]);
$lo+=1;
} 

 if ($letra[$i]==utf8_decode('í')) { 
$busqueda .= "AND ((palabra LIKE '%i%') OR (palabra NOT LIKE '%i%')) "; 
$newabc[$i] = str_replace('i','',$newabc[$i]);
$li+=1;
} 
 if ($letra[$i]==utf8_decode('ï')) { 
$busqueda .= "AND ((palabra LIKE '%i%') OR (palabra NOT LIKE '%i%')) "; 
$newabc[$i] = str_replace('i','',$newabc[$i]);
$li+=1;
} 
 if ($letra[$i]==utf8_decode('ì')) { 
$busqueda .= "AND ((palabra LIKE '%i%') OR (palabra NOT LIKE '%i%')) "; 
$newabc[$i] = str_replace('i','',$newabc[$i]);
$li+=1;
} 
// NEW CODE



$newabc[$i+1] =str_replace($letra[$i],'',$newabc[$i]);
${l.$letra[$i]}+=1; 

$busqueda .= "AND ((palabra LIKE '%". $letra[$i]. "%') OR (palabra NOT LIKE '%". $letra[$i]. "%')) ";

}

$nuevoabc = $newabc[$numletras];
$nuevoabc2[0] = $nuevoabc;
$numabc = strlen($nuevoabc);

$nobusqueda = "";
for($i=0;$i<=$numabc-1;$i++) {
$abcletra[$i]=$nuevoabc[$i];
$nuevoabc2[$i+1] = str_replace($abcletra[$i],'',$nuevoabc2[$i]);
$nobusqueda .= "AND palabra NOT LIKE '%". $abcletra[$i]."%' ";
}





//$sql_query = "SELECT * FROM $tabla WHERE CHARACTER_LENGTH(palabra)<=7 order by CHARACTER_LENGTH(palabra) DESC ";


$sql_query = "SELECT * FROM $tabla WHERE CHARACTER_LENGTH(palabra)<=". $numletras ." ".$busqueda." " .$nobusqueda . " order by CHARACTER_LENGTH(palabra) DESC ";
$sql_query = mysql_query($sql_query); 
while($row = mysql_fetch_array($sql_query)) {

$palabreja=strtr(strtolower($row['palabra']), utf8_decode("ÁÄÀÉËÈÍÏÌÓÖÒÚÜÙ"), utf8_decode("áäàéëèíïìóöòúüù"));
$numpalabra = strlen($palabreja);

$puntos=0;




for($c=0;$c<=$numpalabra-1;$c++) {
$letraja[$c]=$palabreja[$c];
/*
//NEW CODE
if (substr_count($palabreja,utf8_decode('á'))>=1) {
    
   if($letraja[$c]==utf8_decode('á')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'a')<=$la)  { $filtro +=0;
    } else { $filtro +=1;} 
   } elseif(substr_count($palabreja,$letraja[$c])<=${l.$letraja[$c]})
     { $filtro += 0; } else { $filtro += 1; } 
}
if (substr_count($palabreja,utf8_decode('ä'))>=1) {
    
   if($letraja[$c]==utf8_decode('ä')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'a')<=$la)  { $filtro +=0;
    } else { $filtro +=1;} 
   } elseif(substr_count($palabreja,$letraja[$c])<=${l.$letraja[$c]})
     { $filtro += 0; } else { $filtro += 1; } 
}
if (substr_count($palabreja,utf8_decode('à'))>=1) {
    
   if($letraja[$c]==utf8_decode('à')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'a')<=$la)  { $filtro +=0;
    } else { $filtro +=1;} 
   } elseif(substr_count($palabreja,$letraja[$c])<=${l.$letraja[$c]})
     { $filtro += 0; } else { $filtro += 1; } 
}

if (substr_count($palabreja,utf8_decode('é'))>=1) {
    
   if($letraja[$c]==utf8_decode('é')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'e')<=$le)  { $filtro +=0;
    } else { $filtro +=1;} 
   } elseif(substr_count($palabreja,$letraja[$c])<=${l.$letraja[$c]})
     { $filtro += 0; } else { $filtro += 1; } 
}
if (substr_count($palabreja,utf8_decode('ë'))>=1) {
    
   if($letraja[$c]==utf8_decode('ë')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'e')<=$le)  { $filtro +=0;
    } else { $filtro +=1;} 
   } elseif(substr_count($palabreja,$letraja[$c])<=${l.$letraja[$c]})
     { $filtro += 0; } else { $filtro += 1; } 
}
if (substr_count($palabreja,utf8_decode('è'))>=1) {
    
   if($letraja[$c]==utf8_decode('è')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'e')<=$le)  { $filtro +=0;
    } else { $filtro +=1;} 
   } elseif(substr_count($palabreja,$letraja[$c])<=${l.$letraja[$c]})
     { $filtro += 0; } else { $filtro += 1; } 
}

if (substr_count($palabreja,utf8_decode('ó'))>=1) {
    
   if($letraja[$c]==utf8_decode('ó')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'o')<=$lo)  { $filtro +=0;
    } else { $filtro +=1;} 
   } elseif(substr_count($palabreja,$letraja[$c])<=${l.$letraja[$c]})
     { $filtro += 0; } else { $filtro += 1; } 
}
if (substr_count($palabreja,utf8_decode('ö'))>=1) {
    
   if($letraja[$c]==utf8_decode('ö')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'o')<=$lo)  { $filtro +=0;
    } else { $filtro +=1;} 
   } elseif(substr_count($palabreja,$letraja[$c])<=${l.$letraja[$c]})
     { $filtro += 0; } else { $filtro += 1; } 
}
if (substr_count($palabreja,utf8_decode('ò'))>=1) {
    
   if($letraja[$c]==utf8_decode('ò')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'o')<=$lo)  { $filtro +=0;
    } else { $filtro +=1;} 
   } elseif(substr_count($palabreja,$letraja[$c])<=${l.$letraja[$c]})
     { $filtro += 0; } else { $filtro += 1; } 
}


if (substr_count($palabreja,utf8_decode('ú'))>=1) {
    
   if($letraja[$c]==utf8_decode('ú')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'u')<=$lu)  { $filtro +=0;
    } else { $filtro +=1;} 
   } elseif(substr_count($palabreja,$letraja[$c])<=${l.$letraja[$c]})
     { $filtro += 0; } else { $filtro += 1; } 
}
if (substr_count($palabreja,utf8_decode('ü'))>=1) {
    
   if($letraja[$c]==utf8_decode('ü')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'u')<=$lu)  { $filtro +=0;
    } else { $filtro +=1;} 
   } elseif(substr_count($palabreja,$letraja[$c])<=${l.$letraja[$c]})
     { $filtro += 0; } else { $filtro += 1; } 
}
if (substr_count($palabreja,utf8_decode('ù'))>=1) {
    
   if($letraja[$c]==utf8_decode('ù')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'u')<=$lu)  { $filtro +=0;
    } else { $filtro +=1;} 
   } elseif(substr_count($palabreja,$letraja[$c])<=${l.$letraja[$c]})
     { $filtro += 0; } else { $filtro += 1; } 
}


if (substr_count($palabreja,utf8_decode('í'))>=1) {
    
   if($letraja[$c]==utf8_decode('í')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'i')<=$li)  { $filtro +=0;
    } else { $filtro +=1;} 
   } elseif(substr_count($palabreja,$letraja[$c])<=${l.$letraja[$c]})
     { $filtro += 0;  } else { $filtro += 1; } 
}
if (substr_count($palabreja,utf8_decode('ï'))>=1) {
    
   if($letraja[$c]==utf8_decode('ï')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'i')<=$li)  { $filtro +=0;
    } else { $filtro +=1;} 
   } elseif(substr_count($palabreja,$letraja[$c])<=${l.$letraja[$c]})
     { $filtro += 0;  } else { $filtro += 1; } 
}
if (substr_count($palabreja,utf8_decode('ì'))>=1) {
    
   if($letraja[$c]==utf8_decode('ì')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'i')<=$li)  { $filtro +=0;
    } else { $filtro +=1;} 
   } elseif(substr_count($palabreja,$letraja[$c])<=${l.$letraja[$c]})
     { $filtro += 0;  } else { $filtro += 1; } 
}



*/


    
   if($letraja[$c]==utf8_decode('á')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'a')<=$la)  { $filtro +=0;
    } else { $filtro +=1;} 
   }

    
   elseif($letraja[$c]==utf8_decode('ä')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'a')<=$la)  { $filtro +=0;
    } else { $filtro +=1;} 
    }
   elseif($letraja[$c]==utf8_decode('à')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'a')<=$la)  { $filtro +=0;
    } else { $filtro +=1;} 
    }
   elseif($letraja[$c]==utf8_decode('é')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'e')<=$le)  { $filtro +=0;
    } else { $filtro +=1;} 
    }
   elseif($letraja[$c]==utf8_decode('ë')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'e')<=$le)  { $filtro +=0;
    } else { $filtro +=1;} 
    }
   elseif($letraja[$c]==utf8_decode('è')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'e')<=$le)  { $filtro +=0;
    } else { $filtro +=1;} 
    }
   elseif($letraja[$c]==utf8_decode('ó')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'o')<=$lo)  { $filtro +=0;
    } else { $filtro +=1;} 
    }
   elseif($letraja[$c]==utf8_decode('ö')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'o')<=$lo)  { $filtro +=0;
    } else { $filtro +=1;} 
    }
   elseif($letraja[$c]==utf8_decode('ò')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'o')<=$lo)  { $filtro +=0;
    } else { $filtro +=1;} 
    }
   
   elseif($letraja[$c]==utf8_decode('ú')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'u')<=$lu)  { $filtro +=0;
    } else { $filtro +=1;} 
    }
   elseif($letraja[$c]==utf8_decode('ü')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'u')<=$lu)  { $filtro +=0;
    } else { $filtro +=1;} 
    }
   elseif($letraja[$c]==utf8_decode('ù')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'u')<=$lu)  { $filtro +=0;
    } else { $filtro +=1;} 
    }
   elseif($letraja[$c]==utf8_decode('í')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'i')<=$li)  { $filtro +=0;
    } else { $filtro +=1;} 
    }
   elseif($letraja[$c]==utf8_decode('ï')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'i')<=$li)  { $filtro +=0;
    } else { $filtro +=1;} 
    }
   elseif($letraja[$c]==utf8_decode('ì')) {
     if(substr_count($palabreja,$letraja[$c]) + substr_count($palabreja,'i')<=$li)  { $filtro +=0;
    } else { $filtro +=1;} 
    }
//NEW CODE 
//$filtro .= "&& (".substr_count."($".palabreja.",'".$letraja[$c]."')<=" .${l.$letraja[$c]}.") ";
//$filtro .= "&& (".substr_count."(".$palabreja.",'".$letraja[$c]."')<=" .${l.$letraja[$c]}.") ";
//$filtro .= '&& (substr_count($palabreja,$letraja[$c])<=${l.$letraja[$c]})';
elseif(substr_count($palabreja,$letraja[$c])<=${l.$letraja[$c]})
{ $filtro += 0;  } else { $filtro += 1; }

}


if($filtro==0)  {
$palabrejaletras = strlen($palabreja);
if((strlen($palabreja))!==1) {  
for($h=0;$h<=$palabrejaletras-1;$h++) {

echo '<span class=fichapequena>' .   strtr(strtoupper($palabreja[$h]), utf8_decode('áäàéëèíïìóöòúüùñç'), utf8_decode('ÁÄÀÉËÈÍÏÌÓÖÒÚÜÙÑÇ')) . '</span>';

//PUNTOS
if($palabreja[$h]=='a') { $puntos +=1;}  
if($palabreja[$h]=='b') { $puntos +=3;}
if($palabreja[$h]=='c') { $puntos +=3;}
if($palabreja[$h]=='d') { $puntos +=2;}
if($palabreja[$h]=='e') { $puntos +=1;}
if($palabreja[$h]=='f') { $puntos +=4;}
if($palabreja[$h]=='g') { $puntos +=2;}
if($palabreja[$h]=='h') { $puntos +=4;}
if($palabreja[$h]=='i') { $puntos +=1;}
if($palabreja[$h]=='j') { $puntos +=8;}
if($palabreja[$h]=='k') { $puntos +=0;}
if($palabreja[$h]=='l') { $puntos +=1;}
if($palabreja[$h]=='m') { $puntos +=3;}
if($palabreja[$h]=='n') { $puntos +=1;}
if($palabreja[$h]=='o') { $puntos +=1;}
if($palabreja[$h]=='p') { $puntos +=3;}
if($palabreja[$h]=='q') { $puntos +=5;}
if($palabreja[$h]=='r') { $puntos +=1;}
if($palabreja[$h]=='s') { $puntos +=1;}
if($palabreja[$h]=='t') { $puntos +=1;}
if($palabreja[$h]=='u') { $puntos +=1;}
if($palabreja[$h]=='v') { $puntos +=4;}
if($palabreja[$h]=='w') { $puntos +=0;}
if($palabreja[$h]=='x') { $puntos +=8;}
if($palabreja[$h]=='y') { $puntos +=4;}
if($palabreja[$h]=='z') { $puntos +=10;}
if($palabreja[$h]==utf8_decode('ñ')) { $puntos +=8;}
if($palabreja[$h]==utf8_decode('á')) { $puntos +=1;}
if($palabreja[$h]==utf8_decode('ä')) { $puntos +=1;}
if($palabreja[$h]==utf8_decode('à')) { $puntos +=1;}
if($palabreja[$h]==utf8_decode('é')) { $puntos +=1;}
if($palabreja[$h]==utf8_decode('ë')) { $puntos +=1;}
if($palabreja[$h]==utf8_decode('è')) { $puntos +=1;}
if($palabreja[$h]==utf8_decode('í')) { $puntos +=1;}
if($palabreja[$h]==utf8_decode('ï')) { $puntos +=1;}
if($palabreja[$h]==utf8_decode('ì')) { $puntos +=1;}
if($palabreja[$h]==utf8_decode('ó')) { $puntos +=1;}
if($palabreja[$h]==utf8_decode('ö')) { $puntos +=1;}
if($palabreja[$h]==utf8_decode('ò')) { $puntos +=1;}
if($palabreja[$h]==utf8_decode('ú')) { $puntos +=1;}
if($palabreja[$h]==utf8_decode('ü')) { $puntos +=1;}
if($palabreja[$h]==utf8_decode('ù')) { $puntos +=1;}

//PUNTOS
}
echo "<div id=puntos>" .$puntos . "</div>";
echo "<p></p><br style='clear:both;'>"; }
//echo '' .$palabreja . '<br>'; 
}
else {  }





/*
$zzz='1';
if ($zzz='1'){
echo '<b>' . $palabreja .'</b>';
} else { echo 'no'; }
*/
/* EJEMPLO  de como tiene que ser 

if ((substr_count($row['palabra'],'m')<=2) && (substr_count($row['palabra'],'e')<=1))
{ echo $row['palabra']. '<br>'; } else {}

FIN DE EJEMPLO  */

$filtro = 0;
} //END WHILE










} else {  }


?>
<p></p>
</div>

<div id="divfooter">
<script type="text/javascript"><!--
  // XHTML should not attempt to parse these strings, declare them CDATA.
  /* <![CDATA[ */
  window.googleAfmcRequest = {
    client: 'ca-mb-pub-8751282170363047',
    format: '320x50_mb',
    output: 'HTML',
    slotname: '2921443936',
  };
  /* ]]> */
//--></script>
<script type="text/javascript"    src="http://pagead2.googlesyndication.com/pagead/show_afmc_ads.js"></script>
</div>

</body>
</html>