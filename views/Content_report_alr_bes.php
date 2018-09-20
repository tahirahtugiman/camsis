<?php
if ($this->input->get('ex') == 'excel'){
	$filename ="Asset Listing Report - ".date('F', mktime(0, 0, 0, $month, 10)) .$year.".xls";
	header('Content-type: application/ms-excel');
	header('Content-Disposition: attachment; filename='.$filename);
}
?>
<style>
	.fra{mso-number-format:"\#\ ?\/?";/*force fractions*/}
</style>
<?php if ($this->input->get('ex') == ''){?>
<div id="Instruction" class="pr-printer">
	<div class="header-pr">Asset Listing Report</div>
	<button onclick="javascript:myFunction('report_alr?m=<?=$month?>&y=<?=$year?>&none=closed&grp=<?=$this->input->get('grp');?>&dept=<?=$this->input->get('dept');?>&group=<?=$this->input->get('group');?>');" class="btn-button btn-primary-button">PRINT</button>
	<button type="cancel" class="btn-button btn-primary-button" onclick="location.href = '<?php base_url();?>Schedule?<?php echo '&grp='.$this->input->get('grp');?>';">CANCEL</button>
	<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == '')){?>
	<a href="<?php echo base_url();?>index.php/contentcontroller/report_alr?m=<?=$this->input->get('m');?>&y=<?=$this->input->get('y');?>&stat=<?=$this->input->get('stat');?>&ex=excel&none=close&grp=<?=$this->input->get('grp');?>&dept=<?=$this->input->get('dept');?>&group=<?=$this->input->get('group');?>" style="float:right; margin-right:40px;"><img src="<?php echo base_url();?>images/excel.png" style="width:40px; height:38px; position:absolute;" title="export to excel"></a>
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
				<td style="padding-left:10px; padding-bottom:10px;" colspan="5">Asset Listing Report - <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?> - <?php echo $this->session->userdata('usersessn');?> ( <?php if ($this->input->get('grp') == ''){echo 'ALL'; }else{ echo 'Group '.$this->input->get('grp');} ?> )</td>
			</tr>
		</table>
		<?php if ($this->input->get('ex') == ''){?>
		<div id="Instruction" class="tbl-none" style="background:white;">
			<form method="get" action="">
				<table class="tbl-wo-3">
					<tr>
						<td>Department</td>
						<td>Group</td>
						<td></td>
					</tr>
					<tr>
						<td>
							<?php 
							$dept_list = array('' => 'All');
							foreach ($dept as $row){
								$dept_list[$row->v_UserDeptCode] = $row->v_UserDeptDesc.' ('.$row->v_UserDeptCode.')';
							}
							?>
							<?php echo form_dropdown('dept', $dept_list , set_value('dept',$deptdp) , 'style="width: 300px;" id="cs_month"'); ?>
						</td>
						<td>
							<?php 
							$assetgroup_list = array('' => 'All');
							foreach ($assetgroup as $r){
								// $assetgroup_list[$r->v_Equip_Code] = $r->v_workgroupdesc;
								$assetgroup_list[$r->v_Equip_Code] = $r->v_Equip_Desc;
							}
							?>
							<?php echo form_dropdown('group', $assetgroup_list , set_value('group',$assetgrp) , 'style="width: 300px;" id="cs_month"'); ?>
						</td>
						
						<td><button type="submit"  onclick="javascript: submit()">Generate</button></td>
						
					</tr>
				</table>
			</form>
		</div>
		<?php } ?>	
	</div>
</div>
<div id="constrainer">
	<div class="scrolltable<?=($this->input->get('none') == 'closed') ? '' : '1';?>">
		<table class="header-alr-bes">
			<thead>
				<tr>
					<th>No.</th>
					<th>Asset Number</th>
					<th>UMDNS<br/>Code</th>
					<th>Equipment Name</th>
					<th>Brand</th>
					<th>Model</th>
					<th>Make</th>
					<th>Serial<br/>Number</th>
					<th>Dept Name</th>
					<th>Dept Code</th>
					<th>Location Name</th>
					<th>Location Code</th>
					<th>Commission<br/>Date</th>
					<th>Warranty End</th>
					<th>Asset Age<br/>(Years)</th>
					<th>Purchase<br/>Cost</th>
					<th>Accessories</th>
					<th>Agent</th>
					<th>Asset<br/>Status</th>
					<th>File/MDA</th>
					<th>Asset Group</th>
				</tr>
			</thead>
			<?php  if (!empty($record)) {?>
			<tbody class="asst">
				<?php $numrow = 1; foreach($record as $row):?>
				<tr class="tbl-fixed-td-bes">
					<td><?= $numrow ?></td>
					<td><?= ($row->V_Tag_no) ? anchor ('contentcontroller/AssetRegis?tab=Maintenance&assetno='.$row->V_Asset_no.'&state='.$this->input->get('state'),''.$row->V_Tag_no.'' ) : 'N/A' ?></td>
					<td><?= ($row->Asset_Type) ? $row->Asset_Type : 'N/A' ?></td>
					<!--<td><?= ($row->V_Equip_code) ? $row->V_Equip_code : 'N/A' ?></td>-->
					<td style="text-align: left;"><?= ($row->v_Equip_Desc) ? $row->v_Equip_Desc : 'N/A' ?></td>
					<td><?= ($row->V_Brandname) ? $row->V_Brandname : 'N/A' ?></td>
					<td><?= ($row->V_Model_no) ? $row->V_Model_no : 'N/A' ?></td>
					<td><?= ($row->V_Make) ? $row->V_Make : 'N/A' ?></td>
					<td class="fra"><?= ($row->V_Serial_no) ? $row->V_Serial_no : 'N/A' ?></td>
					<td style="text-align: left;"><?= ($row->v_UserDeptDesc) ? $row->v_UserDeptDesc : 'N/A' ?></td>
					<td ><?= ($row->V_User_Dept_code) ? $row->V_User_Dept_code : 'N/A' ?></td>
					<td style="text-align: left;"><?= ($row->v_Location_Name) ? $row->v_Location_Name : 'N/A' ?></td>
					<td><?= ($row->V_Location_code) ? $row->V_Location_code : 'N/A' ?></td>
					<td><?= ($row->CommissionDate) ? ($row->CommissionDate != '0000-00-00 00:00:00' ? date("d/m/Y",strtotime($row->CommissionDate)) : '-' ) : 'N/A' ?></td>
					<td><?= ($row->WarrantyEndDate) ? ($row->WarrantyEndDate != '0000-00-00 00:00:00' ? date("d/m/Y",strtotime($row->WarrantyEndDate)) : '-' ) : 'N/A' ?></td>
					<td><?= ($row->Age) ? $row->Age : 'N/A' ?></td>
					<td style="text-align: left;"><?= ($row->N_Cost) ? printf("$%01.1f", $row->N_Cost) : 'N/A' ?></td>
					<td style="text-align: left;"><?= ($row->accessories) ? $row->accessories : 'N/A' ?></td>
					<td><?= ($row->V_Agent) ? $row->V_Agent : 'N/A' ?></td>
					<td><?= ($row->v_AssetStatus) ? $row->v_AssetStatus : 'N/A' ?></td>
					<td><?= ($row->V_File_Ref_no) ? $row->V_File_Ref_no : 'N/A' ?></td>
					<td><?= ($row->v_asset_grp) ? $row->v_asset_grp : 'N/A' ?></td>
				</tr>
				<?php $numrow++; endforeach;?>
			</tbody>
			<?php }else { ?>
			<tbody>
				<tr class="tbl-fixed-td-bes" align="center" style="background:white; height:310px;">
					<td colspan="21"><span style="color:red; display:block;">NO COMPLAINT RECORDS FOUND FOR THIS WORK ORDER.</span></td>
				</tr>
			</tbody>
			<?php } ?>
		</table>
	</div>
</div>
<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
	<table width="99%" border="0">
		<tr>
			<td valign="top" colspan="2"><hr color="black" size="1Px"></td>
		</tr>
		<tr>
			<td width="50%">Asset Listing Report - <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?><br><i>Computer Generated - CAMSIS</i></td>
			<td width="50%" align="right"></td>
		</tr>
	</table>
<!-- </div> -->
<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
<?php include 'content_footerprint.php';?>
<?php } ?>
<div class="StartNewPage" id="breakpage"><span id="pagebreak">Page Break</span></div>

<?php } ?>