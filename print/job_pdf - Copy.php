<?php
/*
	error_reporting(0);
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	error_reporting(E_ALL);
	ini_set("error_reporting", E_ALL);
	error_reporting(E_ALL & ~E_NOTICE);
*/
require_once( '../class.php' );
require_once( '../function.php' );
require_once('../js/plugins/tcpdf/tcpdf.php');
$db = new cl;
$path_assets='assets';
$path_bootstrap='bootstrap';
$path_plugins='plugins';
$documentID=isset($_GET['documentID'])?$_GET['documentID']:'';

$sql_info_com="SELECT
cp.com_code,
cp.comname,
cp.taxID as cpTax,
cp.address,
cp.address_en,
cp.telephone as cpTel,
cp.fax,
cp.logo
FROM company AS cp ";
$info1=$db->fetch($sql_info_com);	
$_SESSION['comname']= $info1['comname'];
$_SESSION['address']= $info1['address'];
$_SESSION['address_en']= $info1['address_en'];
$_SESSION['cpTel']= $info1['cpTel'];
$_SESSION['cpTax']= $info1['cpTax'];
$_SESSION['logo']= $info1['logo'];


$sql = "SELECT
j.comCode,
j.documentID,
j.documentDate,
j.bound,
j.freight,
j.port_of_landing,
j.port_of_discharge,
j.mbl,
j.hbl,
j.co,
j.paperless,
j.bill_of_landing,
j.import_entry,
j.etdDate,
j.etaDate,
j.closingDate,
j.closingTime,
j.invNo,
j.bill,
j.bookingNo,
j.deliveryType,
j.saleman,
j.cusCode,
j.cusContact,
j.agentCode,
j.agentContact,
j.feeder,
j.vessel,
j.note,
j.stu_location,
j.stu_contact,
j.stu_mobile,
j.stu_date,
j.cy_location,
j.cy_contact,
j.cy_mobile,
j.cy_date,
j.rtn_location,
j.rtn_contact,
j.rtn_mobile,
j.rtn_date,
j.good_total_num_package,
j.good_commodity,
j.billOfladingNo,
j.trailer_bookingNO,
j.fob,
j.place_receive,
j.documentstatus,
j.createID,
j.createTime,
j.editID,
j.editTime,
s.empName as saleman
FROM
joborder AS j
INNER JOIN common_saleman AS s ON j.comCode = s.comCode AND j.saleman = s.usercode
WHERE j.comCode='$db->comCode' AND j.documentID='$documentID'  ";
        $info=$db->fetch($sql);

$_SESSION['documentID']=$info['documentID'];
$_SESSION['hbl']=$info['hbl'];
$_SESSION['invNo']=$info['invNo'];
$_SESSION['saleman']=$info['saleman'];
$_SESSION['bill']=$info['bill'];


