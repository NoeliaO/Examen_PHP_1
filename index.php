<?php
session_start();
include 'head.php';                                   

echo'<center><img src="images/alta_incidencia.png" width="600" height="300" alt="incidencia"/></center>';

$i=1;
$incidencias= array (
    $_SESSION['autoincremento'][0+$i] => array ("Si","Vandalismo","25-10-2020 10:37:43","Plaza mayor","193.12.56.25","Farola rota"),
    $_SESSION['autoincremento'][1+$i] => array ("Si","Basuras","26-10-2020 12:07:23","C/Pelicano 25","131.120.121.125","Contenedor basura roto"),
    $_SESSION['autoincremento'][2+$i] => array ("Si","Vandalismo","27-10-2020 00:07:23","C/Cigueña 5","145.10.11.15","Banco roto")
    
);
$_SESSION['incidencias']=$incidencias;
$_SESSION['autoincremento']=$codigo;


//$_SESSION['autoincremento']++
//mediante este codigo hacemos incrementos de números automaticos
///foreach (range(0,$step=1) as $numero) {
   // echo $numero;
//}
//array_combine(range(11,14),range(1,4));
//$incidencias[]=array(1,"Si","Vandalismo","25-10-2020 10:37:43","Plaza mayor","193.12.56.25","Farola rota");
//$incidencias[]=array(2,"Si","Basuras","26-10-2020 12:07:23","C/Pelicano 25","131.120.121.125","Contenedor basura roto");
//$incidencias[]=array(3,"Si","Vandalismo","27-10-2020 00:07:23","C/Cigueña 5","145.10.11.15","Banco roto");


include 'pie.php';