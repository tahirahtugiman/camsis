<?php if ($this->input->get('ex') == 'excel'){
	$filename ="Asset Next PPM (".date('F', mktime(0, 0, 0, $month, 10)).")".$year.".xls";
	header('Content-type: application/ms-excel');
	header('Content-Disposition: attachment; filename='.$filename);
}?>

<?php if ($this->input->get('ex') == ''){?>
	<?php include 'content_btp.php';?>
	<div id="Instruction" class="pr-printer">
		<div class="header-pr">Asset Next PPM</div>
		<button onclick="javascript:myFunction('assetnextppm?m=<?=$month?>&y=<?=$year?>&dept=<?=$dept?>&grp=<?=$this->input->get('grp');?>&none=closed');" class="btn-button btn-primary-button">PRINT</button>
		<button type="cancel" class="btn-button btn-primary-button" onclick="location.href = '<?php echo $btp ;?>';">CANCEL</button>
		<?php if (($this->input->get('ex') == '') or ($this->input->get('none') == '')){?>
			<a href="<?php echo base_url();?>index.php/contentcontroller/assetnextppm?m=<?=$month?>&y=<?=$year?>&dept=<?=$dept?>&none=close&ex=excel&xxx=export&grp=<?=$this->input->get('grp');?>" style="float:right; margin-right:40px;"><img src="<?php echo base_url();?>images/excel.png" style="width:40px; height:38px; position:absolute;" title="export to excel"></a>
			<!--<a href="<?php echo base_url();?>index.php/contentcontroller/assetnextppm?m=<?=$month?>&y=<?=$year?>&pdf=1&grp=<?=$this->input->get('grp');?>" style="float:right; margin-right:80px;"><img src="<?php echo base_url();?>images/pdf.png" style="width:40px; height:38px; position:absolute;" title="export to pdf"></a>-->
		<?php } ?>
	</div>
<?php } ?>

<div class="menu" style="position:relative;">
	<?php if ($this->input->get('ex') == ''){?>
		<?php include 'content_headprint.php';?>
	<?php } ?>
	<div class="m-div">

		<table class="rport-header">
			<tr>
				<td colspan="3">ASSET NEXT PPM - <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?> - <?php echo $this->session->userdata('usersessn');?> ( <?php if ($this->input->get('grp') == ''){echo 'ALL'; }else{ echo 'Group '.$this->input->get('grp');} ?> )</td>
			</tr>
		</table>
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
			for ($dyear = '2015';$dyear <= date("Y");$dyear++){
				$year_list[$dyear] = $dyear;
			}
		?>

		<select id="selectBox"  name="dept" style="width:10%;" value="<?=set_value('dept')?>">
		<option value="">-ALL (Department)-</option>
		<?php foreach($dept2 as $row):?>
		<option value="<?=$row->v_userdeptcode?>" <?=($_GET['dept'] == $row->v_userdeptcode) ? 'selected="selected"' : '';  ?>><?=$row->v_userdeptdesc?> (<?=$row->v_userdeptcode?>)</option>
		<?php endforeach;?>
	</select>
<input type="hidden" value="<?php echo set_value('grp', ($this->input->get('grp')) ? $this->input->get('grp') : ''); ?>" name="grp">
<input type="hidden" value="<?php echo set_value('fon', ($this->input->get('fon')) ? $this->input->get('fon') : ''); ?>" name="fon">
<input type="submit" value="Apply" onchange="javascript: submit()"/></center>
</form>
</div>
		<?php if( !$this->input->get("none") ){ ?>
		<div id="constrainer" style="height: 80%; width: 100%;">
			<div class="scrolltable1">
		<?php } ?>
