<?php
require('Fpdf.php');

class PDF extends Fpdf
{
// Cargar los datos
function LoadData($file)
{
	// Leer las líneas del fichero
	$lines = file($file);
	$data = array();
	foreach($lines as $line)
		$data[] = explode(';',trim($line));
	return $data;
}

// Tabla simple
function BasicTable($header, $data)
{

        $this->MultiCell(100,20,"Centro Médico Dr. José Muñoz \n Av. 28 La Limpia frente al cementerio Corazón de Jesus. \n RIF: J-30668644-4",1,'C');
		$this->MultiCell(100,20,"Centro Médico Dr. José Muñoz \n Av. 28 La Limpia frente al cementerio Corazón de Jesus. \n RIF: J-30668644-4",1,'C');
        $this->Ln();
	$this->MultiCell(140,20,"Dra. Damaris Cobos \nCI: 5.056.245 Registro \nNo.25103",1,'C');
	$this->MultiCell(140,20,"Dra. Damaris Cobos \nCI: 5.056.245 Registro \nNo.25103",1,'C');
	$this->Ln();
/*	$this->MultiCell(140,110,"Tratamiento :",1,'L');
	$this->MultiCell(140,110,"Indicaciones :",1,'L');
        $this->Ln();
	$this->MultiCell(140,25,"Elizabeth Quintero \nC.I:5056243 \nNacimiento:10/4/1956\n Expedido: 22-09-2013\n Vencimiento :",1,0,'R');
	$this->MultiCell(140,25,"Elizabeth Quintero \nC.I:5056243 \nNacimiento:10/4/1956\n Expedido: 22-09-2013\n Vencimiento :",1,0,'R');*/
	
}

// Una tabla más completa
function ImprovedTable($header, $data)
{
	// Anchuras de las columnas
	$w = array(40, 35, 45, 40);
	// Cabeceras
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C');
	$this->Ln();
	// Datos
	foreach($data as $row)
	{
		$this->Cell($w[0],6,$row[0],'LR');
		$this->Cell($w[1],6,$row[1],'LR');
		$this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
		$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
		$this->Ln();
	}
	// Línea de cierre
	$this->Cell(array_sum($w),0,'','T');
}

// Tabla coloreada
function FancyTable($header, $data)
{
	// Colores, ancho de línea y fuente en negrita
	$this->SetFillColor(255,0,0);
	$this->SetTextColor(255);
	$this->SetDrawColor(128,0,0);
	$this->SetLineWidth(.3);
	$this->SetFont('','B');
	// Cabecera
	$w = array(40, 35, 45, 40);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
	$this->Ln();
	// Restauración de colores y fuentes
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	$this->SetFont('');
	// Datos
	$fill = false;
	foreach($data as $row)
	{
		$this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
		$this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
		$this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
		$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
		$this->Ln();
		$fill = !$fill;
	}
	// Línea de cierre
	$this->Cell(array_sum($w),0,'','T');
}
                        // ponele a recibir los parametros en cada lugar y guarde en una direccion y se abra en otra pagina
function mostrarRecipe($infoMedico='',$infoPaciente='',$tratamiento='',$indicaciones='',$infoCentro=''){ 


//formato de las variables a pasar 

$infoMedico="SERVICIO DE EMERGENCIAS";
$infoPaciente="";
$infoCentro="Centro de Diagnóstico Los Salias S.A \n Miranda, San Antonio De Los Altos, Av. Principal Los Sánchez, Edificio 4-A, Sector Los Llaneros \n RIF J-29926163-7";
//$tratamiento="Tratamiento del usuario  \n \r lalala \n \r lalalala";
//$indicaciones="Indicaciones del usuario";

// configuraciones de la pagina
$this->SetFont('times','',9);
$this->AddPage();
$this->setLineWidth(0.6);

$this->setXY(25,15);

$this->multicell(90,5,$infoCentro,0,'C');
$this->setXY(167,15);
$this->multicell(90,5,$infoCentro,0,'C');
//$this->setXY(180,25);
//$this->write(2,"						                  	    RIF: J-30668644-4");

// Identificacion del medico tratante 
$this->setXY(25,45);
$this->multiCell(90,5,$infoMedico,0,'C');
$this->setXY(170,45);
$this->multiCell(90,5,$infoMedico,0,'C');

//tratamiento e indicaciones 
/*
$this->setXY(10,70);
$this->write(2,"Tratamiento :");
$this->setXY(160,70);

$this->write(2,"Indicaciones :\n");
$this->ln();*/
// multicell de indicaciones y tratamiento
$this->multiCell(100,5," ".utf8_decode($tratamiento)); // codificando contenido al formato correcto utf-8
$this->setXY(160,72);
$this->multiCell(100,5," ".utf8_decode($indicaciones)); // codificando contenido al formato correcto utf-8
// datos del paciente                                           acomodar margenes y cuadrar esta informacion dentro
$this->setXY(115,175);
//$this->write(2,"nombre paciente");
$this->multiCell(30,4,$infoPaciente);
$this->setXY(235,175);
$this->multiCell(30,4,$infoPaciente);
// linea de separacion 
$this->line(150,10,150,200);
//logo de encabezados
 $webroot = Yii::getPathOfAlias('webroot');
$this->Image($webroot.'/images/logo.png',110,10,18,18);
$this->Image($webroot.'/images/logo.png',250,10,18,18);




}


function mostrarConstancia($infoMedico='',$infoConstancia=''){


//formato de las variables 
$infoMedico="informacion de medico \ninformacion del medico .\ninformacion del medico ";
$infoConstancia="Contenido de la constancia\ncontenido de la constancia .\n contenido de la constancia ";



//configuracion de la pagina
$this->SetFont('times','',9);
$this->AddPage();
$this->setLineWidth(0.6);

$this->setXY(55,15);
$this->multicell(100,4,"Centro Médico Dr. José Muñoz\nAv. 28 La Limpia frente al cementerio Corazón de Jesus.\nRIF: J-30668644-4",0,'C');
$this->setXY(93,45);
$this->SetFont('times','',14);
$this->write(5,'CONSTANCIA');
$this->SetFont('times','',9);
$this->setXY(30,70);
$this->multicell(160,4,$infoConstancia,1,'J');
$this->setXY(90,250);
$this->multicell(60,4,$infoMedico,0,'J');
//$this->Image(Yii::app()->request->baseUrl.'/images/update.png',150,10,14,14);

}

}  // fin de la clase 








