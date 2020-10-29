<?php
session_start();
include 'head.php';
//imprimimos los valores del array
//echo '<pre>';
//var_dump($_SESSION['incidencias']);
//echo '</pre>';                                       

if (isset($_REQUEST['borrar'])){
    $codigo=$_SESSION['autoincremento'];
    //contador antes de borrar
    $contador_antes=count($_SESSION['incremento']);
    //borro en el array
    unset($_SESSION['incremento'][$codigo]);
    //contador despues de borrar
    $contador_despues=count($_SESSION['incremento']);
    //si el contador de antes y despues es igual
    if ($contador_antes==$contador_despues){
      echo '<script>alert("no se encuentra esta incidencia");</script>';
    }

}
print' 
            <strong>INTRODUCE EL IDENTIFICADOR DE LA INCIDENCIA A BORRAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              
              
              <tr><td align="right"><strong>Num Incidencia :</strong></td><td>
              <div align="left">
                    <input type="text" name="num_incidencia"/>
              </div></td></tr>
              
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="borrar" type="submit" id="borrar" value="Dar de Baja"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>';
include 'pie.php';