/*
$_SESSION['refJobNo']=$info['refJobNo'];
$_SESSION['supNameTH']=$info['supNameTH'];
$_SESSION['documentID']=$info['documentID'];
$_SESSION['documentDate']=$info['documentDate'];
$_SESSION['accountNicname']=$info['accountNicname'];
*/
class MYPDF extends TCPDF {
	//Page header
	public function Header() {
		// Logo
		//$image_file = K_PATH_IMAGES.'logo.jpg';
       
		//$image_file = './img/logo/'.$_SESSION['logo'];
        $image_file = '../img/logoNew.jpg';
		$this->Image($image_file, 160, 5, 40, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        $this->Ln(5);
        $this->SetX(15);
        $this->SetFont('thsarabun', 'B', 18);
        $this->Cell(0, 15,$_SESSION['comname'], 0, false, 'L', 0, '', 0, false, 'M', 'M');  
	    $this->SetFont('thsarabun', '', 15);
        $this->Ln(6);
        $this->Cell(0, 15,$_SESSION['address'], 0, false, 'L', 0, '', 0, false, 'M', 'M');  
        $this->Ln(6);
        $this->Cell(0, 15,'เลขประจำตัวผู้เสียภาษี  '.$_SESSION['cpTax'].' โทรศัพท์  '.$_SESSION['cpTel'], 0, false, 'L', 0, '', 0, false, 'M', 'M');          
       $this->Ln(3);
      
        $this->Cell(0, 15,'___________________________________________________________________________________________________', 0, false, 'C', 0, '', 0, false, 'M', 'M');  
		// Set font
        
        /*$style = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => '10,20,5,10', 'phase' => 10, 'color' => array(255, 0, 0));
        $this->Rect(75, 28, 60, 12, 'DF', $style, array(	70,130,180));
        */
		$this->Ln(6);
       // $this->SetTextColor(0, 139, 139);
		$this->SetFont('thsarabun', 'B', 18);
		$this->Cell(0, 15,'ใบสั่งงาน', 0, false, 'C', 0, '', 0, false, 'M', 'M');  
		$this->Ln(5);
        $this->SetFont('thsarabun', '', 14, '', true);
		$this->Cell(0, 15,'Joborder', 0, false, 'C', 0, '', 0, false, 'M', 'M');  
        $this->Ln(5);
      $html='<table width="100%"  border="0" style="text-align:left;">
           <tbody>
    <tr>
      <td width="10%" ><strong>เครดิต</strong></td>
      <td width="20%">กำหนดวัน</td>
      <td width="15%" align="right"> 15 วัน</td>
      <td width="20%"></td>
      <td width="15%"align="right" ><strong>Job No.</strong></td>
      <td width="20%">  '.$_SESSION['documentID'].'</td>
    </tr>
    <tr>
      <td colspan="2"><strong>เครดิตมีเงื่อนไขวางบิลทุกวันที่</strong></td>
      <td></td>
      <td></td>
      <td align="right"><strong>H B/L No.</strong></td>
      <td>  '.$_SESSION['hbl'].'</td>
    </tr>
    <tr>
      <td><strong>วันที่จ่ายเช็ค</strong></td>
      <td></td>
      <td></td>
      <td></td>
      <td align="right"><strong>INV. No.</strong></td>
      <td>  '.$_SESSION['invNo'].'</td>
    </tr>
    
     <tr>
      <td><strong>Saleman</strong></td>
      <td>:  '.$_SESSION['saleman'].'</td>
      <td align="right"><strong>B/L No.</strong></td>
      <td>:  '.$_SESSION['bill'].'</td>
      <td align="right"><strong>INV. No.</strong></td>
      <td>  '.$_SESSION['invNo'].'</td>
    </tr>   
    
    
    
  </tbody>
        </table>';
        
    $this->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);       
        
        
        
        /*
        
        
        
        
        
        
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('thsarabun', 'B', 15);
		$this->Ln(10);
		$this->Cell(0, 15,'จ่ายให้/Paid To', 0, false, 'L', 0, '', 0, false, 'M', 'M');
        $this->SetX(50);
        $this->SetFont('thsarabun', '', 15);
        $this->Cell(0, 15,$_SESSION['supNameTH'], 0, false, 'L', 0, '', 0, false, 'M', 'M');
        
       
        $this->SetX(145);
        $this->SetFont('thsarabun', 'B', 15);
        $this->Cell(0, 15,'เลขที่เอกสาร/No', 0, false, 'L', 0, '', 0, false, 'M', 'M');
        
        $this->SetX(175);
        $this->SetFont('thsarabun', '', 15);
        $this->Cell(0, 15,$_SESSION['documentID'], 0, false, 'L', 0, '', 0, false, 'M', 'M');      
        
        
        
 
        $this->Ln(6);
        $this->SetFont('thsarabun', 'B', 15);
		$this->Cell(0, 15,'เพื่อชำระ/Paid For', 0, false, 'L', 0, '', 0, false, 'M', 'M');
        $this->SetX(50);
        $this->SetFont('thsarabun', '', 15);
        $this->Cell(0, 15,$_SESSION['refJobNo'].', INV NO.123456', 0, false, 'L', 0, '', 0, false, 'M', 'M');
        
        
        $this->SetX(145);
        $this->SetFont('thsarabun', 'B', 15);
        $this->Cell(0, 15,'วันที่/Date', 0, false, 'L', 0, '', 0, false, 'M', 'M');
          $this->SetX(175);
        $this->SetFont('thsarabun', '', 15);
        $this->Cell(0, 15,$_SESSION['documentDate'], 0, false, 'L', 0, '', 0, false, 'M', 'M');  
        
        
        
        
        $this->Ln(6);
        $this->SetX(50);
        $this->Cell(0, 15,'แอดคอร์ด ไพลอด โลจิสติคส์(ประเทศไทย) จำกัด', 0, false, 'L', 0, '', 0, false, 'M', 'M');
             
        
 */

        
            
        
        
	}

