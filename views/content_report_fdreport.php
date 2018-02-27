<?php
$a = $this->session->userdata('usersess');
if ($this->input->get('ex') == 'excel'){
$filename = 'Fes Daily Report date='.$date.".xls";
header('Content-type: application/ms-excel');
header('Content-Disposition: attachment; filename='.$filename);
}
?>
<?php 

 if ($a == 'FES')
	{
	echo "sapik";
	}	
?>
<script>
function doSomething(a){
	var p = a.getAttribute('value');
    var v1 = document.getElementById("textbox1").value;
	var v2 = document.getElementById("textbox2").value;
	var v3 = document.getElementById("textbox3").value;
	var v4 = document.getElementById("textbox4").value;
	var v5 = document.getElementById("textbox5").value;
	//winProp = 'width=1200,height=400,left=' + ((screen.width - 600) / 2) +',top=' + ((screen.height - 400) / 2) + ',menubar=no, directories=no, location=no, scrollbars=yes, statusbar=no, toolbar=no, resizable=no';
	if (p == 1){
	Win = window.open('report_fdreport?jobdate=<?=$date?>&ex=excel&none=close&xxx=export&grp=<?=$this->input->get('grp');?>&v1='+v1+'&v2='+v2+'&v3='+v3+'&v4='+v4+'&v5='+v5);

	} else if (p == 2) {
	Win = window.open('report_fdreport?jobdate=<?=$date?>&pdf=1&grp=<?=$this->input->get('grp');?>');
	}else{
	var a = 'report_fdreport?jobdate=<?=$date?>&data=1&grp=<?=$this->input->get('grp');?>&v1='+v1+'&v2='+v2+'&v3='+v3+'&v4='+v4+'&v5='+v5 ;
	var Win = window.open(a, 'name', 'width=900,height=500,left=' + ((screen.width - 900) / 2) +',top=' + ((screen.height - 600) / 2));
    Win.onload = Win.print;
	}
	Win.window.focus();
}
</script>
<?php if ($this->input->get('ex') == ''){?>
<div id="Instruction" class="pr-printer">
    <div class="header-pr"><?php if ($a == 'FES') echo "Fes Daily Report"?><?php if ($a == 'BES') echo "Bes Daily Report"?></div>
    <button onclick="javascript:doSomething(this);" value ="3" class="btn-button btn-primary-button">PRINT</button>
    <!--<button onclick="javascript:myFunction('report_fdreport?jobdate=<?=$date?>&none=closed&ex=<?=$this->input->get('none');?>');" class="btn-button btn-primary-button">PRINT</button>-->
    <button type="cancel" class="btn-button btn-primary-button" onclick="location.href = '<?php base_url();?>Schedule?<?php echo '&m='.$this->input->get('m').'&y='.$this->input->get('y').'&grp='.$this->input->get('grp');?>';">CANCEL</button>
	<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == '')){?>
	<a href="javascript:void(0);" onclick="javascript:doSomething(this);" value="1" style="float:right; margin-right:40px;"><img src="<?php echo base_url();?>images/excel.png" style="width:40px; height:38px; position:absolute;" title="export to excel"></a>
	<a href="javascript:void(0);" onclick="javascript:doSomething(this);" value="2" style="float:right; margin-right:80px;"><img src="<?php echo base_url();?>images/pdf.png" style="width:40px; height:38px; position:absolute;" title="export to pdf"></a>
	<?php } ?>
</div>
<?php } ?>
<div class="menu" style="position:relative;">
<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
<?php include 'content_headprint.php';?>
<?php } ?>

<style>
  textarea.xxtextareaxx{        border: none;
    overflow: auto;
    outline: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;}
</style>
<div class="m-div">
<form method="get" action="">
	<table>
		<tr>
			<td colspan="5" style="font-size:12px;"><b><?php if ($a == 'FES') echo "Fes Daily Report"?><?php if ($a == 'BES') echo "Bes Daily Report"?><br/>Date :</b> <?php if ($this->input->get('ex') == 'excel'){?><?=$date?><?php } else {?><input type="text" id="date0" name="jobdate" value="<?=$date?>" style="width:25%;" onchange="javascript: submit()" class="inputdate"/><?php } ?> <span style="font-size:7px;">*Data taken at 4:00pm</span></td>
		</tr>
	</table>
