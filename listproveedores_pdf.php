<?php
require('C:/xampp/htdocs/Punto_Venta/fpdf/fpdf.php');
$conn=mysqli_connect("localhost","root","","punto_venta_casr");
class PDF extends FPDF
{
function Header()
{
  // $this->Image('imagen',5,8,70);
}
function Footer()
{
    $this->SetY(-20);
    $this->SetFont('Arial','B',8);
	$this->Cell(50,2,'_________________________________________________________________________________________________________________________',0,1,'L');
	$this->Ln();
$this->Cell(50,2,'Prueba Escuela',0,1,'L');
	$this->Ln();
$this->SetFont('Arial','B',7);
$this->Cell(50,2,'Yael Bryam',0,1,'L');
	
	}
}

function mes_espa($mes) {
If ($mes == "January") { $mes = "enero";
} Elseif ($mes == "February") { $mes = "febrero";
} Elseif ($mes == "March") { $mes = "marzo";
} Elseif ($mes == "April") { $mes = "abril";
} Elseif ($mes == "May") { $mes = "mayo";
} Elseif ($mes == "June") { $mes = "junio";
} Elseif ($mes == "July") { $mes = "julio";
} Elseif ($mes == "August") { $mes = "agosto";
} Elseif ($mes == "September") { $mes = "septiembre";
} Elseif ($mes == "October") { $mes = "octubre";
} Elseif ($mes == "November") { $mes = "noviembre";
} Elseif ($mes == "December") { $mes = "diciembre";
}
Return $mes; }

function Dia_Espa($dia) {
If ($dia == "Sunday") { $dia = "Domingo";
} Elseif ($dia == "Monday") { $dia = "Lunes";
} Elseif ($dia == "Tuesday") { $dia = "Martes";
} Elseif ($dia == "Wednesday") { $dia = "Miércoles";
} Elseif ($dia == "Thursday") { $dia = "Jueves";
} Elseif ($dia == "Friday") { $dia = "Viernes";
} Elseif ($dia == "Saturday") { $dia = "Sábado";
}
Return $dia; }
$fecha = getdate();
$dia_let = $fecha['weekday'];
$dia_let = Dia_espa($dia_let);
$dia_num = $fecha['mday'];
$mes = $fecha['month'];
$mes = mes_espa($mes);
$anio = $fecha['year'];

$pdf=new PDF('P','mm','Letter');
$pdf->AddPage();
$pdf->Cell(50,36,'',0,1,'L');
$pdf->SetFont('Arial','B',11);
$pdf->Cell(100,4,'',0,0,'C');
$pdf->Cell(50,4,'Estado de México ' . $dia_num . ' de ' . $mes . ' de ' . $anio . '.',0,1,'L');
$pdf->SetFillColor(255,255,255);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',7);
$pdf->SetFillColor(223,223,223);
$pdf->Cell(50,4,'',0,0,'C');
$pdf->Cell(100,4,'LISTADO DE PROVEEDORES',1,1,'C',1);
$pdf->Cell(50,4,'',0,0,'C');
$pdf->Cell(5,4,'No',1,0,'C',1);
$pdf->Cell(50,4,'Nombre del proveedor',1,0,'C',1);
$pdf->Cell(45,4,'Descripción',1,0,'C',1);
$pdf->Ln();
$consulta=mysqli_query($conn,"SELECT * FROM tbl_proveedor ");
$filas=mysqli_num_rows($consulta);
$i=0;
while ($i<$filas) {
		while ($row= mysqli_fetch_array($consulta)){
			$i++;
			$pdf->SetFont('Arial','',6);
			$pdf->Cell(50,4,'',0,0,'C');
			$pdf->Cell(5,4,$i,1,0,'C');
			$pdf->Cell(50,4,$row[1],1,0,'L');
			$pdf->MultiCell(45,4,$row[2],1,1);
			$pdf->Ln();
		}
	}
$pdf->Output();
?>