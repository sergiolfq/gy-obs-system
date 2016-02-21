 <meta http-equiv="content-type" content="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet; charset=UTF-8">

 
<table  >
<tr><td class='text'><?php echo $titulo; ?> </td></tr>
<tr><td class='text'>Fecha de emision: <td> <td><?php echo date("Y-m-d");?></td></tr>
<tr><td class='text'> Categorias </td>  <td class="text"> Valores </td>  </tr>



<?php 

for ($i=0;$i<count($categorias);$i++)
{
echo "<tr>";
echo "<td class='text'>".$categorias[$i]."</td>";
echo " <td class='num'>".$resultados[$i]."</td>";
echo "</tr>";
}

?>





</table>