//$pdf = new PDF();
//$pdf->mostrarConstancia();

/*$pdf = new PDF('L');
// Títulos de las columnas
$header = array('País', 'Capital', 'Superficie (km2)', 'Pobl. (en miles)');
// Carga de datos
$data = $pdf->LoadData('paises.txt');
$pdf->mostrarRecipe();*/

/*$pdf->SetFont('times','',9);
$pdf->AddPage();
$pdf->setLineWidth(0.6);

$pdf->setXY(50,15);
$pdf->write(2,"Centro Médico Dr. José Muñoz\n
                  	             Av. 28 La Limpia frente al cementerio Corazón de Jesus.\n
                  	`		                                        RIF: J-30668644-4");
$pdf->setXY(190,15);
$pdf->write(2,"Centro Médico Dr. José Muñoz\n");
$pdf->setXY(175,19.5);
$pdf->write(2,"Av. 28 La Limpia frente al cementerio Corazón de Jesus.\n");
$pdf->setXY(180,23);
$pdf->write(2,"						                  	    RIF: J-30668644-4");
// datos del medico primero 
$pdf->setXY(58,35);
$pdf->write(2,"Dra. Damaris Cobos\n");
$pdf->setXY(58,39.5);
$pdf->write(2,"CI: 5.056.245\n");
$pdf->setXY(58,43.5);
$pdf->write(2,"Registro No.25103\n");
// datos del medico segundo cuadro 
$pdf->setXY(200,35);
$pdf->write(2,"Dra. Damaris Cobos\n");
$pdf->setXY(200,39.5);
$pdf->write(2,"CI: 5.056.245\n");
$pdf->setXY(200,43.5);
$pdf->write(2,"Registro No.25103\n");
//tratamiento e indicaciones 
$pdf->setXY(10,70);
$pdf->write(2,"Tratamiento :");
$pdf->setXY(160,70);
$pdf->write(2,"Indicaciones :\n");
// multicell de indicaciones y tratamiento
$pdf->multiCell(100,110,'Tratamiento del usuario');
$pdf->setXY(160,72);
$pdf->multiCell(100,110,'Indicaciones del usuario');
// datos del paciente                                           acomodar margenes y cuadrar esta informacion dentro
$pdf->setXY(120,180);
//$pdf->write(2,"nombre paciente");
$pdf->multiCell(30,4,'Datos del pacciente');
$pdf->setXY(240,180);
$pdf->multiCell(30,4,'Datos del pacciente');
// linea de separacion 
$pdf->line(150,10,150,200);
//logo de encabezados
$pdf->Image('logohmg.gif',110,10,14,14);
$pdf->Image('logohmg.gif',250,10,14,14);
/*$pdf->BasicTable($header,$data);
$pdf->AddPage();
$pdf->ImprovedTable($header,$data);
$pdf->AddPage();
$pdf->FancyTable($header,$data);*/

//  $pdf->Output();

/*$pdf->Output('archivo','F');
header('Content-type: application/pdf');
readfile('archivo');*/

?>
