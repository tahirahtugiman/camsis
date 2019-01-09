<?php
if ($this->input->get('ex') == 'excel'){
	$filename ="Statutory & License Summary - ".date('F', mktime(0, 0, 0, $month, 10)) .$year.".xls";
	header('Content-type: application/ms-excel');
	header('Content-Disposition: attachment; filename='.$filename);
}
?>
<style type="text/css">
	table.proposedtable{
		font-size: 12px;
		color: #333333;
		width: 100%;
		border-width: 1px;
		border-color: ;
		border-collapse: collapse;
	}
	table.proposedtable tr {
		background-color: white;
	}
	table.proposedtable th {
		font-size: 18px;
		background-color: white;
		border-width: 1px;
		padding: 3px;
		border-style: solid;
		border-color: black;
		text-align: center;
	}
	table.proposedtable tr th:nth-child(1){
		width: 33px;
	}
	table.proposedtable td {
		font-size: 18px;
		border-width: 1px;
		padding: 3px;
		border-style: solid;
		border-color: black;
	}
</style>
<?php if ($this->input->get('ex') == ''){?>
<div id="Instruction" class="pr-printer">
	<div class="header-pr">CHEMICALS APPROVED LIST</div>
	<button onclick="javascript:myFunction('report_sls?m=<?=$month?>&y=<?=$year?>&grp=<?=$this->input->get('grp');?>&none=closed&ex=ex');" class="btn-button btn-primary-button">PRINT</button>
	<button type="cancel" class="btn-button btn-primary-button" onclick="location.href = '<?php base_url();?>Schedule?<?php echo '&m='.$this->input->get('m').'&y='.$this->input->get('y').'&grp='.$this->input->get('grp');?>';">CANCEL</button>
	<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == '')){?>
	<a href="<?php echo base_url();?>index.php/contentcontroller/report_sls?m=<?=$this->input->get('m');?>&y=<?=$this->input->get('y');?>&stat=<?=$this->input->get('stat');?>&ex=excel&none=close&grp=<?=$this->input->get('grp');?>" style="float:right; margin-right:40px;"><img src="<?php echo base_url();?>images/excel.png" style="width:40px; height:38px; position:absolute;" title="export to excel"></a>
	<?php } ?>
</div>
<?php } ?>
<div class="menu" style="position:relative;">
	<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
		<?php include 'content_headprint.php';?>
	<?php } ?>

