<?php  ob_start(); ?>
<?php


require_once("pdf_class.php"); //class PDF
require_once("query_register.php");

//report_cleft_update.php
//http://127.0.0.1/report_pdf/report_abstract.php?id_abstract=27

#http://www.thaicleft2015.org/report_pdf/report_cleft_update.php?id_register=110



# 'query_register.php';


##---- PDF ---
$pdf=new PDF('P','mm','A4');  //ของเดิม 
$pdf->SetMargins( 25,25,5 );
$pdf->AddPage();
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวธรรมดา กำหนด ชื่อ เป็น angsana
$pdf->AddFont('angsana','','angsa.php');
 
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวหนา  กำหนด ชื่อ เป็น angsana
$pdf->AddFont('angsana','B','angsab.php');
 
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวหนา  กำหนด ชื่อ เป็น angsana
$pdf->AddFont('angsana','I','angsai.php');
 
// เพิ่มฟอนต์ภาษาไทยเข้ามา ตัวหนา  กำหนด ชื่อ เป็น angsana
$pdf->AddFont('angsana','BI','angsaz.php');

$x_absolute=25; //พิกัด X
$y_absolute=20; //พิกัด Y
$r=7;  //ระยะห่าง

$abs_x=30;

##-- PAGE 1   
##---- เลขหน้า ----------
    $pdf->SetFont('angsana','',12);
    $pdf->setXY( $x_absolute + 160 , $y_absolute - 10 );
    $pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , 'Page  1' )  );
##---- เลขหน้า ---------- 


   
    
    $he= "The 8th Annual Meeting of the Thai Cleft Lip-Palate and Craniofacial Association : International Congress";
    $he2="                                                     "."Conference";
    $he3="Theme : Comprehensive Cleft Car in Greater Mekong Subregion for Better Quality of Life";
    
$pdf->setXY( $abs_x, $y_absolute +  ($r*2)  );
$pdf->SetFont('angsana','',13);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,' '.$he)); 

/*
$pdf->setXY( 10, $y_absolute +  ($r*3)  );
$pdf->SetFont('angsana','',13);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,' '.$he2)); 
*/

$pdf->setXY( $abs_x, $y_absolute +  ($r*3)  );
$pdf->SetFont('angsana','',13);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,' '.$he3)); 

#-- เส้น hr  หัวตาราง ---
$pdf->setXY( 10, $y_absolute +  ($r*4)  );
$pdf->Cell( 190  , 1 , iconv( 'UTF-8','cp874' , '' ) , 1 , 0 , 'C' , true );



//$pdf->Image('icon/px.jpeg',10,12,20,0,'','');//Image(string file [, float x [, float y [, float w [, float h [, string type [, mixed link]]]]]])
$pdf->setXY( 30, 10  );
#$pdf->Image('icon/Logo-cleft.jpg',10,12,40,0,'','');//Image(string file [, float x [, float y [, float w [, float h [, string type [, mixed link]]]]]])
$pdf->Image('1.gif',10,12,50,0,'','');//Image(string file [, float x [, float y [, float w [, float h [, string type [, mixed link]]]]]])



$pdf->setXY( 90, $y_absolute +  ($r*6)  );
$pdf->SetFont('angsana','BU',30);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,' '.'RECEIPT' )); 




$pdf->setXY( $abs_x, $y_absolute +  ($r*8)  );
$pdf->SetFont('angsana','',15);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,'____'.$d_title.$firstname.'____'.$lastname.'_____________________________ '.'has paid for the Registration Fee for' )); 

$pdf->setXY( $abs_x, $y_absolute +  ($r*9)  );
$pdf->SetFont('angsana','',15);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,'Pre - congress 17 th November 2015, amount of'.'________'.$pre_congress.'_____Baht/USD' )); 

$pdf->setXY( $abs_x, $y_absolute +  ($r*10)  );
$pdf->SetFont('angsana','',15);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,'Congress 18 th - 20 th November 2015, amount of'.'_______'.$early_bird.'____Baht/USD' )); 

