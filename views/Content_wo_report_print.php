<?php
if ($this->input->get('ex') == 'excel'){
	$filename ="MONTHLY PROCUREMENT REPORT ".date('F', mktime(0, 0, 0, $month, 10)) .$year.".xls";
	header('Content-type: application/ms-excel');
	header('Content-Disposition: attachment; filename='.$filename);
}
?>
<?php if ($this->input->get('ex') == ''){?>
<div id="Instruction" class="pr-printer">
	<div class="header-pr">WORK ORDER NO MRIN REPORT</div>
	<!-- <button onclick="javascript:myFunction('pr_report?pr=vr&m=<?=$month?>&y=<?=$year?>&none=closed');" class="btn-button btn-primary-button">PRINT</button> -->
	<button type="cancel" class="btn-button btn-primary-button" onclick="location.href = '<?php base_url();?>report?<?php echo '&m='.$this->input->get('m').'&y='.$this->input->get('y');?>';">CANCEL</button>
	<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == '')){?>
	<a href="<?php echo base_url();?>index.php/Procurement/pr_report?pr=wo&m=<?=$this->input->get('m');?>&y=<?=$this->input->get('y');?>&ex=excel&none=close" style="float:right; margin-right:40px;"><img src="<?php echo base_url();?>images/excel.png" style="width:40px; height:38px; position:absolute;" title="export to excel"></a>
	<?php } ?>
</div>
<?php } ?>
<?php if( !empty($record) ){?>
	<?php $numrow = 1; foreach($record as $row):?>
		<?php if ($numrow==1 OR $numrow%14==1) { ?>
			<div class="menu" style="position:relative;">

				<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
					<?php include 'content_headprint.php';?>
				<?php } ?>
				<!-- <?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
				<div id="Instruction" >
					<center>View List : 
						<form method="get" action="">
							<?php 
							$month_list = array(
								'01' => 'January',
								'02' => 'February',
								'03' => 'March',
								'04' => 'April',
								'05' => 'May',
								'06' => 'June',
								'07' => 'July',
								'08' => 'August',
								'09' => 'September',
								'10' => 'October',
								'11' => 'November',
								'12' => 'December'
							 );
							?>
							<?php echo form_dropdown('m', $month_list, set_value('m', isset($record[0]->Month) ? $record[0]->Month : $month) , 'style="width: 90px;" id="cs_month"'); ?>
					
							<?php 
							for ($dyear = '2015';$dyear <= $year;$dyear++){
								$year_list[$dyear] = $dyear;
							}
							?>
							<input type="text" name="pr" value="wo" hidden="hidden">
							<?php echo form_dropdown('y', $year_list, set_value('y', isset($record[0]->Year) ? $record[0]->Year : $year) , 'style="width: 65px;" id="cs_year"'); ?>  
							<input type="submit" value="Apply" onchange="javascript: submit()"/>
						</form>
					</center>
				</div>
				<?php } ?> -->

				<div class="m-div">
					<table class="rport-header">
						<tr>
							<td colspan="5">WORK ORDER NO MRIN REPORT <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?> - <?php echo $this->session->userdata('usersessn');?></td>
						</tr>
					</table>
					<table class="tftable" border="1" style="text-align:center;">
						<tr style="text-align:center;font-weight:bold;">
							<th>No</th>
							<th>Services</th>
							<th>Date work order</th>
							<th>Work order number</th>
							<th>Status</th>
						</tr>
		<?php } ?>
						<?php echo ($numrow%2==0) ? '<tr class="ui-color-color-color">' : '<tr>'; ?>
							<td><?=$numrow;?></td>
							<td><?=($row->V_servicecode) ? $row->V_servicecode : "";?></td>
							<td><?=($row->D_date) ? date_format(date_create($row->D_date),"d-m-Y") : "";?></td>
							<td><?=($row->V_Request_no) ? $row->V_Request_no : "";?></td>
							<td><?=($row->V_request_status) ? $row->V_request_status : "";?></td>
						</tr>
						<?php $numrow++; ?>
						<?php if ((($numrow-1)%14==0) || (($numrow-1)== count($record))) {?>	
					</table>
				</div>
				<?php if (($this->input->get('ex') == '') or (1==0)){?>
					<table width="99%" border="0">
						<tr>
							<td valign="top" colspan="2"><hr color="black" size="1Px"></td>
						</tr>
						<tr>
							<td width="50%">WORK ORDER NO MRIN - <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?><br><i>Computer Generated - CAMSIS</i><!--<i>Computer Generated - APBESys</i>--></td>
							<td width="50%" align="right"></td>
						</tr>
					</table>
				<?php } ?>
				<?php if (($this->input->get('ex') == '') or (1==0)){?>
					<?php include 'content_footerprint.php';?>
					<div class="StartNewPage" id="breakpage"><span id="pagebreak">Page Break</span></div>
				<?php } ?>

			</div>
		<?php } ?>

	<?php endforeach;?>
<?php }else{ ?>
	<div class="menu" style="position:relative;">
		<div class="m-div">
			<table class="rport-header">
				<tr>
					<td colspan="5">WORK ORDER NO MRIN REPORT <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?> - <?php echo $this->session->userdata('usersessn');?></td>
				</tr>
			</table>
			<table class="tftable" border="1" style="text-align:center;">
				<tr style="text-align:center;font-weight:bold;">
					<th>No</th>
					<th>Services</th>
					<th>Date work order</th>
					<th>Work order number</th>
					<th>Status</th>
				</tr>
				<tr>
					<td colspan="5">NO RECORD FOUND</td>
				</tr>
			</table>
		</div>
		<?php if (($this->input->get('ex') == '') or (1==0)){?>
			<table width="99%" border="0">
				<tr>
					<td valign="top" colspan="2"><hr color="black" size="1Px"></td>
				</tr>
				<tr>
					<td width="50%">WORK ORDER NO MRIN - <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?><br><i>Computer Generated - CAMSIS</i><!--<i>Computer Generated - APBESys</i>--></td>
					<td width="50%" align="right"></td>
				</tr>
			</table>
		<?php } ?>
		<?php if (($this->input->get('ex') == '') or (1==0)){?>
			<?php include 'content_footerprint.php';?>
			<div class="StartNewPage" id="breakpage"><span id="pagebreak">Page Break</span></div>
		<?php } ?>
	</div>
<?php }?>