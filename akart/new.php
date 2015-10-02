<?php
	include("connect.php");
	include("functions.php");
	require("fpdf/fpdf.php");

			if(isset($_COOKIE['fname']))
			{
			//	echo 'Hello '.($_COOKIE['fname']!='' ? $_COOKIE['fname'] : 'Guest'); // Hello David!
				$name = $_COOKIE['fname'];
			}
			else {
				echo "<script type='text/javascript'>alert('fname NAME NOT PRESENT IN DATABASE');</script>";
			}

			if(isset($_COOKIE['email']))
			{
				$email = $_COOKIE['email'];
			}
			else {
				echo "<script type='text/javascript'>alert('email NAME NOT PRESENT IN DATABASE');</script>";
			}

			if(isset($_COOKIE['lname']))
			{
				$lname = $_COOKIE['lname'];
			}
			else {
				echo "<script type='text/javascript'>alert('lname NAME NOT PRESENT IN DATABASE');</script>";
			}
			if(isset($_COOKIE['phone']))
			{
				$phone = $_COOKIE['phone'];
			}
			else {
				echo "<script type='text/javascript'>alert('phone NAME NOT PRESENT IN DATABASE');</script>";
			}
			if(isset($_COOKIE['address']))
			{
				$address = $_COOKIE['address'];
			}
			else {
				echo "<script type='text/javascript'>alert('address NAME NOT PRESENT IN DATABASE');</script>";
			}
				$pdf=new FPDF();
				$pdf->AddPage();
				$pdf->SetAuthor('Lana Kovacevic');
				$pdf->SetTitle('FPDF tutorial');
				$pdf->SetFont('Arial',"B",20);
				$pdf->Cell(0,10,"Thanks $name for shopping with us",0,1,"C");
				$pdf->Cell(0,10,"Fullname : $name $lname ",0,1,"l");
				$pdf->Cell(0,10,"EmailID  : $email ",0,1,"l");
				$pdf->Cell(0,10,"Mobile No  : $phone ",0,1,"l");
				$pdf->Cell(0,10,"Address  : $address ",0,1,"l");
			//		$pdf->Cell(100,10,"sada",1,0,"R");
				$pdf->output();
			
/*			require("fpdf/fpdf.php");

?>
*/