$pdf->setXY( $abs_x , $y_absolute +  ($r*11)  );
$pdf->SetFont('angsana','',15);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,'The 8 th Annual Meeting of the Thai Cleft Lip - Palate and Craniofacial Association : International Congress'.'' )); 


$pdf->setXY( $abs_x + 70 , $y_absolute +  ($r*12)  );
$pdf->SetFont('angsana','',15);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,'Total___ '.$course."___USD / __".$total_all."__  Baht   "     )); 


$pdf->setXY( $abs_x , $y_absolute +  ($r*13)  );
$pdf->SetFont('angsana','',15);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,'Sincerely  your, '.'' )); 




$pdf->Image('2.png',40,120,25,0,'','');//Image(string file [, float x [, float y [, float w [, float h [, string type [, mixed link]]]]]])


$pdf->setXY( $abs_x , $y_absolute +  ($r*16)  );
$pdf->SetFont('angsana','UB',40);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,'                     ' )); 

$pdf->setXY( $abs_x , $y_absolute +  ($r*18)  );
$pdf->SetFont('angsana','',15);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,'Assoc. Prof. Vichai   Chichareon'.'' )); 

$pdf->setXY( $abs_x , $y_absolute +  ($r*19)  );
$pdf->SetFont('angsana','',15);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,'President of The Thai Cleft Lip-Palate and Craniofacial Association (TCCA)'.'' )); 

/*
$pdf->setXY( $abs_x , $y_absolute +  ($r*20)  );
$pdf->SetFont('angsana','',15);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,'            '.'President of TCCA'.'' )); 
*/





/*

$pdf->setXY($abs_x , $y_absolute +  ($r*33)  );
$pdf->SetFont('angsana','I',15);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,'                       '.'Center of Cleft Lip - Cleft Palate and Craniofacial Deformities ,Khon Kaen University '  ));

$pdf->setXY($abs_x , $y_absolute +  ($r*34)  );
$pdf->SetFont('angsana','I',15);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,'                                     '.'in Association with "Tawanchai Project" (Tawanchai Cleft Center) '  ));



$pdf->setXY($abs_x , $y_absolute +  ($r*35)  );
$pdf->SetFont('angsana','I',15);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,'                                                             '.'http://www.tawanchai-foundation.org/'  ));

$pdf->setXY($abs_x , $y_absolute +  ($r*36)  );
$pdf->SetFont('angsana','I',15);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , '                                                        '.'Registration date : '.$today  ));

*/



$pdf->setXY($abs_x , $y_absolute +  ($r*33)  );
$pdf->SetTextColor(0,0,255); #blue color
$pdf->SetFont('angsana','',14);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,'                      '.'ใบเสร็จอิเล็กทรอนิกส์ฉบับนี้สามารถนำไปเบิกจ่ายค่าลงทะเบียนจากต้นสังกัดคืนได้'  ));

$pdf->SetTextColor(0);
$pdf->setXY($abs_x , $y_absolute +  ($r*34)  );
$pdf->SetFont('angsana','',13);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,'              '.' 8th Annual Meeting of the Thai Cleft Lip-Palate and Craniofacial Association: Internation Congress '  ));



$pdf->setXY($abs_x , $y_absolute +  ($r*35)  );
$pdf->SetFont('angsana','',13);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' ,'                                                              '.'http://www.thaicleft2015.org'  ));



////Put watermark
$pdf->SetFont('angsana','B',60);
$pdf->SetTextColor(211, 211, 211);  //red,green,blue   211,211,211  gray color
$pdf->Rotate(30, 150, 150);  //angle
$pdf->Text(99, 125, 'THAICleft 2015' ); // x,y


/*
$pdf->setXY($abs_x , $y_absolute +  ($r*36)  );
$pdf->SetFont('angsana','I',15);
$pdf->MultiCell( 0  , 0 , iconv( 'UTF-8','cp874' , '                                                        '.'Registration date : '.$today  ));
*/



$pdf->Output();
     
     ?>