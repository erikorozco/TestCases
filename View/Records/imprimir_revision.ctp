<?php 
	$pdf = new FPDF('P','cm','letter');
	$pdf->AddPage();
		
		$pdf->SetFont('Arial', 'B', 25);
		$pdf->SetXY(1, 1);
		$pdf->Cell(20, 3 , utf8_decode("Óptica Capilla"), 1, 1, 'C', false);

		$pdf->SetXY(1, 4.5);
		$pdf->Cell(20, 21, "", 1, 1,'C', false);

		$pdf->SetFont('Arial', 'B', 14);
		$pdf->SetXY(1.5, 5);
		$pdf->Cell(2, 1, "Nombre: ", 0, 1,'L', false);

		$pdf->SetFont('Arial', '', 14);
		$pdf->SetXY(3.6, 5);
		$pdf->Cell(13, 1, utf8_decode($patient['Patient']['name'].' '.$patient['Patient']['lastName'].' '.$patient['Patient']['secondName']), 0, 1,'L', false);

		$pdf->SetFont('Arial', 'B', 14);
		$pdf->SetXY(1.5, 5.7);
		$pdf->Cell(2, 1, utf8_decode("Fecha de revisión: "), 0, 1,'L', false);

		$pdf->SetFont('Arial', '', 14);
		$pdf->SetXY(6.2, 5.7);
		$pdf->Cell(13, 1, utf8_decode($patient['Record']['created']), 0, 1,'L', false);


		/*****Table Header*******/
		$pdf->SetFillColor(102,178,255);
		$pdf->SetFont('Arial','B',14);

		$pdf->SetXY(1.5, 7);
		$pdf->Cell(4,1,utf8_decode('Esfera'),1,1,'C',true);

		$pdf->SetXY(5.5, 7);
		$pdf->Cell(4,1,utf8_decode('Cilíndro'),1,1,'C',true);

		$pdf->SetXY(9.5, 7);
		$pdf->Cell(4,1,utf8_decode('Eje'),1,1,'C',true);

		$pdf->SetXY(13.5, 7);
		$pdf->Cell(4,1,utf8_decode('Adición'),1,1,'C',true);

		$pdf->SetXY(17.5, 7);
		$pdf->Cell(3,1,utf8_decode('DIP'),1,1,'C',true);

		$pdf->SetXY(1.5, 8);
		$pdf->Cell(1,1.5,utf8_decode('O.D.'),1,1,'C',true);

		$pdf->SetXY(1.5, 9.5);
		$pdf->Cell(1,1.5,utf8_decode('O.I.'),1,1,'C',true);

		/*****Table body*******/
		$pdf->SetFillColor(255,255,255);
		
		$pdf->SetXY(2.5, 8);
		$pdf->Cell(3,1.5,utf8_decode($property['Record']['sphereRE']),1,1,'C',true);

		$pdf->SetXY(5.5, 8);
		$pdf->Cell(4,1.5,utf8_decode($property['Record']['cylinderRE']),1,1,'C',true);

		$pdf->SetXY(9.5, 8);
		$pdf->Cell(4,1.5,utf8_decode($property['Record']['axisRE']),1,1,'C',true);

		$pdf->SetXY(13.5, 8);
		$pdf->Cell(4,1.5,utf8_decode($property['Record']['aditionRE']),1,1,'C',true);

		$pdf->SetXY(17.5, 8);
		$pdf->Cell(3,1,utf8_decode($property['Record']['DIP']),1,1,'C',true);



		$pdf->SetXY(2.5, 9.5);
		$pdf->Cell(3,1.5,utf8_decode($property['Record']['sphereLE']),1,1,'C',true);

		$pdf->SetXY(5.5, 9.5);
		$pdf->Cell(4,1.5,utf8_decode($property['Record']['cylinderLE']),1,1,'C',true);

		$pdf->SetXY(9.5, 9.5);
		$pdf->Cell(4,1.5,utf8_decode($property['Record']['axisLE']),1,1,'C',true);

		$pdf->SetXY(13.5, 9.5);
		$pdf->Cell(4,1.5,utf8_decode($property['Record']['aditionLE']),1,1,'C',true);

		$pdf->SetXY(17.5, 10);
		$pdf->Cell(3,1,utf8_decode($property['Record']['AO']),1,1,'C',true);

		$pdf->SetFillColor(102,178,255);
		$pdf->SetXY(17.5, 9);
		$pdf->Cell(3,1,utf8_decode('AO'),1,1,'C',true);

		/*******Plus***********/
		$pdf->SetFillColor(255,255,255);

		$pdf->SetFont('Arial', '', 14);
		$pdf->SetXY(1.5, 12);
		$pdf->MultiCell(19, .7, utf8_decode('Observaciones: '.$property['Record']['note']), 0, 1,'L', false);

		$pdf->SetFont('Arial', 'B', 14);
		$pdf->SetXY(1.5, 15);
		$pdf->Cell(2, 1, utf8_decode("Tipo de lente: "), 0, 1,'L', false);

		$pdf->SetFont('Arial', '', 14);
		$pdf->SetXY(5, 15);
		$pdf->Cell(13, 1, utf8_decode($property['Kynd']['nameKynd']), 0, 1,'L', false);

		$pdf->SetFont('Arial', 'B', 14);
		$pdf->SetXY(1.5, 16);
		$pdf->Cell(2, 1, utf8_decode("Material: "), 0, 1,'L', false);

		$pdf->SetFont('Arial', '', 14);
		$pdf->SetXY(3.7, 16);
		$pdf->Cell(13, 1, utf8_decode($property['Material']['nameMaterial']), 0, 1,'L', false);

		$pdf->SetFont('Arial', 'B', 14);
		$pdf->SetXY(1.5, 17);
		$pdf->Cell(2, 1, utf8_decode("Tinte: "), 0, 1,'L', false);

		$pdf->SetFont('Arial', '', 14);
		$pdf->SetXY(3, 17);
		$pdf->Cell(13, 1, utf8_decode($property['Color']['nameColor']), 0, 1,'L', false);

		$pdf->SetFont('Arial', 'B', 14);
		$pdf->SetXY(1.5, 18);
		$pdf->Cell(2, 1, utf8_decode("Tono: "), 0, 1,'L', false);

		$pdf->SetFont('Arial', '', 14);
		$pdf->SetXY(3, 18);
		$pdf->Cell(13, 1, utf8_decode($property['Property']['tonallity']), 0, 1,'L', false);


		$pdf->SetFont('Arial', 'B', 14);
		$pdf->SetXY(1.5, 19);
		$pdf->Cell(2, 1, utf8_decode("Modelos de armazón: "), 0, 1,'L', false);

		$pdf->SetFont('Arial', '', 14);
		$pdf->SetXY(6.7, 19);
		$pdf->Cell(13, 1, utf8_decode($property['Record']['model']), 0, 1,'L', false);



		$pdf->Output(utf8_decode('asistencias.pdf'),'I');
?>