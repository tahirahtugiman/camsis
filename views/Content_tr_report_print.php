<?php
if ($this->input->get('ex') == 'excel'){
$filename ="PROCUREMENT TRACKING REPORT ".date('F', mktime(0, 0, 0, $month, 10)) .$year.".xls";
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);
}
?>
<?php if ($this->input->get('ex') == ''){?>
<div id="Instruction" class="pr-printer">
    <div class="header-pr">PROCUREMENT TRACKING REPORT</div>
    <button onclick="javascript:myFunction('pr_report?pr=tr&from=<?=$from?>&to=<?=$to?>&none=closed');" class="btn-button btn-primary-button">PRINT</button>
    <button type="cancel" class="btn-button btn-primary-button" onclick="location.href = '<?php base_url();?>report?<?php echo '&m='.$this->input->get('m').'&y='.$this->input->get('y');?>';">CANCEL</button>
	<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == '')){?>
	<a href="<?php echo base_url();?>index.php/Procurement/pr_report?pr=tr&from=<?=$this->input->get('from');?>&to=<?=$this->input->get('to');?>&ex=excel&none=close" style="float:right; margin-right:40px;"><img src="<?php echo base_url();?>images/excel.png" style="width:40px; height:38px; position:absolute;" title="export to excel"></a>
	<?php } ?>
</div>
<?php } ?>
<div class="menu" style="position:relative;">

<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
<?php include 'content_headprint.php';?>
<?php } ?>
<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
<div id="Instruction" >
<center>View List : 
<form method="get" action="">
<?php $date = date("Y-m-d");
$newDate = date("Y-m-d", strtotime($date)); ?>  
 <label for="from">From</label>
	<input type="date" name="from" id="from" value="<?=($from) ? $from : $newDate?>" class="form-control-button2 n_wi-date2">
	<label for="to">To</label>
	<input type="date" name="to" id="to" value="<?=($to) ? $to : $newDate?>" class="form-control-button2 n_wi-date2">
<input type="hidden" value="<?php echo set_value('pr', ($this->input->get('pr')) ? $this->input->get('pr') : ''); ?>" name="pr">
		<input type="submit" value="Apply" onchange="javascript: submit()"/></center>
</form>
</div>
<?php } ?>

<?php  if (empty($t_record)) {?>
<div class="m-div">
	<table class="rport-header">
		<tr>
			<td colspan="5">PROCUREMENT TRACKING REPORT <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?> - <?php echo $this->session->userdata('usersessn');?></td>
		</tr>
	</table>
	<table class="tftable" border="1" style="text-align:center; width:100%;" align="left">
		
		<tr style="text-align:center;font-weight:bold;">
				<th>NO</th>
				<th>SERVICE</th>
				<th>REQUEST WORK ORDER NO</th>
				<th>DATE</th>
				<th>MONTH WORK ORDER</th>
				<th>MRIN DATE RCVD</th>
				<th>MONTH MRIN</th>
				<th>MRIN NO</th>
				<th>SP/TP/STOCK</th>
				<th>ITEM CODE</th>
				<th>DESCRIPTION</th>
				<th>PART NUMBER</th>
				<th>QTY REQUEST</th>
				<th>QTY APPROVED</th>
			</tr>
          <tr>
			<td colspan="14" style="height:100px;"><span style="color:red;">NO RECORDS FOUND.</span></td>
		</tr>
	</table>
</div>
<?php } ?>


