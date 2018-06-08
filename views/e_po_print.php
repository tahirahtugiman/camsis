
	<style type="text/css">
.wrapper{
	margin:20px 150px 10px 150px;
}
img{
	display: block;
    margin-left: auto;
    margin-right: auto 
}
.h1-po{
	display: block;
	font-weight: bold;
	font-size:16px;
	text-transform: uppercase;
	width:98%;
	text-align:center;
	margin-top:10px;
	padding:10px;
	border:1px solid black;
}
.h1-po-no{
	display: block;
	font-weight: bold;
	font-size:16px;
	width:98%;
	text-align:center;
	margin-top:10px;
	padding:10px;
	border-bottom: 2px black solid;
}
.info-po,.info-pr{float:left; width:48.5%;display: block;}
.info-po{
	padding:10px 5px 5px 5px;
	border:1px solid black;
	margin-top:10px;
}
.info-pr{
	margin-top:10px;
	margin-left:0px;
	padding:50px 5px 5px 5px;
}
.tbl-info-po{
	font-size:14px;
	border-width: 1px;
	border-collapse: collapse;
	text-transform: uppercase;
	width:100%;
	margin:auto;
}
.tbl-info-pr{
	font-size:12px;
	border-width: 1px;
	border-collapse: collapse;
	text-transform: capitalize;
	margin: 0;
	width:80%;
}
.tbl-info-pr td + td{ border-left: 1px solid black; padding-left:5px;}
.tbl-info-pr td {padding-right:5px;}
.tbl-info-detail{
	font-size:14px;
	border-width: 1px;
	border-collapse: collapse;
	text-transform: capitalize;
	margin: 0 auto;
	width:100%;
}
.tbl-info-detail tr td {width:50%;}
.tbl-info-detail tr td.bold {text-transform: uppercase; font-weight: bold;}
.tbl-info-invoice{
	font-size:14px;
	border-width: 1px;
	border-collapse: collapse;
	text-transform: capitalize;
	margin: 10px auto;
	width:100%;
	border:1px solid black;
	text-align:center;
	height:400px;
}
.tbl-info-invoice tr th {height:40px; border:1px solid black;}
.tbl-info-invoice td {border:1px solid black; padding-top:5px;vertical-align:top;}
.tbl-info-invoice tr:nth-child(2) { height:50px;vertical-align:top;}
.tbl-info-invoice tr th:nth-child(2) { width:400px;}
.tbl-info-tc{
	font-size:12px;
	border-width: 1px;
	border-collapse: collapse;
	margin: 10px auto;
	width:100%;
	font-weight:bold;
}
.block{
 display:inline-block;
 width:7px;
 height:7px;
 border:1px solid black;
 margin-left:5px;
 margin-right:3px;
}
.tbl-info-tc tr td.tc-address{padding:20px; text-align:center;}
.h1-po-qp{
	float:right;
	position: relative;
	top: -80px;
	font-size:8px;
	font-weight:bold;
}
</style>
<style type="text/css" media="print">
	.wrapper{margin:20px 10px 0px 0px;}
	.h1-po{padding:5px; font-size:16px;}
	.h1-po-no{padding:7px; font-size:16px;}
	.tbl-info-po{font-size:9px;}
	.tbl-info-pr{font-size:9px; margin-left:32px; width:300px;}
	.info-po{width:300px;}
	.info-pr{width:38.5%;}
	.info-pr{padding:30px 5px 5px 5px;}
	.tbl-info-detail{font-size:9px;}
	.tbl-info-invoice{font-size:9px;}
	.tbl-info-tc{font-size:9px;}
	.tbl-info-invoice tr th {height:20px;}
	.tbl-info-invoice tr th:nth-child(2) { width:330px;}
	.tbl-info-invoice tr:nth-child(2) { height:20px;}
	.tbl-info-invoice tr:nth-child(6) { height:20px; border:none;}
