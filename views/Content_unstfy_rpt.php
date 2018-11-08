<?php
if ($this->input->get('ex') == 'excel'){
$filename ="Total Joint Inspections (Unsatisfactory)".date('F', mktime(0, 0, 0, $month, 10)) .$year.".xls";
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);
}
?>
<?php if ($this->input->get('ex') == ''){?>
<?php include 'content_btp.php';?>
<div id="Instruction" class="pr-printer">
    <div class="header-pr">Total Joint Inspections (Unsatisfactory)</div>
    <button onclick="javascript:myFunction('join_unstfy_rpt?m=<?=$month?>&y=<?=$year?>&dept=<?=$this->input->get('dept')?>&none=closed&ex=<?=$this->input->get('none');?>');" class="btn-button btn-primary-button">PRINT</button>
    <button type="cancel" class="btn-button btn-primary-button" onclick="location.href = '<?php echo $btp ;?>';">CANCEL</button>
	<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == '')){?>
	<a href="<?php echo base_url();?>index.php/contentcontroller/join_unstfy_rpt?m=<?=$this->input->get('m');?>&y=<?=$this->input->get('y');?>&dept=<?=$this->input->get('dept')?>&ex=excel&none=close" style="float:right; margin-right:40px;"><img src="<?php echo base_url();?>images/excel.png" style="width:40px; height:38px; position:absolute;" title="export to excel"></a>
	<?php } ?>
</div>
<?php } ?>
<div class="menu" style="position:relative;">
<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
<?php include 'content_headprint.php';?>
<?php } ?>
<div class="m-div">
	<table class="rport-header">
		<tr>
			<td colspan="4" valign="top">Total Joint Inspections (Unsatisfactory) - <?=date("d/m/Y",strtotime($year.'-'.$month.'-09'))?> - <?=date("d/m/Y",strtotime('-1 days',strtotime('+1 months',strtotime($year.'-'.$month.'-09'))))?> - <?php echo $this->session->userdata('usersessn');?></td>
			
		</tr>
	</table>

	<table class="tftable" border="1" style="text-align:center;width:80%" align="center">
		<tr>
			<th colspan="6"><?=$records[0]->v_UserDeptDesc;?> - <?php echo date_format(date_create("2013-".$month."-01"),"M");?>-18</th>
	

		</tr>
		<tr>
			<th>Cleaning Activity</th>
			<th colspan="5" style="text-align: center;">Total Joint Inspections (Unsatisfactory) </th>
		</tr>
		
		<tr>
		<td style="font-weight: bold;">Floor</td>
		<td colspan="5"><?=$jic[0]->Flr?></td>
		</tr>
		
		<tr>
		<td style="font-weight: bold;">Wall & Door</td>
		<td colspan="5"><?=$jic[0]->WallDoor?></td>
		
		</tr>
		<tr>
		<td style="font-weight: bold;">Ceilling</td>
		<td colspan="5"><?=$jic[0]->Ceiling?></td>
		
		</tr>
		<tr>
		<td style="font-weight: bold;">Windows</td>
		<td colspan="5"><?=$jic[0]->Windows?></td>
	
		</tr>
		<tr>
		<td style="font-weight: bold;">Fixtures</td>
		<td colspan="5"><?=$jic[0]->Fixtures?></td>
		
		</tr>
		<tr>
		<td style="font-weight: bold;">Furniture & Fitting</td>
		<td colspan="5"><?=$jic[0]->FurnitureFitting?></td>
		
		</tr>
			<tr>
		<td style="font-weight: bold;">Total</td>
		<td colspan="5" style="font-weight: bold;"><?=$jic[0]->Flr + $jic[0]->WallDoor + $jic[0]->Ceiling + $jic[0]->Windows + $jic[0]->Fixtures + $jic[0]->FurnitureFitting?></td>
		
		</tr>
	</table>
</div>
<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
	<table width="99%" border="0">
		<tr>
			<td valign="top" colspan="2"><hr color="black" size="1Px"></td>
		</tr>
		<tr>
			<td width="50%">Total Joint Inspections (Unsatisfactory)<br><i>Computer Generated - CAMSIS</i></td>
			<td width="50%" align="right"></td>
		</tr>
	</table>
<?php } ?>
<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
<?php include 'content_footerprint.php';?>
<?php } ?>
</div>
</div>