</form>	
	<table class="tftable" border="1" style="text-align:center; width:80%;" align="center">
		<tr style="text-align:center;font-weight:bold;">
			<th colspan="2">Item</th>
			<th>Description</th>
			<th>A1</th>
			<th>A2</th>
			<th>A3</th>
			<th>A4</th>
			<th>A5</th>
			<th>A6</th>
			<th>A7</th>
			<th>A8</th>
			<th>A9</th>
			<th>A10</th>
			<th>Total</th>
		</tr>
		<tr style="text-align:center;">
			<td rowspan="8">1.0 Work Order Current Month </td>
			<td>1.1</td>
			<td>Received for the date</td>
			<td><?=isset($record[0]->rd_A1) ? $record[0]->rd_A1 : 0 ?></td>
			<td><?=isset($record[0]->rd_A2) ? $record[0]->rd_A2 : 0 ?></td>
			<td><?=isset($record[0]->rd_A3) ? $record[0]->rd_A3 : 0 ?></td>
			<td><?=isset($record[0]->rd_A4) ? $record[0]->rd_A4 : 0 ?></td>
			<td><?=isset($record[0]->rd_A5) ? $record[0]->rd_A5 : 0 ?></td>
			<td><?=isset($record[0]->rd_A6) ? $record[0]->rd_A6 : 0 ?></td>
			<td><?=isset($record[0]->rd_A7) ? $record[0]->rd_A7 : 0 ?></td>
			<td><?=isset($record[0]->rd_A8) ? $record[0]->rd_A8 : 0 ?></td>
			<td><?=isset($record[0]->rd_A9) ? $record[0]->rd_A9 : 0 ?></td>
			<td><?=isset($record[0]->rd_A10) ? $record[0]->rd_A10 : 0 ?></td>
			<?php $rd_total = (isset($record[0]->rd_A1) ? $record[0]->rd_A1 : 0) + (isset($record[0]->rd_A2) ? $record[0]->rd_A2 : 0) + (isset($record[0]->rd_A3) ? $record[0]->rd_A3 : 0) + (isset($record[0]->rd_A4) ? $record[0]->rd_A4 : 0) + (isset($record[0]->rd_A5) ? $record[0]->rd_A5 : 0) + (isset($record[0]->rd_A6) ? $record[0]->rd_A6 : 0) + (isset($record[0]->rd_A7) ? $record[0]->rd_A7 : 0) + (isset($record[0]->rd_A8) ? $record[0]->rd_A8 : 0) + (isset($record[0]->rd_A9) ? $record[0]->rd_A9 : 0) + (isset($record[0]->rd_A10) ? $record[0]->rd_A10 : 0) ?>
			<td><?= ($rd_total > 0) ? anchor('contentcontroller/report_fdreport2?jobdate='.$date.'&x=1',$rd_total) : 0 ?></td>
		</tr>
		<tr style="text-align:center;">
			<td>1.2</td>
			<td>Completed for the day</td>
			<td><?=isset($reccompday[0]->cd_A1) ? $reccompday[0]->cd_A1 : 0 ?></td>
			<td><?=isset($reccompday[0]->cd_A2) ? $reccompday[0]->cd_A2 : 0 ?></td>
			<td><?=isset($reccompday[0]->cd_A3) ? $reccompday[0]->cd_A3 : 0 ?></td>
			<td><?=isset($reccompday[0]->cd_A4) ? $reccompday[0]->cd_A4 : 0 ?></td>
			<td><?=isset($reccompday[0]->cd_A5) ? $reccompday[0]->cd_A5 : 0 ?></td>
			<td><?=isset($reccompday[0]->cd_A6) ? $reccompday[0]->cd_A6 : 0 ?></td>
			<td><?=isset($reccompday[0]->cd_A7) ? $reccompday[0]->cd_A7 : 0 ?></td>
			<td><?=isset($reccompday[0]->cd_A8) ? $reccompday[0]->cd_A8 : 0 ?></td>
			<td><?=isset($reccompday[0]->cd_A9) ? $reccompday[0]->cd_A9 : 0 ?></td>
			<td><?=isset($reccompday[0]->cd_A10) ? $reccompday[0]->cd_A10 : 0 ?></td>
			<?php $cd_total = (isset($reccompday[0]->cd_A1) ? $reccompday[0]->cd_A1 : 0) + (isset($reccompday[0]->cd_A2) ? $reccompday[0]->cd_A2 : 0) + (isset($reccompday[0]->cd_A3) ? $reccompday[0]->cd_A3 : 0) + (isset($reccompday[0]->cd_A4) ? $reccompday[0]->cd_A4 : 0) + (isset($reccompday[0]->cd_A5) ? $reccompday[0]->cd_A5 : 0) + (isset($reccompday[0]->cd_A6) ? $reccompday[0]->cd_A6 : 0) + (isset($reccompday[0]->cd_A7) ? $reccompday[0]->cd_A7 : 0) + (isset($reccompday[0]->cd_A8) ? $reccompday[0]->cd_A8 : 0) + (isset($reccompday[0]->cd_A9) ? $reccompday[0]->cd_A9 : 0) + (isset($reccompday[0]->cd_A10) ? $reccompday[0]->cd_A10 : 0) ?>
			<td><?= ($cd_total > 0) ? anchor('contentcontroller/report_fdreport2?jobdate='.$date.'&x=2',$cd_total) : 0 ?></td>
		</tr>
		<tr style="text-align:center;">
			<td>1.3</td>
			<td>Outstanding for the day</td>
			<td><?=isset($record[0]->od_A1) ? $record[0]->od_A1 : 0 ?></td>
			<td><?=isset($record[0]->od_A2) ? $record[0]->od_A2 : 0 ?></td>
			<td><?=isset($record[0]->od_A3) ? $record[0]->od_A3 : 0 ?></td>
			<td><?=isset($record[0]->od_A4) ? $record[0]->od_A4 : 0 ?></td>
			<td><?=isset($record[0]->od_A5) ? $record[0]->od_A5 : 0 ?></td>
			<td><?=isset($record[0]->od_A6) ? $record[0]->od_A6 : 0 ?></td>
			<td><?=isset($record[0]->od_A7) ? $record[0]->od_A7 : 0 ?></td>
			<td><?=isset($record[0]->od_A8) ? $record[0]->od_A8 : 0 ?></td>
			<td><?=isset($record[0]->od_A9) ? $record[0]->od_A9 : 0 ?></td>
			<td><?=isset($record[0]->od_A10) ? $record[0]->od_A10 : 0 ?></td>
			<?php $od_total = (isset($record[0]->od_A1) ? $record[0]->od_A1 : 0) + (isset($record[0]->od_A2) ? $record[0]->od_A2 : 0) + (isset($record[0]->od_A3) ? $record[0]->od_A3 : 0) + (isset($record[0]->od_A4) ? $record[0]->od_A4 : 0) + (isset($record[0]->od_A5) ? $record[0]->od_A5 : 0) + (isset($record[0]->od_A6) ? $record[0]->od_A6 : 0) + (isset($record[0]->od_A7) ? $record[0]->od_A7 : 0) + (isset($record[0]->od_A8) ? $record[0]->od_A8 : 0) + (isset($record[0]->od_A9) ? $record[0]->od_A9 : 0) + (isset($record[0]->od_A10) ? $record[0]->od_A10 : 0) ?>
			<td><?= ($od_total > 0) ? anchor('contentcontroller/report_fdreport2?jobdate='.$date.'&x=3',$od_total) : 0 ?></td>
		</tr>
		<tr style="text-align:center;">
			<td>1.4</td>
			<td>Accumulated outstanding</td>
			<td><?=isset($record[0]->ao_A1) ? $record[0]->ao_A1 : 0 ?></td>
			<td><?=isset($record[0]->ao_A2) ? $record[0]->ao_A2 : 0 ?></td>
			<td><?=isset($record[0]->ao_A3) ? $record[0]->ao_A3 : 0 ?></td>
			<td><?=isset($record[0]->ao_A4) ? $record[0]->ao_A4 : 0 ?></td>
			<td><?=isset($record[0]->ao_A5) ? $record[0]->ao_A5 : 0 ?></td>
			<td><?=isset($record[0]->ao_A6) ? $record[0]->ao_A6 : 0 ?></td>
			<td><?=isset($record[0]->ao_A7) ? $record[0]->ao_A7 : 0 ?></td>
			<td><?=isset($record[0]->ao_A8) ? $record[0]->ao_A8 : 0 ?></td>
			<td><?=isset($record[0]->ao_A9) ? $record[0]->ao_A9 : 0 ?></td>
			<td><?=isset($record[0]->ao_A10) ? $record[0]->ao_A10 : 0 ?></td>
			<?php $ao_total = (isset($record[0]->ao_A1) ? $record[0]->ao_A1 : 0) + (isset($record[0]->ao_A2) ? $record[0]->ao_A2 : 0) + (isset($record[0]->ao_A3) ? $record[0]->ao_A3 : 0) + (isset($record[0]->ao_A4) ? $record[0]->ao_A4 : 0) + (isset($record[0]->ao_A5) ? $record[0]->ao_A5 : 0) + (isset($record[0]->ao_A6) ? $record[0]->ao_A6 : 0) + (isset($record[0]->ao_A7) ? $record[0]->ao_A7 : 0) + (isset($record[0]->ao_A8) ? $record[0]->ao_A8 : 0) + (isset($record[0]->ao_A9) ? $record[0]->ao_A9 : 0) + (isset($record[0]->ao_A10) ? $record[0]->ao_A10 : 0) ?>
			<td><?= ($ao_total > 0) ? anchor('contentcontroller/report_fdreport2?jobdate='.$date.'&x=4',$ao_total) : 0 ?></td>
		</tr>
		<tr style="text-align:center;">
			<td>1.5</td>
			<td>Accumulated completed</td>
			<td><?=isset($record[0]->ac_A1) ? $record[0]->ac_A1 : 0 ?></td>
			<td><?=isset($record[0]->ac_A2) ? $record[0]->ac_A2 : 0 ?></td>
			<td><?=isset($record[0]->ac_A3) ? $record[0]->ac_A3 : 0 ?></td>
			<td><?=isset($record[0]->ac_A4) ? $record[0]->ac_A4 : 0 ?></td>
			<td><?=isset($record[0]->ac_A5) ? $record[0]->ac_A5 : 0 ?></td>
			<td><?=isset($record[0]->ac_A6) ? $record[0]->ac_A6 : 0 ?></td>
			<td><?=isset($record[0]->ac_A7) ? $record[0]->ac_A7 : 0 ?></td>
			<td><?=isset($record[0]->ac_A8) ? $record[0]->ac_A8 : 0 ?></td>
			<td><?=isset($record[0]->ac_A9) ? $record[0]->ac_A9 : 0 ?></td>
			<td><?=isset($record[0]->ac_A10) ? $record[0]->ac_A10 : 0 ?></td>
			<?php $ac_total = (isset($record[0]->ac_A1) ? $record[0]->ac_A1 : 0) + (isset($record[0]->ac_A2) ? $record[0]->ac_A2 : 0) + (isset($record[0]->ac_A3) ? $record[0]->ac_A3 : 0) + (isset($record[0]->ac_A4) ? $record[0]->ac_A4 : 0) + (isset($record[0]->ac_A5) ? $record[0]->ac_A5 : 0) + (isset($record[0]->ac_A6) ? $record[0]->ac_A6 : 0) + (isset($record[0]->ac_A7) ? $record[0]->ac_A7 : 0) + (isset($record[0]->ac_A8) ? $record[0]->ac_A8 : 0) + (isset($record[0]->ac_A9) ? $record[0]->ac_A9 : 0) + (isset($record[0]->ac_A10) ? $record[0]->ac_A10 : 0) ?>
			<td><?= ($ac_total > 0) ? anchor('contentcontroller/report_fdreport2?jobdate='.$date.'&x=5',$ac_total) : 0 ?></td>
		</tr>
		<tr style="text-align:center;">
			<td>1.6</td>
			<td>Outstanding > 10days</td>
			<td><?=isset($record[0]->o10_A1) ? $record[0]->o10_A1 : 0 ?></td>
			<td><?=isset($record[0]->o10_A2) ? $record[0]->o10_A2 : 0 ?></td>
			<td><?=isset($record[0]->o10_A3) ? $record[0]->o10_A3 : 0 ?></td>
			<td><?=isset($record[0]->o10_A4) ? $record[0]->o10_A4 : 0 ?></td>
			<td><?=isset($record[0]->o10_A5) ? $record[0]->o10_A5 : 0 ?></td>
			<td><?=isset($record[0]->o10_A6) ? $record[0]->o10_A6 : 0 ?></td>
			<td><?=isset($record[0]->o10_A7) ? $record[0]->o10_A7 : 0 ?></td>
			<td><?=isset($record[0]->o10_A8) ? $record[0]->o10_A8 : 0 ?></td>
			<td><?=isset($record[0]->o10_A9) ? $record[0]->o10_A9 : 0 ?></td>
			<td><?=isset($record[0]->o10_A10) ? $record[0]->o10_A10 : 0 ?></td>
			<?php $o10_total = (isset($record[0]->o10_A1) ? $record[0]->o10_A1 : 0) + (isset($record[0]->o10_A2) ? $record[0]->o10_A2 : 0) + (isset($record[0]->o10_A3) ? $record[0]->o10_A3 : 0) + (isset($record[0]->o10_A4) ? $record[0]->o10_A4 : 0) + (isset($record[0]->o10_A5) ? $record[0]->o10_A5 : 0) + (isset($record[0]->o10_A6) ? $record[0]->o10_A6 : 0) + (isset($record[0]->o10_A7) ? $record[0]->o10_A7 : 0) + (isset($record[0]->o10_A8) ? $record[0]->o10_A8 : 0) + (isset($record[0]->o10_A9) ? $record[0]->o10_A9 : 0) + (isset($record[0]->o10_A10) ? $record[0]->o10_A10 : 0) ?>
			<td><?= ($o10_total > 0) ? anchor('contentcontroller/report_fdreport2?jobdate='.$date.'&x=6',$o10_total) : 0 ?></td>
		</tr>
		<tr style="text-align:center;">
			<td>1.7</td>
			<td>Outstanding > 15days</td>
			<td><?=isset($record[0]->o15_A1) ? $record[0]->o15_A1 : 0 ?></td>
			<td><?=isset($record[0]->o15_A2) ? $record[0]->o15_A2 : 0 ?></td>
			<td><?=isset($record[0]->o15_A3) ? $record[0]->o15_A3 : 0 ?></td>
			<td><?=isset($record[0]->o15_A4) ? $record[0]->o15_A4 : 0 ?></td>
			<td><?=isset($record[0]->o15_A5) ? $record[0]->o15_A5 : 0 ?></td>
			<td><?=isset($record[0]->o15_A6) ? $record[0]->o15_A6 : 0 ?></td>
			<td><?=isset($record[0]->o15_A7) ? $record[0]->o15_A7 : 0 ?></td>
			<td><?=isset($record[0]->o15_A8) ? $record[0]->o15_A8 : 0 ?></td>
			<td><?=isset($record[0]->o15_A9) ? $record[0]->o15_A9 : 0 ?></td>
			<td><?=isset($record[0]->o15_A10) ? $record[0]->o15_A10 : 0 ?></td>
			<?php $o15_total = (isset($record[0]->o15_A1) ? $record[0]->o15_A1 : 0) + (isset($record[0]->o15_A2) ? $record[0]->o15_A2 : 0) + (isset($record[0]->o15_A3) ? $record[0]->o15_A3 : 0) + (isset($record[0]->o15_A4) ? $record[0]->o15_A4 : 0) + (isset($record[0]->o15_A5) ? $record[0]->o15_A5 : 0) + (isset($record[0]->o15_A6) ? $record[0]->o15_A6 : 0) + (isset($record[0]->o15_A7) ? $record[0]->o15_A7 : 0) + (isset($record[0]->o15_A8) ? $record[0]->o15_A8 : 0) + (isset($record[0]->o15_A9) ? $record[0]->o15_A9 : 0) + (isset($record[0]->o15_A10) ? $record[0]->o15_A10 : 0) ?>
			<td><?= ($o15_total > 0) ? anchor('contentcontroller/report_fdreport2?jobdate='.$date.'&x=7',$o15_total) : 0 ?></td>
		</tr>
		<tr style="text-align:center;">
			<td>1.8</td>
			<td>Total of the month</td>
			<?php $t_A1 = (isset($record[0]->ao_A1) ? $record[0]->ao_A1 : 0) + (isset($record[0]->ac_A1) ? $record[0]->ac_A1 : 0) ?>
			<td><?= $t_A1 ?></td>
			<?php $t_A2 = (isset($record[0]->ao_A2) ? $record[0]->ao_A2 : 0) + (isset($record[0]->ac_A2) ? $record[0]->ac_A2 : 0) ?>
			<td><?= $t_A2 ?></td>
			<?php $t_A3 = (isset($record[0]->ao_A3) ? $record[0]->ao_A3 : 0) + (isset($record[0]->ac_A3) ? $record[0]->ac_A3 : 0) ?>
			<td><?= $t_A3 ?></td>
			<?php $t_A4 = (isset($record[0]->ao_A4) ? $record[0]->ao_A4 : 0) + (isset($record[0]->ac_A4) ? $record[0]->ac_A4 : 0) ?>
			<td><?= $t_A4 ?></td>
			<?php $t_A5 = (isset($record[0]->ao_A5) ? $record[0]->ao_A5 : 0) + (isset($record[0]->ac_A5) ? $record[0]->ac_A5 : 0) ?>
			<td><?= $t_A5 ?></td>
			<?php $t_A6 = (isset($record[0]->ao_A6) ? $record[0]->ao_A6 : 0) + (isset($record[0]->ac_A6) ? $record[0]->ac_A6 : 0) ?>
			<td><?= $t_A6 ?></td>
			<?php $t_A7 = (isset($record[0]->ao_A7) ? $record[0]->ao_A7 : 0) + (isset($record[0]->ac_A7) ? $record[0]->ac_A7 : 0) ?>
			<td><?= $t_A7 ?></td>
			<?php $t_A8 = (isset($record[0]->ao_A8) ? $record[0]->ao_A8 : 0) + (isset($record[0]->ac_A8) ? $record[0]->ac_A8 : 0) ?>
			<td><?= $t_A8 ?></td>
			<?php $t_A9 = (isset($record[0]->ao_A9) ? $record[0]->ao_A9 : 0) + (isset($record[0]->ac_A9) ? $record[0]->ac_A9 : 0) ?>
			<td><?= $t_A9 ?></td>
			<?php $t_A10 = (isset($record[0]->ao_A10) ? $record[0]->ao_A10 : 0) + (isset($record[0]->ac_A10) ? $record[0]->ac_A10 : 0) ?>
			<td><?= $t_A10 ?></td>
			<?php $m_total = $t_A1 + $t_A2 + $t_A3 + $t_A4 + $t_A5 + $t_A6 + $t_A7 + $t_A8 + $t_A9 + $t_A10?>
			<td><?= ($m_total > 0) ? anchor('contentcontroller/report_fdreport2?jobdate='.$date.'&x=8',$m_total) : 0 ?></td>
		</tr>
		<tr style="text-align:center;">
			<td rowspan="6">2.0 Outstanding Previous Month </td>
			<td>2.1</td>
			<td>Outstanding 1 Month</td>
			<td><?=isset($recoutstanding[0]->m1_A1) ? $recoutstanding[0]->m1_A1 : 0?></td>
			<td><?=isset($recoutstanding[0]->m1_A2) ? $recoutstanding[0]->m1_A2 : 0?></td>
			<td><?=isset($recoutstanding[0]->m1_A3) ? $recoutstanding[0]->m1_A3 : 0?></td>
			<td><?=isset($recoutstanding[0]->m1_A4) ? $recoutstanding[0]->m1_A4 : 0?></td>
			<td><?=isset($recoutstanding[0]->m1_A5) ? $recoutstanding[0]->m1_A5 : 0?></td>
			<td><?=isset($recoutstanding[0]->m1_A6) ? $recoutstanding[0]->m1_A6 : 0?></td>
			<td><?=isset($recoutstanding[0]->m1_A7) ? $recoutstanding[0]->m1_A7 : 0?></td>
			<td><?=isset($recoutstanding[0]->m1_A8) ? $recoutstanding[0]->m1_A8 : 0?></td>
			<td><?=isset($recoutstanding[0]->m1_A9) ? $recoutstanding[0]->m1_A9 : 0?></td>
			<td><?=isset($recoutstanding[0]->m1_A10) ? $recoutstanding[0]->m1_A10 : 0?></td>
			<?php $t_o1 = (isset($recoutstanding[0]->m1_A1) ? $recoutstanding[0]->m1_A1 : 0) + (isset($recoutstanding[0]->m1_A2) ? $recoutstanding[0]->m1_A2 : 0) + (isset($recoutstanding[0]->m1_A3) ? $recoutstanding[0]->m1_A3 : 0) + (isset($recoutstanding[0]->m1_A4) ? $recoutstanding[0]->m1_A4 : 0) + (isset($recoutstanding[0]->m1_A5) ? $recoutstanding[0]->m1_A5 : 0) + (isset($recoutstanding[0]->m1_A6) ? $recoutstanding[0]->m1_A6 : 0) + (isset($recoutstanding[0]->m1_A7) ? $recoutstanding[0]->m1_A7 : 0) + (isset($recoutstanding[0]->m1_A8) ? $recoutstanding[0]->m1_A8 : 0) + (isset($recoutstanding[0]->m1_A9) ? $recoutstanding[0]->m1_A9 : 0) + (isset($recoutstanding[0]->m1_A10) ? $recoutstanding[0]->m1_A10 : 0) ?>
			<td><?= ($t_o1 > 0) ? anchor('contentcontroller/report_fdreport2?jobdate='.$date.'&x=9',$t_o1) : 0 ?></td>
		</tr>
		<tr style="text-align:center;">
			<td>2.2</td>
			<td>Outstanding 2 Month</td>
			<td><?=isset($recoutstanding[0]->m2_A1) ? $recoutstanding[0]->m2_A1 : 0?></td>
			<td><?=isset($recoutstanding[0]->m2_A2) ? $recoutstanding[0]->m2_A2 : 0?></td>
			<td><?=isset($recoutstanding[0]->m2_A3) ? $recoutstanding[0]->m2_A3 : 0?></td>
			<td><?=isset($recoutstanding[0]->m2_A4) ? $recoutstanding[0]->m2_A4 : 0?></td>
			<td><?=isset($recoutstanding[0]->m2_A5) ? $recoutstanding[0]->m2_A5 : 0?></td>
			<td><?=isset($recoutstanding[0]->m2_A6) ? $recoutstanding[0]->m2_A6 : 0?></td>
			<td><?=isset($recoutstanding[0]->m2_A7) ? $recoutstanding[0]->m2_A7 : 0?></td>
			<td><?=isset($recoutstanding[0]->m2_A8) ? $recoutstanding[0]->m2_A8 : 0?></td>
			<td><?=isset($recoutstanding[0]->m2_A9) ? $recoutstanding[0]->m2_A9 : 0?></td>
			<td><?=isset($recoutstanding[0]->m2_A10) ? $recoutstanding[0]->m2_A10 : 0?></td>
			<?php $t_o2 = (isset($recoutstanding[0]->m2_A1) ? $recoutstanding[0]->m2_A1 : 0) + (isset($recoutstanding[0]->m2_A2) ? $recoutstanding[0]->m2_A2 : 0) + (isset($recoutstanding[0]->m2_A3) ? $recoutstanding[0]->m2_A3 : 0) + (isset($recoutstanding[0]->m2_A4) ? $recoutstanding[0]->m2_A4 : 0) + (isset($recoutstanding[0]->m2_A5) ? $recoutstanding[0]->m2_A5 : 0) + (isset($recoutstanding[0]->m2_A6) ? $recoutstanding[0]->m2_A6 : 0) + (isset($recoutstanding[0]->m2_A7) ? $recoutstanding[0]->m2_A7 : 0) + (isset($recoutstanding[0]->m2_A8) ? $recoutstanding[0]->m2_A8 : 0) + (isset($recoutstanding[0]->m2_A9) ? $recoutstanding[0]->m2_A9 : 0) + (isset($recoutstanding[0]->m2_A10) ? $recoutstanding[0]->m2_A10 : 0) ?>
			<td><?= ($t_o2 > 0) ? anchor('contentcontroller/report_fdreport2?jobdate='.$date.'&x=10',$t_o2) : 0 ?></td>
		</tr>
		<tr style="text-align:center;">
			<td>2.3</td>
			<td>Outstanding 3 Month</td>
			<td><?=isset($recoutstanding[0]->m3_A1) ? $recoutstanding[0]->m3_A1 : 0?></td>
			<td><?=isset($recoutstanding[0]->m3_A2) ? $recoutstanding[0]->m3_A2 : 0?></td>
			<td><?=isset($recoutstanding[0]->m3_A3) ? $recoutstanding[0]->m3_A3 : 0?></td>
			<td><?=isset($recoutstanding[0]->m3_A4) ? $recoutstanding[0]->m3_A4 : 0?></td>
			<td><?=isset($recoutstanding[0]->m3_A5) ? $recoutstanding[0]->m3_A5 : 0?></td>
			<td><?=isset($recoutstanding[0]->m3_A6) ? $recoutstanding[0]->m3_A6 : 0?></td>
			<td><?=isset($recoutstanding[0]->m3_A7) ? $recoutstanding[0]->m3_A7 : 0?></td>
			<td><?=isset($recoutstanding[0]->m3_A8) ? $recoutstanding[0]->m3_A8 : 0?></td>
			<td><?=isset($recoutstanding[0]->m3_A9) ? $recoutstanding[0]->m3_A9 : 0?></td>
			<td><?=isset($recoutstanding[0]->m3_A10) ? $recoutstanding[0]->m3_A10 : 0?></td>
			<?php $t_o3 = (isset($recoutstanding[0]->m3_A1) ? $recoutstanding[0]->m3_A1 : 0) + (isset($recoutstanding[0]->m3_A2) ? $recoutstanding[0]->m3_A2 : 0) + (isset($recoutstanding[0]->m3_A3) ? $recoutstanding[0]->m3_A3 : 0) + (isset($recoutstanding[0]->m3_A4) ? $recoutstanding[0]->m3_A4 : 0) + (isset($recoutstanding[0]->m3_A5) ? $recoutstanding[0]->m3_A5 : 0) + (isset($recoutstanding[0]->m3_A6) ? $recoutstanding[0]->m3_A6 : 0) + (isset($recoutstanding[0]->m3_A7) ? $recoutstanding[0]->m3_A7 : 0) + (isset($recoutstanding[0]->m3_A8) ? $recoutstanding[0]->m3_A8 : 0) + (isset($recoutstanding[0]->m3_A9) ? $recoutstanding[0]->m3_A9 : 0) + (isset($recoutstanding[0]->m3_A10) ? $recoutstanding[0]->m3_A10 : 0) ?>
			<td><?= ($t_o3 > 0) ? anchor('contentcontroller/report_fdreport2?jobdate='.$date.'&x=11',$t_o3) : 0 ?></td>
		</tr>
		<tr style="text-align:center;">
			<td>2.4</td>
			<td>Outstanding 4 Month</td>
			<td><?=isset($recoutstanding[0]->m4_A1) ? $recoutstanding[0]->m4_A1 : 0?></td>
			<td><?=isset($recoutstanding[0]->m4_A2) ? $recoutstanding[0]->m4_A2 : 0?></td>
			<td><?=isset($recoutstanding[0]->m4_A3) ? $recoutstanding[0]->m4_A3 : 0?></td>
			<td><?=isset($recoutstanding[0]->m4_A4) ? $recoutstanding[0]->m4_A4 : 0?></td>
			<td><?=isset($recoutstanding[0]->m4_A5) ? $recoutstanding[0]->m4_A5 : 0?></td>
			<td><?=isset($recoutstanding[0]->m4_A6) ? $recoutstanding[0]->m4_A6 : 0?></td>
			<td><?=isset($recoutstanding[0]->m4_A7) ? $recoutstanding[0]->m4_A7 : 0?></td>
			<td><?=isset($recoutstanding[0]->m4_A8) ? $recoutstanding[0]->m4_A8 : 0?></td>
			<td><?=isset($recoutstanding[0]->m4_A9) ? $recoutstanding[0]->m4_A9 : 0?></td>
			<td><?=isset($recoutstanding[0]->m4_A10) ? $recoutstanding[0]->m4_A10 : 0?></td>
			<?php $t_o4 = (isset($recoutstanding[0]->m4_A1) ? $recoutstanding[0]->m4_A1 : 0) + (isset($recoutstanding[0]->m4_A2) ? $recoutstanding[0]->m4_A2 : 0) + (isset($recoutstanding[0]->m4_A3) ? $recoutstanding[0]->m4_A3 : 0) + (isset($recoutstanding[0]->m4_A4) ? $recoutstanding[0]->m4_A4 : 0) + (isset($recoutstanding[0]->m4_A5) ? $recoutstanding[0]->m4_A5 : 0) + (isset($recoutstanding[0]->m4_A6) ? $recoutstanding[0]->m4_A6 : 0) + (isset($recoutstanding[0]->m4_A7) ? $recoutstanding[0]->m4_A7 : 0) + (isset($recoutstanding[0]->m4_A8) ? $recoutstanding[0]->m4_A8 : 0) + (isset($recoutstanding[0]->m4_A9) ? $recoutstanding[0]->m4_A9 : 0) + (isset($recoutstanding[0]->m4_A10) ? $recoutstanding[0]->m4_A10 : 0) ?>
			<td><?= ($t_o4 > 0) ? anchor('contentcontroller/report_fdreport2?jobdate='.$date.'&x=12',$t_o4) : 0 ?></td>
		</tr>
		<tr style="text-align:center;">
			<td>2.5</td>
			<td>Outstanding > 5 Month</td>
			<?php $t_ddd = (isset($recoutstanding[0]->m5_A1) ? $recoutstanding[0]->m5_A1 : 0 )?>
			<td><?= ($t_ddd > 0) ? anchor('contentcontroller/report_fdreport2?jobdate='.$date.'&x=13'.'&v=1',$t_ddd) : 0 ?></td>
			<td><?=isset($recoutstanding[0]->m5_A2) ? $recoutstanding[0]->m5_A2 : 0?></td>
			<td><?=isset($recoutstanding[0]->m5_A3) ? $recoutstanding[0]->m5_A3 : 0?></td>
			<td><?=isset($recoutstanding[0]->m5_A4) ? $recoutstanding[0]->m5_A4 : 0?></td>
			<td><?=isset($recoutstanding[0]->m5_A5) ? $recoutstanding[0]->m5_A5 : 0?></td>
			<td><?=isset($recoutstanding[0]->m5_A6) ? $recoutstanding[0]->m5_A6 : 0?></td>
			<td><?=isset($recoutstanding[0]->m5_A7) ? $recoutstanding[0]->m5_A7 : 0?></td>
			<td><?=isset($recoutstanding[0]->m5_A8) ? $recoutstanding[0]->m5_A8 : 0?></td>
			<td><?=isset($recoutstanding[0]->m5_A9) ? $recoutstanding[0]->m5_A9 : 0?></td>
			<td><?=isset($recoutstanding[0]->m5_A10) ? $recoutstanding[0]->m5_A10 : 0?></td>
			<?php $t_o5 = (isset($recoutstanding[0]->m5_A1) ? $recoutstanding[0]->m5_A1 : 0) + (isset($recoutstanding[0]->m5_A2) ? $recoutstanding[0]->m5_A2 : 0) + (isset($recoutstanding[0]->m5_A3) ? $recoutstanding[0]->m5_A3 : 0) + (isset($recoutstanding[0]->m5_A4) ? $recoutstanding[0]->m5_A4 : 0) + (isset($recoutstanding[0]->m5_A5) ? $recoutstanding[0]->m5_A5 : 0) + (isset($recoutstanding[0]->m5_A6) ? $recoutstanding[0]->m5_A6 : 0) + (isset($recoutstanding[0]->m5_A7) ? $recoutstanding[0]->m5_A7 : 0) + (isset($recoutstanding[0]->m5_A8) ? $recoutstanding[0]->m5_A8 : 0) + (isset($recoutstanding[0]->m5_A9) ? $recoutstanding[0]->m5_A9 : 0) + (isset($recoutstanding[0]->m5_A10) ? $recoutstanding[0]->m5_A10 : 0) ?>
			<td><?= ($t_o5 > 0) ? anchor('contentcontroller/report_fdreport2?jobdate='.$date.'&x=13',$t_o5) : 0 ?></td>
		</tr>
		<tr style="text-align:center;">
			<td>2.6</td>
			<td>Total Out Standing</td>
			<?php $to_A1 = (isset($recoutstanding[0]->m1_A1) ? $recoutstanding[0]->m1_A1 : 0) + (isset($recoutstanding[0]->m2_A1) ? $recoutstanding[0]->m2_A1 : 0) + (isset($recoutstanding[0]->m3_A1) ? $recoutstanding[0]->m3_A1 : 0) + (isset($recoutstanding[0]->m4_A1) ? $recoutstanding[0]->m4_A1 : 0) + (isset($recoutstanding[0]->m5_A1) ? $recoutstanding[0]->m5_A1 : 0)?>
			<td><?=$to_A1?></td>
			<?php $to_A2 = (isset($recoutstanding[0]->m1_A2) ? $recoutstanding[0]->m1_A2 : 0) + (isset($recoutstanding[0]->m2_A2) ? $recoutstanding[0]->m2_A2 : 0) + (isset($recoutstanding[0]->m3_A2) ? $recoutstanding[0]->m3_A2 : 0) + (isset($recoutstanding[0]->m4_A2) ? $recoutstanding[0]->m4_A2 : 0) + (isset($recoutstanding[0]->m5_A2) ? $recoutstanding[0]->m5_A2 : 0)?>
			<td><?=$to_A2?></td>
			<?php $to_A3 = (isset($recoutstanding[0]->m1_A3) ? $recoutstanding[0]->m1_A3 : 0) + (isset($recoutstanding[0]->m2_A3) ? $recoutstanding[0]->m2_A3 : 0) + (isset($recoutstanding[0]->m3_A3) ? $recoutstanding[0]->m3_A3 : 0) + (isset($recoutstanding[0]->m4_A3) ? $recoutstanding[0]->m4_A3 : 0) + (isset($recoutstanding[0]->m5_A3) ? $recoutstanding[0]->m5_A3 : 0)?>
			<td><?=$to_A3?></td>
			<?php $to_A4 = (isset($recoutstanding[0]->m1_A4) ? $recoutstanding[0]->m1_A4 : 0) + (isset($recoutstanding[0]->m2_A4) ? $recoutstanding[0]->m2_A4 : 0) + (isset($recoutstanding[0]->m3_A4) ? $recoutstanding[0]->m3_A4 : 0) + (isset($recoutstanding[0]->m4_A4) ? $recoutstanding[0]->m4_A4 : 0) + (isset($recoutstanding[0]->m5_A4) ? $recoutstanding[0]->m5_A4 : 0)?>
			<td><?=$to_A4?></td>
			<?php $to_A5 = (isset($recoutstanding[0]->m1_A5) ? $recoutstanding[0]->m1_A5 : 0) + (isset($recoutstanding[0]->m2_A5) ? $recoutstanding[0]->m2_A5 : 0) + (isset($recoutstanding[0]->m3_A5) ? $recoutstanding[0]->m3_A5 : 0) + (isset($recoutstanding[0]->m4_A5) ? $recoutstanding[0]->m4_A5 : 0) + (isset($recoutstanding[0]->m5_A5) ? $recoutstanding[0]->m5_A5 : 0)?>
			<td><?=$to_A5?></td>
			<?php $to_A6 = (isset($recoutstanding[0]->m1_A6) ? $recoutstanding[0]->m1_A6 : 0) + (isset($recoutstanding[0]->m2_A6) ? $recoutstanding[0]->m2_A6 : 0) + (isset($recoutstanding[0]->m3_A6) ? $recoutstanding[0]->m3_A6 : 0) + (isset($recoutstanding[0]->m4_A6) ? $recoutstanding[0]->m4_A6 : 0) + (isset($recoutstanding[0]->m5_A6) ? $recoutstanding[0]->m5_A6 : 0)?>
			<td><?=$to_A6?></td>
			<?php $to_A7 = (isset($recoutstanding[0]->m1_A7) ? $recoutstanding[0]->m1_A7 : 0) + (isset($recoutstanding[0]->m2_A7) ? $recoutstanding[0]->m2_A7 : 0) + (isset($recoutstanding[0]->m3_A7) ? $recoutstanding[0]->m3_A7 : 0) + (isset($recoutstanding[0]->m4_A7) ? $recoutstanding[0]->m4_A7 : 0) + (isset($recoutstanding[0]->m5_A7) ? $recoutstanding[0]->m5_A7 : 0)?>
			<td><?=$to_A7?></td>
			<?php $to_A8 = (isset($recoutstanding[0]->m1_A8) ? $recoutstanding[0]->m1_A8 : 0) + (isset($recoutstanding[0]->m2_A8) ? $recoutstanding[0]->m2_A8 : 0) + (isset($recoutstanding[0]->m3_A8) ? $recoutstanding[0]->m3_A8 : 0) + (isset($recoutstanding[0]->m4_A8) ? $recoutstanding[0]->m4_A8 : 0) + (isset($recoutstanding[0]->m5_A8) ? $recoutstanding[0]->m5_A8 : 0)?>
			<td><?=$to_A8?></td>
			<?php $to_A9 = (isset($recoutstanding[0]->m1_A9) ? $recoutstanding[0]->m1_A9 : 0) + (isset($recoutstanding[0]->m2_A9) ? $recoutstanding[0]->m2_A9 : 0) + (isset($recoutstanding[0]->m3_A9) ? $recoutstanding[0]->m3_A9 : 0) + (isset($recoutstanding[0]->m4_A9) ? $recoutstanding[0]->m4_A9 : 0) + (isset($recoutstanding[0]->m5_A9) ? $recoutstanding[0]->m5_A9 : 0)?>
			<td><?=$to_A9?></td>
			<?php $to_A10 = (isset($recoutstanding[0]->m1_A10) ? $recoutstanding[0]->m1_A10 : 0) + (isset($recoutstanding[0]->m2_A10) ? $recoutstanding[0]->m2_A10 : 0) + (isset($recoutstanding[0]->m3_A10) ? $recoutstanding[0]->m3_A10 : 0) + (isset($recoutstanding[0]->m4_A10) ? $recoutstanding[0]->m4_A10 : 0) + (isset($recoutstanding[0]->m5_A10) ? $recoutstanding[0]->m5_A10 : 0)?>
			<td><?=$to_A10?></td>
			<?php $mo_total = $to_A1 + $to_A2 + $to_A3 + $to_A4 + $to_A5 + $to_A6 + $to_A7 + $to_A8 + $to_A9 + $to_A10?>
			<td><?= ($mo_total > 0) ? anchor('contentcontroller/report_fdreport2?jobdate='.$date.'&x=14',$mo_total) : 0 ?></td>
		</tr>
		<tr style="text-align:center;">
			<td rowspan="4">3.0 PPM/RI/SCM </td>
			<td></td>
			<td colspan="4">Scheduled Maintenance</td>
			<td>Plan</td>
			<td colspan="3">Completed</td>
			<td colspan="4">Outstanding</td>
		</tr>
		<tr style="text-align:center;">
			<td>3.1</td>
			<td colspan="4">Planned Preventive Maintenance (PPM)</td>
			<td><?=isset($recppm[0]->ppmplan) ? $recppm[0]->ppmplan : 0?></td>
			<td colspan="3"><?=isset($recppm[0]->ppmc) ? $recppm[0]->ppmc : 0?></td>
			<td colspan="4"><?=isset($recppm[0]->ppmo) ? $recppm[0]->ppmo : 0?></td>
		</tr>
		<tr style="text-align:center;">
			<td>3.2</td>
			<td colspan="4">Routine Inspection (RI)</td>
			<td><?=isset($recppm[0]->riplan) ? $recppm[0]->riplan : 0?></td>
			<td colspan="3"><?=isset($recppm[0]->ric) ? $recppm[0]->ric : 0?></td>
			<td colspan="4"><?=isset($recppm[0]->rio) ? $recppm[0]->rio : 0?></td>
		</tr>
		<tr style="text-align:center;">
			<td>3.3</td>
			<td colspan="4">Scheduled Corrective Maintenance (SCM)</td>
			<td></td>
			<td colspan="3"></td>
			<td colspan="4"></td>
		</tr>
		<tr style="text-align:center;">
			<td>4.0</td>
			<td colspan="2">Description</td>
			<td></td>
			<td colspan="6">Root Cause</td>
			<td colspan="4">Action Taken</td>
		</tr>
		<tr style="text-align:center;">
			<td style="height:150px;">Major Issues</td>
			<td colspan="3"><?php if ($this->input->get('ex') == 'excel'){?><?=$this->input->get('v1') <> '' ? $this->input->get('v1') : (isset($fdr_mi[0]->mi_description) ? $fdr_mi[0]->mi_description : '') ?><?php } else {?><textarea name="text1" class="xxtextareaxx" style="width:100%; height:150px;" id="textbox1"><?=$this->input->get('v1') <> '' ? $this->input->get('v1') : (isset($fdr_mi[0]->mi_description) ? $fdr_mi[0]->mi_description : '') ?></textarea><?php } ?></td>
			<td colspan="6"><?php if ($this->input->get('ex') == 'excel'){?><?=$this->input->get('v2') <> '' ? $this->input->get('v2') : (isset($fdr_mi[0]->mi_rootcause) ? $fdr_mi[0]->mi_rootcause : '') ?><?php } else {?><textarea class="xxtextareaxx" style="width:100%; height:150px;" id="textbox2"><?=$this->input->get('v2') <> '' ? $this->input->get('v2') : (isset($fdr_mi[0]->mi_rootcause) ? $fdr_mi[0]->mi_rootcause : '') ?></textarea><?php } ?></td>
			<td colspan="4"><?php if ($this->input->get('ex') == 'excel'){?><?=$this->input->get('v3') <> '' ? $this->input->get('v3') : (isset($fdr_mi[0]->mi_actiontaken) ? $fdr_mi[0]->mi_actiontaken : '') ?><?php } else {?><textarea class="xxtextareaxx" style="width:100%; height:150px;" id="textbox3"><?=$this->input->get('v3') <> '' ? $this->input->get('v3') : (isset($fdr_mi[0]->mi_actiontaken) ? $fdr_mi[0]->mi_actiontaken : '') ?></textarea><?php } ?></td>
		</tr>
		<tr style="text-align:center;">
			<td>5.0</td>
			<td colspan="9"></td>
			<td colspan="4">Action By</td>
		</tr>
		<tr style="text-align:center;">
			<td style="height:300px;">Other Matter</td>
			<td colspan="9"><?php if ($this->input->get('ex') == 'excel'){?><?=$this->input->get('v4') <> '' ? $this->input->get('v4') : (isset($fdr_mi[0]->othermatter) ? $fdr_mi[0]->othermatter : '') ?><?php } else {?><textarea class="xxtextareaxx" style="width:100%; height:300px;" id="textbox4"><?=$this->input->get('v4') <> '' ? $this->input->get('v4') : (isset($fdr_mi[0]->othermatter) ? $fdr_mi[0]->othermatter : '') ?></textarea><?php } ?></td>
			<td colspan="4"><?php if ($this->input->get('ex') == 'excel'){?><?=$this->input->get('v5') <> '' ? $this->input->get('v5') : (isset($fdr_mi[0]->action_by) ? $fdr_mi[0]->action_by : '') ?><?php } else {?><textarea class="xxtextareaxx" style="width:100%; height:300px;" id="textbox5"><?=$this->input->get('v5') <> '' ? $this->input->get('v5') : (isset($fdr_mi[0]->action_by) ? $fdr_mi[0]->action_by : '') ?></textarea><?php } ?></td>
		</tr>
	</table>
	<table class="" style="width:80%;font-size:12px; margin-top:10px;" align="center" border="0">
		<tr>
			<td rowspan="5" valign="top">Submitted by :</td>
			<td>1) MOHAMMAD HAFIZ BIN DIN</td>
			<td rowspan="5" style="width:7%;"></td>
			<td rowspan="5" valign="top">Acknowledged by :</td>
			<td valign="top">MOHD SANUSI ABDULLAH</td>
		</tr>
		<tr>
			<td>2) NUR HAFIZAH BINTI MOHD SABRI</td>
			<td style="border-bottom:1px solid black; width:150px;"></td>
		</tr>
		<tr>
			<td>3) MOHD SABRI BIN ABU BAKAR</td>
		</tr>
		<tr>
			<td>4) MURSYIDUL AZIM BIN MAZLAN</td>
		</tr>
		<tr>
			<td style="border-bottom:1px solid black; width:150px;padding-top:10px;"></td>
		</tr>
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
			<td colspan="5">Fes Daily Report <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?><br><i>Computer Generated - CAMSIS</i></td>
		</tr>
	</table>
</div>

<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == 'closed')){?>
<?php include 'content_footerprint.php';?>
<?php } ?>
<div class="StartNewPage" id="breakpage"><span id="pagebreak">Page Break</span></div>
<?php } ?>