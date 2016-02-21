<?php
 $this->Widget('ext.highcharts.HighchartsWidget', array(
   'options'=>array(
      'chart'=> array('type'=>'column'),
      'credits'=> array('enabled'=> false),
      'legend'=> array('enabled'=> false),
      'title' => array('text' => $titulo),
      'xAxis' => array(
         'categories' => $categorias
      ),
      'yAxis' => array(
         'title' => array('text' => $tituloy)
      ),
      'series' => array(
         array('name' => 'positivo', 'data' =>$resultados),

      )
   )
      
));   ?>


<style>
table, th, td {
   border: 1px solid black;
} ; border-with:1px;'
</style>
<?php
$total=array_sum($resultados);
$min=min($resultados);
$max=max($resultados);
$num=count($resultados);
$promedio=$total/$num;
?>


<div class='span-25' style='overflow-y:scroll;'>

<table style='border-color:black; border-with:1px;' >
<tr>
<td> Categor&iacute;as </td>
<?php 

for ($i=0;$i<count($categorias);$i++)
echo ' <td>'.$categorias[$i].'</td>';
?>

</tr>

<tr>
<td> Cantidades </td>
<?php 
for ($i=0;$i<count($resultados);$i++)
echo ' <td>'.$resultados[$i].'</td>';
?>

</tr>



</table>

</div>


<div class='span-20'>
<label> Total: <?php  echo $total; ?></label> <br/>
<label> M&iacutenimo: <?php  echo $min; ?></label> <br/>
<label> M&aacuteximo: <?php  echo $max; ?></label> <br/>
<label> Promedio: <?php  echo round($promedio,2); ?></label> <br/>
<?php  echo CHtml::link('Descargar reporte en excel',array($this->action->Id,'excel'=>1)); ?>
</div>

