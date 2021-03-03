<?php

require_once('library/tcpdf_min/tcpdf.php');

ob_start();

ob_start();

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set font


// add a page
$pdf->AddPage();





$pdf->SetFont('xtitre', '', 12);
// Persian contentl
$htmlpersian = '
<body dir="rtl" style="text-align: center">
<table width="100%">
<tr>
<td></td>

<td></td>
</tr>
</table>
<br>
<br>
<table>
<tr>
<td> شماره : 0012 </td>
<td><h3>«برگ خروج کالا»</h3></td>
<td>تاریخ : 1398/8/28/td>
</tr>
</table>
<br>
<br>
<table border="1px" cellpadding="5px">
<tr>
<td width="30%"><b>ملاحظات </b>  </td>
<td width="30%"><b>تعداد</b></td>
<td width="30%"><b>شرح کالا</b>  </td>
<td width="10%">ردیف </td>
</tr>';


$htmlpersian .= '
<tr>
    <td></td>
    <td>  '.number_format(1000).'  
         عدد
        
         </td>
    <td>برد آسانسور </td>
    <td>1</td>
</tr>
';
$htmlpersian .="</table>
<br>
<br>
<table>
<tr>
<td>امضاء تحویل گیرنده : </td>
<td> امضاء صادر کننده  :  </td>
</tr>
</table>

";
$pdf->WriteHTML($htmlpersian, true, 0, true, 0);


$pdf->SetFont('xkoodak', '', 12);

// set LTR direction for english translation
$pdf->setRTL(false);


//Close and output PDF document
$pdf->Output();
?>
