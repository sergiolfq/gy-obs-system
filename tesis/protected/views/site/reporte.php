<?php $this->Widget('ext.highcharts.HighchartsWidget', array(
   'options'=>array(
      'chart'=> array('type'=>'column'),
      'title' => array('text' => 'Fruit Consumption'),
      'xAxis' => array(
         'categories' => array('Enero', 'Febrero', 'Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre')
      ),
      'yAxis' => array(
         'title' => array('text' => 'Fruit eaten')
      ),
      'series' => array(
         array('name' => 'Jane', 'data' => array(1, 0, 4,5)),
     //    array('name' => 'John', 'data' => array(5, 7, 3))
      )
   )
)); ?>