</style>
<div id="Instruction" class="pr-printer">
    <div class="header-pr">PURCHASE ORDER</div>
    <button onclick="javascript:myFunction('e_po_print?pr=vr&m=<?=$month?>&y=<?=$year?>&none=closed');" class="btn-button btn-primary-button">PRINT</button>
    <button type="cancel" class="btn-button btn-primary-button" onclick="location.href = '<?php base_url();?>e_pr?<?php echo '&m='.$this->input->get('m').'&y='.$this->input->get('y');?>&tab=2';">CANCEL</button>
		<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == '')){?>

	<a href="<?php echo base_url();?>index.php/Procurement/e_po_print?po=<?=$this->input->get('po')?>&mrin=<?=$this->input->get('mrin')?>&pdf=1" style="float:right; margin-right:80px;"><img src="<?php echo base_url();?>images/pdf.png" style="width:40px; height:35px; position:absolute;" title="export to pdf"></a>
	<?php } ?>
</div>

			<div class="wrapper">
			<?php include 'content_headprint2.php';?>
<div class="h1-po-qp">QP 018<br />QF-019</div>
<div class="h1-po">purchase order</div>
<div class="h1-po-no">Purchase Order No : <?=($this->input->get('po') <> '') ? $this->input->get('po') : ''?></div>
	<div class="info-po"><?=(isset($veninfo[0]->VENDOR_NAME)) ? $veninfo[0]->VENDOR_NAME : ''?>
	<table class="tbl-info-po">
		<tr>
			<td valign="top">To :</td>
			<td><b><?=(isset($veninfo[0]->VENDOR_NAME)) ? $veninfo[0]->VENDOR_NAME : ''?></b><br /><?=(isset($veninfo[0]->ADDRESS)) ? $veninfo[0]->ADDRESS : '' ?><br/><?=(isset($veninfo[0]->ADDRESS2))  ? $veninfo[0]->ADDRESS2 : '' ?><br/><?=(isset($veninfo[0]->ADDRESS3)) ? $veninfo[0]->ADDRESS3 : ''?><br/>&nbsp;</td>
		</tr>
		<tr>
			<td>Tel : </td>
			<td><?=(isset($veninfo[0]->TELEPHONE_NO)) ? $veninfo[0]->TELEPHONE_NO : ''?></td>
		</tr>
		<tr>
			<td>Fax : </td>
			<td><?=(isset($veninfo[0]->FAX_NO)) ? $veninfo[0]->FAX_NO : ''?></td>
		</tr>
		<tr>
		</tr>
	</table>
	</div>

	<div class="info-pr">
	<table class="tbl-info-pr">
		<tr>
			<td align="right" style="width:40px;"><b>Po Date</b> </td>
			<?php 
	     if (isset($podetail[0]->PO_Date)){
			$da = new DateTime($podetail[0]->PO_Date);
		 } else {
			$da = new DateTime();
		 } 
			$das = $da->format('j M Y');
			$dayy = $da->format('j');
			$mon = $da->format('m');
			$yr = $da->format('Y');
			
			
			function intPart($float)
{
    if ($float < -0.0000001)
        return ceil($float - 0.0000001);
    else
        return floor($float + 0.0000001);
}
			
			function Greg2Hijri($day, $month, $year, $string = false)
{
    $day   = (int) $day;
    $month = (int) $month;
    $year  = (int) $year;

    if (($year > 1582) or (($year == 1582) and ($month > 10)) or (($year == 1582) and ($month == 10) and ($day > 14)))
    {
        $jd = intPart((1461*($year+4800+intPart(($month-14)/12)))/4)+intPart((367*($month-2-12*(intPart(($month-14)/12))))/12)-
        intPart( (3* (intPart(  ($year+4900+    intPart( ($month-14)/12)     )/100)    )   ) /4)+$day-32075;
    }
    else
    {
        $jd = 367*$year-intPart((7*($year+5001+intPart(($month-9)/7)))/4)+intPart((275*$month)/9)+$day+1729777;
    }

    $l = $jd-1948440+10632;
    $n = intPart(($l-1)/10631);
    $l = $l-10631*$n+354;
    $j = (intPart((10985-$l)/5316))*(intPart((50*$l)/17719))+(intPart($l/5670))*(intPart((43*$l)/15238));
    $l = $l-(intPart((30-$j)/15))*(intPart((17719*$j)/50))-(intPart($j/16))*(intPart((15238*$j)/43))+29;
    
    $month = intPart((24*$l)/709);
    $day   = $l-intPart((709*$month)/24);
    $year  = 30*$n+$j-30;
    
    $date = array();
    $date['year']  = $year;
    $date['month'] = $month;
    $date['day']   = $day;

		$bulanda = array();
		$bulanda = array("kosong", "Muharram", "Safar", "RabiulAwwal", "Rabiuthani", "JumadiulAwwal", "Jumadiuthani", "Rajab", "Shaban", "Ramadan", "Shawwal", "ZhulQada", "ZhulHijja");
		
    if (!$string)
        return $date;
    else
        //return     "{$year}-{$month}-{$day}";
				return "$day $bulanda[$month] $year";
}
			$arabla = Greg2Hijri($dayy,$mon,$yr,"true");
			//echo "lkajsdk:".print_r($arabla).$arabla[day]." ".$arabla[month]." ".$arabla[year];
			//echo "lkajsdk:".$arabla;
			 ?>
			<td><?=$arabla?> / <?=$das?></td>
		</tr>
		<tr>
			<td align="right"><b>Your Ref.</b> </td>
			<td></td>
		</tr>
		<tr>
			<td align="right"><b>PR No.</b> </td>
			<td>N/A</td>
		</tr>
		<tr>
			<td align="right"><b>MRIN No.</b> </td>
			<td><?=($this->input->get('mrin') <> '') ? $this->input->get('mrin') : ''?></td>
		</tr>
		<tr>
			<td align="right"><b>Page.</b> </td>
			<td>1/1</td>
		</tr>
	</table>
	</div>

	<table class="tbl-info-detail">
	<tr>
		<td class="bold"></td>
		<td><b>DELIVERY ADDRESS : ADVANCE PACT SDN BHD</b></td>
	</tr>
	<tr>
		<td class="bold">Asset No : <?=(isset($record[0]->V_Asset_no)) ? $record[0]->V_Asset_no :''?></td>
		<td><?=$hospdet[0]->v_HospitalName?></td>
	</tr>
	<tr>
		<td class="bold">Equipment : <?=(isset($record[0]->V_Asset_name)) ? $record[0]->V_Asset_name :''?></td>
		<td><?=$hospdet[0]->v_HospitalAdd1?> <?=$hospdet[0]->v_HospitalAdd2?></td>
	</tr>
	<tr>
		<td class="bold">department : <?=(isset($record[0]->V_User_Dept_code)) ? $record[0]->V_User_Dept_code :''?> </td>
		<td><?=$hospdet[0]->v_HospitalAdd3?> <?=$hospdet[0]->v_hosp_postcode?></td>
	</tr>
	<tr>
		<td class="bold">work order no : <?=(isset($record[0]->V_Request_no)) ? $record[0]->V_Request_no :''?> </td>
		<td><b><i>ATTN: <i><?=$hospdet[0]->v_head_of_bems?> / <?=$hospdet[0]->v_teleno?></i></b></td>
	</tr>
	</table>

	<table class="tbl-info-invoice">
	<tr>
		<th>No</th>
		<th>Description</th>
		<th>Unit <br/> Measure</th>
		<th>Qty</th>
		<th>Unit Price <br/> (RM)</th>
		<th>Amount (RM)<br/> Before GST</th>
		<th>GST %</th>
		<th>GST (RM)</th>
		<th>Amount (RM)<br/> After GST</th>
	</tr>
	<tr >
		<td></td>
		<td style="text-align:left;"><b><u><?=$record[0]->V_Asset_name?></u></b><br /><b><u>Model : <?=$record[0]->V_Model_no?></u></b> </td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	
					
				<tr style="height:20px;vertical-align:top; border-top:hidden;">
					<td>1</td>
					<td style="text-align:left;"><?=$itemrec[0]->ItemName?><br /> P/N : </td>
					<td>UNIT</td>
					<td ><?=$itemrec[0]->QtyReqfx?></td>
					<?php  
					$howmanyunit = floatval($itemrec[0]->QtyReqfx);
					$perunit = floatval($itemrec[0]->Unit_Costx);
					$totalcost = $perunit*$howmanyunit;
					$gstcost = $totalcost*.06;
					$totalwgst = $gstcost+$totalcost;
					//echo "qwqwqw".$itemrec[0]->Unit_Costx."iuiuiu".$perunit;
					?>
					<td align="right"><?=number_format($perunit,2)?></td>
					<td align="right"><?=number_format($totalcost,2)?></td>
					
				
					<td align="right">6%</td>
					<td align="right"><?=number_format($gstcost,2)?></td>
					<td align="right"><?=number_format($totalwgst,2)?></td>
				
				</tr>



				
	<tr style="height:80%; border-top-style:hidden;">
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr style="height:20px; border-top-style:hidden;">
		<td></td>
		<td style="text-align:left;">Discount</td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td colspan="6" style="text-align:left; padding-left:5px; text-transform: none; height:40px;"><i>Please notify us immediately (refer PO acceptance form) if this order cannot</i><br /><i>be shipped or completed on before 14 days from the last date of signatory</i></td>
		<td colspan="2">TOTAL PRICE <br /> AFTER GST</td>
		<td align="right"><?=number_format($totalwgst,2)?></td>
	</tr>