<table style="margin-bottom:5px;<?=($this->input->get("none")) ? 'width:150%;' : ''?>">
<tr>
<td bgcolor="#28a11b" width="3%"></td>
<td width="10%" style="padding-left:8px;"><b>Last PPM Schedule</b></td>
<td bgcolor="#00FFFF" width="3%"></td>
<td style="padding-left:8px;"><b>Next PPM Schedule</b></td>
</tr>
</table>
        <?php if ($this->input->get("none") && $this->input->get('ex') == '') { ?>
		<?php $numrow = 1; foreach($ppm_wo as $value):?>
			<?php if ($numrow==1 OR $numrow%30==1) { ?>
		<table class="tftable" border="1" style="text-align:center;">
			<tr>
				<th>No.</th>
				<th>Asset Number</th>
				<th>Location</th>
				<th>Last PPM Generated</th>
				<!--<th>week</th>-->
				<th>Next PPM Schedule</th>
			</tr>
			<?php } ?>
            <?php echo ($numrow%2==0) ? '<tr class="ui-color-color-color" style="page-break-inside:avoid; page-break-after:auto ">' : '<tr style="page-break-inside:avoid; page-break-after:auto ">'; ?>
				<td><?= $numrow ?></td>
				<td><?=$value->v_tag_no?></td>
				<td><?=$value->v_location_name?></td>
				<td><?= ($value->ppmdt) ? date("d/m/Y",strtotime($value->ppmdt)) : 'N/A' ?></td>
				<td><table>
				    <tr>
				    <td width="8.33%" style="padding-top:3px; padding-bottom:3px;" class="ui-content-menu-desk-color">MONTH</td>
				    <?php foreach($kalender_ajaib as $row) {?>
				    <td <?=($this->input->get('m')==$row['no_bulan']) ? 'bgcolor="#fff600"' : ''?> width="8.33%" colspan="<?=count($row['minggu'])?>"><?=$row['bulan']?></td>
				  <?php } ?>
				    </tr>
					<tr><td width="8.33%" style="padding-top:3px; padding-bottom:3px; " class="ui-content-menu-desk-color">WEEK</td>
					<?php $weeksch2 = explode(',',$value->v_Weeksch); ?>
					<?php for ($i = 1; $i <= 5; $i++){ ?>
					<?php foreach($kalender_ajaib[$i]['minggu'] as $row) {?>
					<?php if (isset($weeksch2) && in_array($row,$weeksch2)) {?>
                    <?php if ($value->n_StartWk == $row) { ?>
					<td bgcolor="#28a11b"><?=$row?></td>
				    <?php } else {?>
					<td bgcolor="##00FFFF"><?=$row?></td>
					<?php } ?>
					<?php } else { ?>
					<td><?=$row?></td>
					<?php } ?>
					<?php } ?>
					<?php } ?>
	               </tr>
				</table>
			</td>
			</tr>
	<?php $numrow++; ?>
		    <?php if ((($numrow-1)%30==0) || (($numrow-1)== count($ppm_wo))) {?>
		</table>



	</div>

	<?php if (($this->input->get('ex') == '') or (1==0)){?>
		<table width="99%" border="0">
			<tr>
				<td valign="top" colspan="2"><hr color="black" size="1Px"></td>
			</tr>
			<tr>
				<td width="50%">Asset Next PPM - <?= date("F-Y")?><br><!--<i>Computer Generated - APBESys</i>--></td>
				<td width="50%" align="right"></td>
			</tr>

		</table>
	<?php } ?>
	
	<?php if ($this->input->get('ex') == ''){?>
		<?php include 'content_footerprint.php';?>
		<div class="StartNewPage" id="breakpage"><span id="pagebreak">Page Break</span></div>
	<?php } ?>
	
			<?php } ?>
			<?php endforeach;?>
			<?php } else { ?>
			<table class="tftable" border="1" style="text-align:center;">
			<tr>
				<th>No.</th>
				<th>Asset Number</th>
				<th>Location</th>
				<th>Last PPM Generated</th>
				<!--<th>week</th>-->
				<th>Next PPM Schedule</th>
			</tr>

			<?php if ($ppm_wo) { $kire = 1;?>
				<?php foreach ($ppm_wo as $value): ?>
				<?php $weeksch = explode(',',$value->v_Weeksch);
				sort( $weeksch );?>
			<tr nobr="true">
				<td><?=$kire?></td>
				<td><?=$value->v_tag_no?></td>
				<td><?=$value->v_location_name?></td>
				<td><?= ($value->ppmdt) ? date("d/m/Y",strtotime($value->ppmdt)) : 'N/A' ?></td>
				<td><table>
				<tr><td width="8.33%" style="padding-top:3px; padding-bottom:3px;" class="ui-content-menu-desk-color">MONTH</td>

				  <?php foreach($kalender_ajaib as $row) {?>

				 <td <?=($this->input->get('m')==$row['no_bulan']) ? 'bgcolor="#fff600"' : ''?> width="8.33%" colspan="<?=count($row['minggu'])?>"><?=$row['bulan']?></td>
				  <?php } ?>
				  </tr>
					<tr>	<td width="8.33%" style="padding-top:3px; padding-bottom:3px; " class="ui-content-menu-desk-color">WEEK</td>
					<?php $weeksch2 = explode(',',$value->v_Weeksch); ?>
					<?php for ($i = 1; $i <= 5; $i++){ ?>
					 <?php foreach($kalender_ajaib[$i]['minggu'] as $row) {?>
					 	<?php if (isset($weeksch2) && in_array($row,$weeksch2)) {?>
                          <?php if ($value->n_StartWk == $row) { ?>
										<td bgcolor="#28a11b"><?=$row?></td>
						  <?php } else {?>
										<td bgcolor="##00FFFF"><?=$row?></td>
						  <?php } ?>
											<?php } else { ?>
											<td><?=$row?></td>
											<?php } ?>
					 <?php } ?>
					<?php } ?>


											</tr>
				</table></td>

				<!--<td><?=$theweek?></td>-->
			</tr>
				<?php $kire++; endforeach;
			} else { ?>

			<tr>
				<td colspan="4" style="height:200px;"><span style="color:red;">NO RECORDS FOUND.</span></td>
			</tr>
			<?php }  ?>
		</table>

		<?php if( !$this->input->get("none") ){ ?>
			</div>
		</div>
		<?php } ?>

	</div>

	<?php if (($this->input->get('ex') == '') or (1==0)){?>
		<table width="99%" border="0">
			<tr>
				<td valign="top" colspan="2"><hr color="black" size="1Px"></td>
			</tr>
			<tr>
				<td width="50%">Asset Next PPM - <?= date("F-Y")?><br><!--<i>Computer Generated - APBESys</i>--></td>
				<td width="50%" align="right"></td>
			</tr>

		</table>
	<?php } ?>

	<?php if ($this->input->get('ex') == ''){?>
		<?php include 'content_footerprint.php';?>
		<!--<div class="StartNewPage" id="breakpage"><span id="pagebreak">Page Break</span></div>-->
	<?php } ?>
			<?php } ?>
</div>