<?php
	$record[0] = (object)array(
		"product_name"=>"Kleen All",
		"product_code"=>"IMEC 511",
		"area_of_application"=>"All",
		"manufacturer"=>"IMEC Hygiene SDN BHD",
		"purposed"=>"A highly efficent multi porpose floor and hard surface cleaner for general cleaning"
	);
	$record[1] = (object)array(
		"product_name"=>"Metal Shine",
		"product_code"=>"IMEC 561",
		"area_of_application"=>"All",
		"manufacturer"=>"IMEC Hygiene SDN BHD",
		"purposed"=>"Remove grease and tarnish on all metal surfaces"
	);
	$record[2] = (object)array(
		"product_name"=>"Aire Perfume",
		"product_code"=>"IMEC 555",
		"area_of_application"=>"All",
		"manufacturer"=>"IMEC Hygiene SDN BHD",
		"purposed"=>"Suitable for telephone spray. As a long lasting deodarant spray that is environmentally friendly."
	);
	$record[3] = (object)array(
		"product_name"=>"Oruo Pine",
		"product_code"=>"IMEC 527",
		"area_of_application"=>"All",
		"manufacturer"=>"IMEC Hygiene SDN BHD",
		"purposed"=>"For drains, toilets and any washable hard surface like wash places and bathroom."
	);
	$record[4] = (object)array(
		"product_name"=>"Hand Soap",
		"product_code"=>"IMEC 525P",
		"area_of_application"=>"All",
		"manufacturer"=>"IMEC Hygiene SDN BHD",
		"purposed"=>"Perfumed, and for hand washing loquid in soap dispensers."
	);
	$record[5] = (object)array(
		"product_name"=>"De Foam",
		"product_code"=>"IMEC 524",
		"area_of_application"=>"All",
		"manufacturer"=>"IMEC Hygiene SDN BHD",
		"purposed"=>"For eliminating excessive foaming caused by shampoo residue remaining in carpets from previous rotary shampooing. Suitable also for use in wet & dry pick up."
	);
	$record[6] = (object)array(
		"product_name"=>"Lo Foam",
		"product_code"=>"IMEC 523",
		"area_of_application"=>"All",
		"manufacturer"=>"IMEC Hygiene SDN BHD",
		"purposed"=>"For Soil extraction celaning of carpets and rugs."
	);
	$record[7] = (object)array(
		"product_name"=>"Aire Fresh (AK)",
		"product_code"=>"IMEC 519AK",
		"area_of_application"=>"All",
		"manufacturer"=>"IMEC Hygiene SDN BHD",
		"purposed"=>"to clean, sanitise and deodorize in one application. As general spraying for toilets, offices and factories."
	);
	$record[8] = (object)array(
		"product_name"=>"Flush Kleen",
		"product_code"=>"IMEC 517",
		"area_of_application"=>"All",
		"manufacturer"=>"IMEC Hygiene SDN BHD",
		"purposed"=>"toilet bowl descaler and disinfectant."
	);
	$record[9] = (object)array(
		"product_name"=>"Glass Kleen",
		"product_code"=>"IMEC 515",
		"area_of_application"=>"All",
		"manufacturer"=>"IMEC Hygiene SDN BHD",
		"purposed"=>"for cleaning window, mirror, chrome and glass surface."
	);
	$record[10] = (object)array(
		"product_name"=>"Industrial Degreaser",
		"product_code"=>"IMEC 514",
		"area_of_application"=>"All",
		"manufacturer"=>"IMEC Hygiene SDN BHD",
		"purposed"=>"for usage in heavy industry, machinery and automotive shop, food processing industry, newspaper printing, and marine industry."
	);
	$record[11] = (object)array(
		"product_name"=>"Poly Buff",
		"product_code"=>"IMEC 509",
		"area_of_application"=>"All",
		"manufacturer"=>"IMEC Hygiene SDN BHD",
		"purposed"=>"for spray buffing floor maintenance on IMEC 504 or IMEC 505"
	);
	$record[12] = (object)array(
		"product_name"=>"Poly Lite",
		"product_code"=>"IMEC 504",
		"area_of_application"=>"All",
		"manufacturer"=>"IMEC Hygiene SDN BHD",
		"purposed"=>"a high solid interlocked emulsion floor polish formulated to give a high degree of glass levelling and good black heel mark resistance. Suitable for vinyl, asphait, and thermoplastic floor."
	);
	$record[13] = (object)array(
		"product_name"=>"Parablock Odorban",
		"product_code"=>"IMEC 520",
		"area_of_application"=>"All",
		"manufacturer"=>"IMEC Hygiene SDN BHD",
		"purposed"=>"Deodorant block"
	);
	$record[14] = (object)array(
		"product_name"=>"Sterile IPA 70% v/v WFI 900ml T/Spray Non Sterile IPA 70% v/v WFI 900ml T/Spray",
		"product_code"=>"IPA 70% / Isopropyl Alcohol 70% / IPA 70% SOLUTIONIPA  70% / Isopropyl Alcohol 70% / IPA 70% SOLUTION",
		"area_of_application"=>"CLEAN ROOM",
		"manufacturer"=>"SANMEDI SDN BHD",
		"purposed"=>"For cleanroom cleaning"
	);
	$record[15] = (object)array(
		"product_name"=>"HYDROGEN PEROXIDE (H202) BIOBURDEN REDUCED SOLUTION",
		"product_code"=>"900ml Trigger Spray",
		"area_of_application"=>"CLEAN ROOM",
		"manufacturer"=>"SANMEDI SDN BHD",
		"purposed"=>"For cleanroom cleaning"
	);
	$record[16] = (object)array(
		"product_name"=>"Klercide 70/30 IPA	",
		"product_code"=>"KLERCIDE",
		"area_of_application"=>"CLEAN ROOM",
		"manufacturer"=>"PRUDENTIAL AMPRI CLEANROOM SERVICES",
		"purposed"=>"For cleanroom cleaning"
	);
	$record[17] = (object)array(
		"product_name"=>"Dirt Buster",
		"product_code"=>"Dirt Buster",
		"area_of_application"=>"All",
		"manufacturer"=>"OGOSIN SDN BHD",
		"purposed"=>"For cleaning Kitchen and engineering workshops"
	);
	$record[18] = (object)array(
		"product_name"=>"Mira Strip",
		"product_code"=>"Mira Strip",
		"area_of_application"=>"All",
		"manufacturer"=>"OGOSIN SDN BHD",
		"purposed"=>"Poolish Stripper"
	);
	$record[19] = (object)array(
		"product_name"=>"Sterile Qceine RFU in WFI Non Sterile Qceine RFU",
		"product_code"=>"Qceine RFU Sterile Qceine RFU",
		"area_of_application"=>"CLEAN ROOM",
		"manufacturer"=>"SANMEDI SDN BHD",
		"purposed"=>"For cleanroom cleaning"
	);
	$record[20] = (object)array(
		"product_name"=>"Natural Fresh (Vanilla Bouquet)",
		"product_code"=>"IMEC NF60",
		"area_of_application"=>"All",
		"manufacturer"=>"IMEC Hygiene SDN BHD",
		"purposed"=>"Air Freshener"
	);
	$record[21] = (object)array(
		"product_name"=>"Surgi Scrub 4%",
		"product_code"=>"-",
		"area_of_application"=>"All",
		"manufacturer"=>"STERILINE SDN BHD",
		"purposed"=>"Disposable Cartridge type antiseptic hand scrub"
	);
	$record[22] = (object)array(
		"product_name"=>"Germisep tablet",
		"product_code"=>"-",
		"area_of_application"=>"All",
		"manufacturer"=>"HOVID BHD",
		"purposed"=>"Disinfection of inanimate surfaces (when appropriately dissolved in water)"
	);
	$record[23] = (object)array(
		"product_name"=>"Zyceine",
		"product_code"=>"Non sterile zyceine plus in tablet",
		"area_of_application"=>"CLEAN ROOM",
		"manufacturer"=>"SANMEDI SDN BHD",
		"purposed"=>"For cleanroom cleaning"
	);
	$record[24] = (object)array(
		"product_name"=>"Dionised Water",
		"product_code"=>"-",
		"area_of_application"=>"CLEAN ROOM",
		"manufacturer"=>"SANMEDI SDN BHD",
		"purposed"=>"For cleanroom cleaning"
	);