</table>
<table class="tbl-info-tc">
	<tr>
		<td colspan="3"><i>Terms & Condition :-</i></td>
	</tr>
	<tr>
		<td valign="top"><i>i)</i></td>
		<td><i>As human health care provider, the repaired, supply devices and services carried out <br /> must comply to Occupational Health and Safety (OHS) Standard and Environmental <br /> Quality Act 1974(EQA).</i></td>
		<td width="225px">Authorised Signatory :</td>
	</tr>
	<tr>
		<td valign="top"><i>ii)</i></td>
		<td><i>Delivery of part/goods must be made to the address mentioned above.</i></td>
		<td></td>
	</tr>
	<tr>
		<td valign="top"><i>iii)</i></td>
		<td><i>Invoice together with job sheet/service report/delivery order shall be sent to : <br /> <span style="font-weight:normal; display:block;">HEAD OFFICE : 2-3A, Perdana The Place, Jalan PJU 8/5G, <br/> Bandar Damansara Perdana , 47820 Petaling Jaya, Selangor </span></i></td>
		<td></td>
	</tr>
	<tr>
		<td valign="top"><i>iv)<i/></td>
		<td></i>Payment terms:- <span class="block"></span> Cash on delivery <span class="block"></span> Cash in Advance <span class="block"></span> 30 Days from invoice date</i></td>
		<td></td>
	</tr>
	<tr>
		<td valign="top"><i>v)</i></td>
		<td><i>Purchase Order valid for 30 days from date mentioned above.</i></td>
		<td></td>
	</tr>
	<tr>
		<td valign="top"><i>vi)</i></td>
		<td><i>Advance Pact Shd Bhd GST Registration Number : 001458896896</i></td>
		<td>Date :</td>
	</tr>
	<tr>
		<td class="tc-address" colspan="3">HEAD OFFICE : 2-3A, Perdana The Place, Jalan PJU 8/5G, Bandar Damansara Perdana , 47820 Petaling Jaya, Selangor Darul Ehsan Malaysia <br /> Tel :+6(03)-77268632 &nbsp;&nbsp;&nbsp; Fax :+6(03)-77258836</td>
	</tr>
	<tr>
		<td colspan="2">APSB-FORM</td>
		<td align="right">Revision 5.0 : 01 JUNE 2015</td>
	</tr>

</table>
<button onclick='myFunction()' style="visibility:hidden;">PRINT</button>
</div>
<br>
<br>
<br>


				
	<script language="javascript" type="text/javascript">
		parent.frameHeader.document.getElementById("PreviewTitle").innerHTML = parent.frameHeader.document.title;
		parent.frameHeader.document.getElementById("imgPrint").src="../images/btn1Print.gif";
		parent.frameHeader.document.getElementById("imgPrint").style.width="66px";
		parent.frameHeader.document.getElementById("imgPrint").style.height="19px";
	</script>

		
</body>

</html>