<?php if ($this->input->get('ex') == ''){ ?>
	<?php $numrow = 1; foreach($t_record as $row):?>
	<?php if ($numrow==1 OR $numrow%25==1) { ?>
<div class="m-div">
	<table class="rport-header">
		<tr>
			<td colspan="5">PROCUREMENT TRACKING REPORT <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?> - <?php echo $this->session->userdata('usersessn');?></td>
		</tr>
	</table>
	<table class="tftable" border="1" style="text-align:center; width:100%;" align="left">
		
		<tr style="text-align:center;font-weight:bold;">
				<th>NO</th>
				<th>SERVICE</th>
				<th>REQUEST WORK ORDER NO</th>
				<th>DATE</th>
				<th>MONTH WORK ORDER</th>
				<th>MRIN DATE RCVD</th>
				<th>MONTH MRIN</th>
				<th>MRIN NO</th>
				<th>SP/TP/STOCK</th>
				<th>ITEM CODE</th>
				<th>ITEM DESCRIPTION</th>
				<th>PART NUMBER</th>
				<th>QTY REQUEST</th>
				<th>QTY APPROVED</th>
			</tr>
		
				<?php } ?>
<?php echo ($numrow%2==0) ? '<tr class="ui-color-color-color">' : '<tr>'; ?>				
			<!--<tr style="text-align:center;">-->
				<td><?= $numrow ?></td>
				<td><?=($row->service_code) ? $row->service_code : 'N/A' ?></td>
				<td><?=($row->WorkOfOrder) ? $row->WorkOfOrder : 'N/A' ?></td>
				<td><?=isset($row->WorkOrderDate) ? date("d-m-Y",strtotime($row->WorkOrderDate)) : ''?></td></td>
				<td><?=isset($row->WorkOrderDate) ? date("M-d",strtotime($row->WorkOrderDate)) : ''?></td>
				<td><?=isset($row->DateCreated) ? date("d/m/Y",strtotime($row->DateCreated)) : ''?></td>
				<td><?=isset($row->DateCreated) ? date("M-d",strtotime($row->DateCreated)) : ''?></td>
				<td><?=($row->MIRNcode) ? $row->MIRNcode : 'N/A' ?></td>
				<td><?=($row->stocstatus) ? $row->stocstatus : '' ?></td>
				<td><?=($row->ItemCode) ? $row->ItemCode : 'N/A' ?></td>
			
				<!--<td><?=($row->Comments) ? $row->Comments : 'N/A' ?></td>-->
				<td width="20%"><?php
				$i=1;
				if($row->comment2){
				foreach($row->comment2 as $row2){
				echo $i."-&nbsp;";	
				//echo "Item Code : ".$row2->ItemCode."&nbsp;";	
				echo $row2->ItemName."&nbsp;";	
				//echo "Qty Required : ".$row2->Qty."&nbsp;";	
				//echo "AM Approved Qty : ".$row2->QtyReq."&nbsp;";	
				echo "<br>";
                     $i++;				
				}
				}else {				
				echo $row->Comments;	
				}
				?></td>
				<td><?=($row->PartNumber) ? $row->PartNumber : 'N/A' ?></td>
				<td><?=($row->QtyReq) ? $row->QtyReq : 'N/A' ?></td>
				<td><?=($row->QtyReqfx) ? $row->QtyReqfx : 'N/A' ?></td>
			</tr>
<?php $numrow++; ?>
		<?php //if (($numrow-1)%13==0) {
				if ((($numrow-1)%25==0) || (($numrow-1)== count($t_record))) {
		?>
	</table>
	
</div>

<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
	<table width="99%" border="0">
		<tr>
			<td valign="top" colspan="2"><hr color="black" size="1Px"></td>
		</tr>
		<tr>
			<td width="50%">MONTHLY PROCUREMENT TRACKING REPORT <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?><br><i>Computer Generated - CAMSIS</i></td>
			<td width="50%" align="right"></td>
		</tr>
	</table>
</div>
<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
<?php include 'content_footerprint.php';?>
<?php } ?>
<div class="StartNewPage" id="breakpage"><span id="pagebreak">Page Break</span></div>
<?php } ?>
<?php } ?>

<?php endforeach;?>

		<?php }else{ ?>
		
		<div class="m-div">
	<table class="rport-header">
		<tr>
			<td colspan="5">PROCUREMENT TRACKING REPORT <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?> - <?php echo $this->session->userdata('usersessn');?></td>
		</tr>
	</table>
	<table class="tftable" border="1" style="text-align:center; width:100%;" align="left">
		
		<tr style="text-align:center;font-weight:bold;">
				<th>NO</th>
				<th>SERVICE</th>
				<th>REQUEST WORK ORDER NO</th>
				<th>DATE</th>
				<th>MONTH WORK ORDER</th>
				<th>MRIN DATE RCVD</th>
				<th>MONTH MRIN</th>
				<th>MRIN NO</th>
				<th>SP/TP/STOCK</th>
				<th>ITEM CODE</th>
				<th>DESCRIPTION</th>
				<th>PART NUMBER</th>
				<th>QTY REQUEST</th>
				<th>QTY APPROVED</th>
			</tr>
			<?php $numrow = 1; foreach($t_record as $row):?>
			<tr style="text-align:center;">
				<td><?= $numrow ?></td>
				<td><?=($row->service_code) ? $row->service_code : 'N/A' ?></td>
				<td><?=($row->WorkOfOrder) ? $row->WorkOfOrder : 'N/A' ?></td>
				<td><?=isset($row->WorkOrderDate) ? date("d-m-Y",strtotime($row->WorkOrderDate)) : ''?></td></td>
				<td><?=isset($row->WorkOrderDate) ? date("M-d",strtotime($row->WorkOrderDate)) : ''?></td>
				<td><?=isset($row->DateCreated) ? date("d/m/Y",strtotime($row->DateCreated)) : ''?></td>
				<td><?=isset($row->DateCreated) ? date("M-d",strtotime($row->DateCreated)) : ''?></td>
				<td><?=($row->MIRNcode) ? $row->MIRNcode : 'N/A' ?></td>
				<td><?=($row->stocstatus) ? $row->stocstatus : '' ?></td>
				<td><?=($row->ItemCode) ? $row->ItemCode : 'N/A' ?></td>
				<td width="20%"><?php
				$i=1;
				if($row->comment2){
				foreach($row->comment2 as $row2){
				echo $i."-&nbsp;";	
				//echo "Item Code : ".$row2->ItemCode."&nbsp;";	
				echo $row2->ItemName."&nbsp;";	
				//echo "Qty Required : ".$row2->Qty."&nbsp;";	
				//echo "AM Approved Qty : ".$row2->QtyReq."&nbsp;";	
				echo "<br>";
                     $i++;				
				}
				}else {				
				echo $row->Comments;	
				}
				?></td>
				<td><?=($row->PartNumber) ? $row->PartNumber : 'N/A' ?></td>
				<td><?=($row->QtyReq) ? $row->QtyReq : 'N/A' ?></td>
				<td><?=($row->QtyReqfx) ? $row->QtyReqfx : 'N/A' ?></td>
			</tr>
			<?php $numrow++; ?>
	<?php endforeach;?>
	</table>
	
</div>

		<?php } ?>