?>
<?php if( $this->input->get("ex")=="excel" || $this->input->get("ex")=="" ){?>
		<div class="m-div">
			<div><p style="font-size: 14;"><b>CHEMICALS APPROVED LIST BY MOH</b></p></div>
			<table class="proposedtable" border="1" style="text-align:center; width:90%; border-color: black;" align="center">
				<tr style="text-align:center;font-weight:bold;">
					<th>No</th>
					<th>Product Name</th>
					<th>Product Code</th>
					<th>Area of Application</th>
					<th>Manufacturer</th>
					<th>Purposed</th>
				</tr>
<?php } ?>
<?php $no=1;foreach($record as $row){
	if ($this->input->get('ex')=='ex' && ( $no==1 OR $no%7==1) ){?>

		<div class="m-div">
			<div><p style="font-size: 14;"><b>CHEMICALS APPROVED LIST BY MOH</b></p></div>
			<table class="proposedtable" border="1" style="text-align:center; width:90%; border-color: black;" align="center">
				<tr style="text-align:center;font-weight:bold;">
					<th>No</th>
					<th>Product Name</th>
					<th>Product Code</th>
					<th>Area of Application</th>
					<th>Manufacturer</th>
					<th>Purposed</th>
				</tr>
	<?php } ?>

	<tr style="text-align:center;">
		<td valign="middle" align="center"><?=$no;?></td>
		<td valign="middle" align="center"><?=($row->product_name) ? $row->product_name : '';?></td>
		<td valign="middle" align="center"><?=($row->product_code) ? $row->product_code : '';?></td>
		<td valign="middle" align="center"><?=($row->area_of_application) ? $row->area_of_application : '';?></td>
		<td valign="middle" align="center"><?=($row->manufacturer) ? $row->manufacturer : '';?></td>
		<td valign="middle" align="center"><?=($row->purposed) ? $row->purposed : '';?></td>
	</tr>
	<?php $no++;?>
	<?php if($this->input->get('ex')=='ex' && ( (($no-1)%7==0) || (($no-1)== count($record)) ) ) {?>

			</table>
			<?php if ($this->input->get('ex') != 'excel'){?>
				<div id="container" class="qapgraf2"></div>
			<?php } ?>
		</div>
		<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
			<table width="99%" border="0">
				<tr>
					<td valign="top" colspan="2"><hr color="black" size="1Px"></td>
				</tr>
				<tr>
					<td colspan="5">CHEMICALS APPROVED LIST BY MOH<br><i>Computer Generated - CAMSIS</i></td>
				</tr>
			</table>
		</div>

			<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
				<?php include 'content_footerprint.php';?>
			<?php } ?>
				<div class="StartNewPage" id="breakpage"><span id="pagebreak">Page Break</span></div>
			<?php } ?>
		<?php } ?>
	<?php //} ?>
<?php } ?>

<?php if( $this->input->get("ex")=="excel" || $this->input->get("ex")=="" ){?>
			</table>
		</div>
		<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
			<table width="99%" border="0">
				<tr>
					<td valign="top" colspan="2"><hr color="black" size="1Px"></td>
				</tr>
				<tr>
					<td colspan="5">CHEMICALS APPROVED LIST BY MOH<br><i>Computer Generated - CAMSIS</i></td>
				</tr>
			</table>
		</div>

			<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
				<?php include 'content_footerprint.php';?>
			<?php } ?>
				<div class="StartNewPage" id="breakpage"><span id="pagebreak">Page Break</span></div>
			<?php } ?>
<?php } ?>
