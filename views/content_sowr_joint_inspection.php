<body>
	<div id="Instruction" class="pr-printer">
		<div class="header-pr"> Housekeeping Services </div>
		<button onclick="javascript:myFunction('sowr_joint_inspection?m=<?=$month?>&y=<?=$year?>&p=1')" class="btn-button btn-primary-button">PRINT</button>
		<button type="cancel" class="btn-button btn-primary-button" onclick="window.location.href='contentcontroller/locationlist?parent=asset'">CANCEL</button>
	</div>
	<div class="form">
		<?php 
		$lines = 26;
		$numberid = 0; 
		//$week4 = 0; 
		//$numberdate4 = 0; 
		$numrow=1; foreach($dept as $rows): ?>
		<?php $numberid++;?>
		<?php if ($numrow==1 OR $numrow%$lines==1) { ?>
		<table class="tbl-wo" border="1" align="center" style="border: 1px solid black;">
			<tr>
				<td style="padding-left:50px; width:160px;"><img src="<?php echo base_url(); ?>images/penmedic2.png" style="width:100px; height:40px;"/></td>
				<td>
					<table class="tbl-wo" border="0" align="center">
						<tr>
							<td align="center"><b>AP HOUSEKEEPING SERVICES </b></td>
						</tr>
						<tr>
							<td align="center"><b>IIUM HOSPITAL</b> </td>
						</tr>
						<tr>
							<td align="center"><b>SCHEDULE OF BI-WEEKLY ROUTINE JOINT INSPECTION </b></td>
						</tr>
					</table>
				</td>
				<td style="padding-left:5px; width:160px;"><img src="<?php echo base_url(); ?>images/logo.png" style="width:145px; height:60px;"/></td>
			</tr>
		</table>
	<div class="form">
		<table class="tbl-wo" border="0" align="center" style="font-weight:bold;">
			<tr height="50px">
				<td style="padding-left:10px;"><b>PROJECT : IIUM TEACHING HOSPITAL, KUANTAN</b></td>
				<td style="padding-left:10px;">Month : <?= date('F', mktime(0, 0, 0, $month, 10)) ?></td>
			</tr>
		</table>
	</div>
	<div id="Instruction">
			<table class="tbl-wo" border="0" align="center" style="font-weight:bold;">
				<tr style="background:#B3130A;">
							<td width="3%" height="30px">
							<a href="?y=<?= $year-1?>&m=<?= $month?>"><img src="<?php echo base_url(); ?>images/arrow-left2.png" alt="" class="ui-img-icon" style="padding-top:4px; padding-left:4px;"/></a>
							</td>
							<td width="3%">
							<a href="?y=<?= ($month-1 == 0) ? $year-1 :$year?>&m=<?= ($month-1 == 0) ? 12 :$month-1?>"><img src="<?php echo base_url(); ?>images/arrow-left.png" alt="" class="ui-img-icon" style="padding-top:4px; padding-left:4px;"/></a>
							</td>
							<td width="88%" align="center">
							<?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?>
							</td>
							<td width="3%">
							<a href="?y=<?= ($month+1 == 13) ? $year+1 :$year?>&m=<?= ($month+1 == 13) ? 1 :$month+1?>"><img src="<?php echo base_url(); ?>images/arrow-right.png" alt="" class="ui-img-icon" style="padding-top:4px; padding-left:4px;"/></a>
							</td>
							<td width="3%">
							<a href="?y=<?= $year+1?>&m=<?= $month?>"><img src="<?php echo base_url(); ?>images/arrow-right2.png" alt="" class="ui-img-icon" style="padding-top:4px; padding-left:4px;"/></a>
							</td>
						</tr>
			</table>
		</div>

	<table class="tftable2" border="1" style="text-align:center;" align="center">
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Code</th>
			<th rowspan="2">User Deparment</th>
			<th rowspan="2">Day</th>
			<th colspan="2">Date</th>
			<th rowspan="2">Penmedic</th>
			<th rowspan="2">Advance Pact sdn bhd</th>
		</tr>
		<tr>
			<th>Week2</th>
			<th>Week4</th>
		</tr>
		<?php } ?>
		<!--18lines-->
		
		<tr>
			<td><?=$numrow?>&nbsp;</td>
			<td><?=$rows->v_UserDeptCode?></td>
			<td><?=$rows->v_userdeptdesc?></td>
			<?php if (isset($deptcode) AND in_array($rows->v_UserDeptCode,$deptcode)) { ?>
			<?php foreach ($datedept as $dc): ?>
			<?php if ($rows->v_UserDeptCode == $dc['dept']) { ?>			
			<td><p id="day_<?=$numberid?>"><?=($rows->week_2) ? date('D', strtotime($rows->week_2)) : ''?></p></td>
			  <?php if ($this->input->get('p') <> 1) { ?>	
			<td><input type="date" name="week2" id="week2_<?=$numberid?>" value="<?php echo set_value("week_2", ($rows->week_2) <> '' ? date('Y-m-d',strtotime($rows->week_2)) : '')?>" style="width:80%; display:inline-block;" onchange="myfungsi('<?=$rows->v_UserDeptCode?>','<?=$numberid?>')"/></td>
			<td><input type="date" name="week4" id="week4_<?=$numberid?>" value="<?php echo set_value("week_4", ($rows->week_4) <> '' ? date('Y-m-d',strtotime($rows->week_4)) : '')?>" style="width:80%; display:inline-block;" onchange="myfungsi('<?=$rows->v_UserDeptCode?>','<?=$numberid?>')"/></td>
			<?php } else { ?>
		    <td><?=($rows->week_2) <> '' ? date('d-m-Y',strtotime($rows->week_2)) : '' ?></td>
			<td><?=($rows->week_4) <> '' ? date('d-m-Y',strtotime($rows->week_4)): '' ?></td>
			<?php } ?>
			<td></td>
			<td></td>
			<?php } ?>
			<?php endforeach; ?>
			<?php } else { ?>
			<td><p id="day_<?=$numberid?>"><?=($rows->week_2) ? date('D', strtotime($rows->week_2)) : ''?></p></td>
			 <?php if ($this->input->get('p') <> 1) { ?>	
			<td><input type="date" name="week2" id="week2_<?=$numberid?>" value="<?php echo set_value("week_2", ($rows->week_2) <> '' ? date('Y-m-d',strtotime($rows->week_2)) : '')?>" style="width:80%; display:inline-block;" onchange="myfungsi('<?=$rows->v_UserDeptCode?>','<?=$numberid?>')"/></td>
			<td><input type="date" name="week4" id="week4_<?=$numberid?>" value="<?php echo set_value("week_4", ($rows->week_4) <> '' ? date('Y-m-d',strtotime($rows->week_4)) : '')?>" style="width:80%; display:inline-block;" onchange="myfungsi('<?=$rows->v_UserDeptCode?>','<?=$numberid?>')"/></td>
				<?php } else { ?>
		    <td><?=($rows->week_2) <> '' ? date('d-m-Y',strtotime($rows->week_2)) : '' ?></td>
			<td><?=($rows->week_4) <> '' ? date('d-m-Y',strtotime($rows->week_4)): '' ?></td>
			<?php } ?>
			<td></td>
			<td></td>
			<?php } ?>
		</tr>
			<?php $numrow++?>
		

		<?php if (($numrow-1)==$count){ ?>
		<?php $lastno = $numrow ?>
		<?php //echo $lastno ?>
		<?php for ($x = 0; $x <= ($lines - ($lastno%$lines)); $x++) { ?>
		<?php $numrow++?>
		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<?php  } ?>
		<?php  } ?>

		<?php if (($numrow-1)%$lines==0) { ?>	
	</table>

	<table class="tbl-wo" border="0" align="center">
			<tr height="50px">
				<td style="padding-left:10px;">Prepared : </td>
				<td style="padding-left:10px;">Verified by : </td>
			</tr>
			<tr height="50px">
				<td style="padding-left:10px;">Date: </td>
				<td style="padding-left:10px;">Date : </td>
			</tr>
		</table>
		<?php include 'content_footerprint.php';?>
	<div class="StartNewPage" id="breakpage"><span id="pagebreak">Page Break</span></div>
	<?php } ?>
	<?php endforeach; ?>
	</body>
	<script>
function myfungsi(nilai,wek) {
   var dept = nilai;

  var week2 = document.getElementById("week2_" + wek).value;
  var week4 = document.getElementById("week4_" + wek).value;
  
  var d = new Date(week2);
  var days = ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];
//var j =  days[d.getDay()];
  if(week2){
	document.getElementById("day_" + wek).innerHTML = days[d.getDay()];
	}
	
  else if (week2 == ''){
    document.getElementById("day_" + wek).innerHTML = "";
  }
		//var nameValue = "lalalalala";
      //alert('week2 ' + week2 + 'week 4 '+ week4);
	  
  $.post("<?php echo base_url('index.php/ajaxsch'); ?>",
        {
          dept: dept,
          week2: week2,
          week4: week4,
		  m : <?=$month;?>,
		  y : <?=$year;?>
		  
         
        },
        function(data,status){
            //alert("Data: " + JSON.parse(data).dept_code + "\nStatus: " + status);
        });	  

}
</script>
</html>

