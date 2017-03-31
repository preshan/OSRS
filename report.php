<?php
   session_start();
   if(isset($_SESSION["BasicDetails"])){
    $row = $_SESSION["BasicDetails"];
  }
  if(isset($_SESSION["StudentATIDetails"])){
    $row2 = $_SESSION["StudentATIDetails"];
  }
  if(isset($_SESSION["ALExamDetails"])){
    $row7 = $_SESSION["ALExamDetails"];
  }
 include("DBconnection.php");
 $connection = db_connect();

require('fpdf/fpdf.php'); 
 
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage(); 
$pdf->SetFont('Arial', '', 11);
$pdf->SetX(140);
$pdf->Cell(30,10,'Office Use Only',0,0,'C',0);
$pdf->SetX(170);
$pdf->Cell(30,10,'',1,0,'C',0);
$pdf->ln();
$pdf->SetX(70);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(30,6,'SPECIMEN APPLICATION FORM',0,0,'',0);
$pdf->ln();
$pdf->SetX(20);
$pdf->Cell(30,6,'SRI LANKA INSTITUTE OF ADVANCED TECHNOLOGICAL EDUCATION APPLICATION FORM',0,0,'',0);
$pdf->ln();
$pdf->SetX(40);
$pdf->Cell(30,6,'FOR APPLICATION TO HIGHER NATIONAL DIPLOMA COURSES',0,0,'',0);
$pdf->ln();
$pdf->SetFont('Arial', '', 11);
$pdf->SetX(10);
$pdf->Cell(155,6,'Course',1,0,'L',0);
$pdf->Cell(35,6,'Order of Preferance',1,0,'L',0);

 
if(isset($_SESSION["BasicDetails"])){
                   
  $query1      = 'SELECT S.CourseKey,S.StudentKey,S.Priority,SM.CourseID from studentcoursemap S inner join coursemaster SM on S.CourseKey = SM.CourseKey WHERE S.StudentKey=\''.$_SESSION['StudentKey'].'\'';
  
   $result = $connection->query($query1);
    while ($row = $result->fetch_assoc()) {
      $pdf->SetX(10);
      $pdf->ln();
      $pdf->Cell(155,6,$row['CourseID'],1,0,'L',0);
      $pdf->Cell(35,6,$row['Priority'],1,0,'C',0);

    }
  }

  if(isset($_SESSION["BasicDetails"])){
    $row = $_SESSION["BasicDetails"];
    $pdf->ln();
    $pdf->SetX(0);
    $pdf->Cell(50, 10, '1. Name With Initials:' , 0, 'L',0);
    $pdf->Cell(50, 10, $row['NameWithInitials'] , 0, 'L',0);

    $pdf->ln();
    $pdf->SetX(24);
    $pdf->Cell(50, 6, '2. Name/Name Denoted by Initials:' , 0, 'L',0);
    $pdf->MultiCell(50, 6, $row['Name'] , 0, 'L',0);


    $pdf->Cell(23, 6, '3. Address:' , 0, 'L',0);
     $pdf->SetX(73);
    $pdf->MultiCell(50, 6, $row['AddressL1'] , 0, 'L',0);
    $pdf->SetX(73);
    $pdf->MultiCell(50, 6, $row['AddressL2'] , 0, 'L',0);
    $pdf->SetX(73);
    $pdf->MultiCell(50, 6, $row['AddressL3'] , 0, 'L',0);

    
    $pdf->Cell(31, 6, '4. Date of Birth:' , 0, 'L',0);
    $pdf->SetX(73);
    $pdf->MultiCell(50, 6, $row['DateOfBirth'] , 0, 'L',0);

    $pdf->Cell(16, 6, '5. NIC:' , 0, 'L',0);
    $pdf->SetX(73);
    $pdf->MultiCell(50, 6, $row['NIC'] , 0, 'L',0);

    $pdf->Cell(16, 6, '6. Sex:' , 0, 'L',0);
    $pdf->SetX(73);

    $gender = '';
    if($row['Gender']=='m'){
      $gender='Male';
    }
     if($row['Gender']=='f'){
      $gender='Female';
    }
    $pdf->MultiCell(50, 6, $gender , 0, 'L',0);
    $row5=$_SESSION["StudentDistrict"];

    $query1 =  'SELECT * FROM districtdetails where DistrictKey='.$row5['DistrictKey'];
     $result = $connection->query($query1);
     $row6 = $result->fetch_assoc();
    

    $pdf->Cell(47, 6, '7. Administrative District:' , 0, 'L',0);
    $pdf->SetX(73);
    $pdf->MultiCell(50, 6, $row6['DistrictID'] , 0, 'L',0);

    $pdf->Cell(29, 6, '8. Contact No:' , 0, 'L',0);
    $pdf->SetX(73);
    $pdf->MultiCell(50, 6, $row['ContactNo'] , 0, 'L',0);

    $pdf->SetFont('Arial', 'B', 11);
    $pdf->Cell(40, 10, 'Result of GCE (A/L)' , 0, 'L',0);
    $pdf->ln();
    $pdf->SetFont('Arial', '', 11);
    if(isset($_SESSION["ALExamDetails"])){
      $row3 = $_SESSION["ALExamDetails"];
      $pdf->Cell(14, 6, 'Year:' , 0, 'L',0);
      $pdf->Cell(15, 6, $row3['Year'] , 0, 'L',0);

      $pdf->SetX(50);
      $pdf->Cell(14, 6, 'Index No:' , 0, 'L',0);
      $pdf->Cell(15, 6, $row3['IndexNo'] , 0, 'L',0);

      $pdf->SetX(90);
      $pdf->Cell(14, 6, 'Medium:' , 0, 'L',0);
      $pdf->Cell(15, 6, $row3['Medium'] , 0, 'L',0);
      

       $pdf->SetX(130);
      $pdf->Cell(14, 6, 'Z-Score:' , 0, 'L',0);
      $pdf->Cell(15, 6, $row3['Zscore'] , 0, 'L',0);
      $pdf->ln();

    
    $pdf->SetX(10);
$pdf->Cell(155,6,'Subject',1,0,'L',0);
$pdf->Cell(35,6,'Grade',1,0,'L',0);
    $query1      = 'SELECT S.SubjectKey,S.StudentKey,S.Grade,SM.SubjectID from studentalsubjectmap S inner join alsubjectmaster SM on S.SubjectKey = SM.SubjectKey WHERE S.StudentKey=\''.$_SESSION['StudentKey'].'\'';
                    
       $result = $connection->query($query1);
        while ($row = $result->fetch_assoc()) {
      $pdf->SetX(10);
      $pdf->ln();
      $pdf->Cell(155,6,$row['SubjectID'],1,0,'L',0);
      $pdf->Cell(35,6,$row['Grade'],1,0,'L',0);

        }
    
    $pdf->ln();
    $pdf->SetFont('Arial', 'B', 11);
    $pdf->Cell(40, 10, 'Result of GCE (O/L)' , 0, 'L',0);
    $pdf->ln();

    $pdf->SetFont('Arial', '', 11);
    if(isset($_SESSION["OLExamDetails"])){
      $row4 = $_SESSION["OLExamDetails"];
      $pdf->Cell(14, 6, 'Year:' , 0, 'L',0);
      $pdf->Cell(15, 6, $row4['Year'] , 0, 'L',0);

      $pdf->SetX(50);
      $pdf->Cell(20, 6, 'Index No:' , 0, 'L',0);
      $pdf->Cell(20, 6, $row4['IndexNo'] , 0, 'L',0);

      $pdf->SetX(90);
      $pdf->Cell(20, 6, 'Medium:' , 0, 'L',0);
      $pdf->Cell(20, 6, $row4['Medium'] , 0, 'L',0);

      $pdf->ln();
       $pdf->SetX(10);
      $pdf->Cell(155,6,'Subject',1,0,'L',0);
      $pdf->Cell(35,6,'Grade',1,0,'L',0);
    
       $query1      = 'SELECT S.SubjectKey,S.StudentKey,S.Grade,SM.SubjectID from studentolsubjectmap S inner join olsubjectmaster SM on S.SubjectKey = SM.SubjectKey WHERE S.StudentKey=\''.$_SESSION['StudentKey'].'\'';
                    
       $result = $connection->query($query1);
        while ($row = $result->fetch_assoc()) {
      $pdf->SetX(10);
      $pdf->ln();
      $pdf->Cell(155,6,$row['SubjectID'],1,0,'L',0);
      $pdf->Cell(35,6,$row['Grade'],1,0,'L',0);

        }
    $pdf->ln();
    $pdf->ln();
    $pdf->Cell(80, 6, '9. Highest Qulification in English as a Subject:' , 0, 'L',0);
    $pdf->SetX(90);
    $pdf->MultiCell(80, 6, $row3['EnglishQulification'] , 0, 'L',0);

    }
  }
  
  $pdf->MultiCell(200, 6, 'I do hereby declare that I am not following any other full-time course of study in any other state institution. I am aware that my registration will be canceled at any time during the period of study if it is found that, I concurrently follow a full-time course at any other state institution. I do hereby certify that the information furnished here is true and accurate to the best of my knowledge.' , 0, 'L',0);
$pdf->ln();
  $pdf->Cell(15, 6, 'Date:' , 0, 'L',0);
  $pdf->Cell(25, 6, date("Y-m-d") , 0, 'L',0);
  $pdf->SetX(150);
  $pdf->Cell(15, 6, 'Signature:' , 0, 'L',0);
  $pdf->Cell(35, 6, '.................................' , 0, 'L',0);
  }
  


    $pdf->Output('Application.pdf','D'); 

   ?>
 
