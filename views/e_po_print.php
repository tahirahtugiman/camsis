
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
</div>

			<div class="wrapper">
			<?php include 'content_headprint.php';?>
<div class="h1-po-qp">QP 018<br />QF-019</div>
<div class="h1-po">purchase order</div>
<div class="h1-po-no">Purchase Order No : PO/OPU-02/NSN/SBN/G2016/0362</div>
	<div class="info-po">
	<table class="tbl-info-po">
		<tr>
			<td valign="top">To :</td>
			<td><b>GAGASAN PETIR (M) SDN BHD</b><br />NO. 2310, TINGKAT 1,<br/>JALAN SJ 10/1, TAMAN SEREMBAN JAYA,<br/>70450 SEREMBAN, NEGERI SEMBILAN.<br/>&nbsp;</td>
		</tr>
		<tr>
			<td>Tel : </td>
			<td>06 - 679 4799</td>
		</tr>
		<tr>
			<td>Fax : </td>
			<td>06 - 679 4828</td>
		</tr>
		<tr>
		</tr>
	</table>
	</div>

	<div class="info-pr">
	<table class="tbl-info-pr">
		<tr>
			<td align="right" style="width:40px;"><b>Po Date</b> </td>
			<td>15 Syawal 1437 / 21 Jul 2016</td>
		</tr>
		<tr>
			<td align="right"><b>Your Ref.</b> </td>
			<td>GP/16-0301</td>
		</tr>
		<tr>
			<td align="right"><b>PR No.</b> </td>
			<td>PR/2184/16</td>
		</tr>
		<tr>
			<td align="right"><b>MRIN No.</b> </td>
			<td>MRIN/N9/SBN/00599/2016</td>
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
		<td class="bold">Asset No : BEHDU01-0034</td>
		<td>Hospital Tuanku Ja'afar</td>
	</tr>
	<tr>
		<td class="bold">Equipment : HEMODIALYSIS UNITS</td>
		<td> Jalan Dr. Muthu, Seremban</td>
	</tr>
	<tr>
		<td class="bold">department : HDU </td>
		<td>Negeri Sembilan&nbsp;70300</td>
	</tr>
	<tr>
		<td class="bold">work order no : SBN/AP/B00005/16 </td>
		<td><b><i>ATTN: <i>Shariza Noor binti Mokhtar / 06 - 765 2015/2016</i></b></td>
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
		<td style="text-align:left;"><b><u>Hemodialysis Units</u></b><br /><b><u>Model : Fresenius 4008S</u></b> </td>
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
					<td style="text-align:left;">DIASAFE PLUS FILTER<br /> P/N : </td>
					<td>UNIT</td>
					<td >10</td>
					<td align="right">305.00</td>
					<td align="right">3,050.00</td>
					
				
					<td align="right">6%</td>
					<td align="right">183.00</td>
					<td align="right">3,233.00</td>
				
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
		<td align="right">3,233.00</td>
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