	// Page footer
	public function Footer() {
	
	}
}

// create new PDF document
//$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Payment Voucher');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//$pdf->SetMargins(10,20,30,10 );
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, 0);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('thsarabun', '', 14, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->SetMargins(15, 60, 10, true);
$pdf->AddPage('P');
$pdf->SetFont('thsarabun', '', 14, '', true);
$pdf->Ln(5);
/*
$html='<table width="100%"  border="1" style="text-align:left;">
<tr>
    <td width="8%" align="center"><strong>ลำดับ<br> No.</strong></td>
    <td width="13%" align="center"><strong>เลขที่บิล<br>Bill No.</strong></td>
    <td width="65%" align="center"><strong>รายการ<br>Particulars</strong></td>
    <td width="13%" align="center"><strong>จำนวนเงิน<br>Amount</strong></td>
		
</tr> ';
$sql = "SELECT
t.comCode,
t.documentID,
t.invNo,
t.chargeCode,
t.chartDetail,
t.amount
FROM  $db->dbname.receipt_voucher_items AS t
WHERE  t.comCode='$db->comCode' AND t.documentID='$documentID'  order by t.chargeCode asc
";
$result_temp=$db->query($sql);
$i = 1;
$sumTotal = 0;


while($r=mysqli_fetch_assoc($result_temp)){
$sumTotal += $r['amount'];
$html.='
<tr>
    <td  align="center">'.$i.'</td>
    <td>'.$r['invNo'].'</td>
    <td align="left">'.$r['chartDetail'].'</td>
    <td  align="right">'.number($r['amount'],2).'</td>	
	
</tr> ';


$i++;
}
$html.='
<tr>

	<td align="center" colspan="3">รวม/Total</td>
    <td  align="right">'.number($sumTotal,2).'</td>		
</tr> ';
$html.='</table>';
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);



$chk1='';
$chk2='';
$chk3='';
if($payType=='c'){
	$chk1='checked="checked"';
}elseif($payType=='b'){
	$chk2='checked="checked"';
}elseif($payType=='o'){
	$chk3='checked="checked"';
}
$pdf->Ln(5);
$html_footer='<table width="100%"  border="1" style="text-align:left;">
<tr>
    <td width="25%" align="left"><strong> โดย/By </strong><br>
    <input type="checkbox" name="box1" value="1" readonly="true" '.$chk1.' />เงินสด/cash <br>
    <input type="checkbox" name="box1" value="1" readonly="true" '.$chk2.' />เช็คธนาคาร/Bank<br>
    <input type="checkbox" name="box1" value="1" readonly="true" '.$chk3.' />อื่นๆ '.$payTypeOther.'
    </td>
    <td width="25%" align="left"><strong>สาขา/Branch</strong><br>'.$branch.'</td>
    <td width="25%" align="left"><strong>เลขที่เช็ค/Cheque</strong><br>'.$chequeNo.'</td>
    <td width="25%" align="left"><strong>ลงวันที่/DueDate</strong><br>'.$dueDate.'</td>	
   
		
</tr> ';

$pdf->writeHTMLCell(0, 0, '', '', $html_footer, 0, 1, 0, true, '', true);
$pdf->Ln(6);
$pdf->Cell(0, 15,'...................................               ...................................                  ...................................                    ...................................', 0, false, 'L', 0, '', 0, false, 'M', 'M'); 
$pdf->Ln(6);
$pdf->Cell(0, 15,'ผู้รับเงิน/Received By              ผู้จัดทำ/Prepared By                 ผู้อนุมัติ/Authorized By               สมุห์บัญชี/Accountant', 0, false, 'L', 0, '', 0, false, 'M', 'M'); 


*/
    
    

$pdf->Output('report.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
