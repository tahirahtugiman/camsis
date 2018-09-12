<body>
	<div id="Instruction" class="pr-printer">
		<div class="header-pr"> Housekeeping Services </div>
		<!--<button onclick="myFunctionprint()" class="btn-button btn-primary-button">PRINT</button>-->
		<button onclick="javascript:myFunction('schedule_p_work?dept=<?=$dept?>&loc=<?=$loc?>&p=1')" class="btn-button btn-primary-button">PRINT</button>
		<button type="cancel" class="btn-button btn-primary-button" onclick="window.location.href='locationlist?parent=asset'">CANCEL</button>
	</div>
	<?php if ($this->input->get('p') == 1){ ?>
	 <?php 
		$lines = 12;
		//$week4 = 0; 
		//$numberdate4 = 0; 
		$numrow=1; foreach($records as $rows): ?>
		<?php if ($numrow==1 OR $numrow%$lines==1) { ?>

		<table class="tbl-wo" border="1" align="center" style="border: 1px solid black;">
			<tr>
				<td style="padding-left:0px; width:120px;" align="center"><img src="<?php echo base_url(); ?>images/logo.png" style="width:100px; height:30px;"/></td>
				<td>
					<table class="tbl-wo" border="0" align="center">
						<tr>
							<td align="center"><b>HOUSEKEEPING SERVICES </b></td>
						</tr>
						<tr>
							<td align="center"><b>IIUM HOSPITAL</b> </td>
						</tr>
						<tr>
							<td align="center"><b>SCHEDULE PERIODIC WORK</b></td>
						</tr>
					</table>
				</td>
				<td style="padding-left:5px; width:160px;" align="right"> 
					<table class="tbl-wo" border="0" align="right">
						<tr>
							<td align="right"> QHP-002:HF-014</td>
						</tr>
						<tr>
							<td align="right"> Revision 1.0</td>
						</tr>
						<tr>
							<td align="right"> <?= date("d-M-y")?></td>
						</tr>
					</table>
				</td>
				<!--<td style="padding-left:0px; width:120px;" align="center"><img src="<?php echo base_url(); ?>images/logo.png" style="width:100px; height:40px;"/></td>-->
			</tr>
		</table>
	<div class="form">
		<table class="tbl-wo" border="0" align="center" style="font-weight:bold; margin-top:10px; margin-bottom:10px;">
			<!--<tr height="50px">
				<td style="padding-left:10px;" Colspan="3"><b>PROJECT : IIUM TEACHING HOSPITAL, KUANTAN</b></td>
			</tr>-->
			<tr height="30px">
				<td style="padding-left:10px;"><b>User Department : <?= $loc ?></b></td>
				<!--<td style="padding-left:10px;">Department Code: <?= $dept ?></td>-->
				<td style="padding-left:10px;">Month : <?= date('F', mktime(0, 0, 0, $month, 10)) ?></td>
			</tr>
		</table>
	</div>
	<table class="tftable2 font-size" border="1" style="text-align:center;" align="center">
		  <tr class="greyii">
		    <th class="td-r">No</th>
		    <th class="td-r">Work Scope</th>
		    <th class="td-r" style="width:12%;">Frequency</th>
		    <th class="td-r" style="width:15%;">Week 1</th>
		    <th class="td-r" style="width:15%;">Week 2</th>
		    <th class="td-r" style="width:15%;">Week 3</th>
		    <th class="td-r" style="width:15%;">Week 4</th>
		    <th class="td-r">Remark</th>
		  </tr>
		<?php } ?>
	   
			<tr >
				<td><?=$numrow?>&nbsp;</td>
				<td><?=$rows->work_scope?></td>
				<td><?=$rows->frequency?></td>
				<td><?=($rows->week_1) <> '' ? date('d-m-Y',strtotime($rows->week_1)) : '' ?></td>
				<td><?=($rows->week_2) <> '' ? date('d-m-Y',strtotime($rows->week_2)) : '' ?></td>
				<td><?=($rows->week_3) <> '' ? date('d-m-Y',strtotime($rows->week_3)) : '' ?></td>
				<td><?=($rows->week_4) <> '' ? date('d-m-Y',strtotime($rows->week_4)) : '' ?></td>
				<td><?=$rows->remarks?></td>
			</tr>
			<?php $numrow++?>

			<?php if ($count < $lines) { ?>
			<?php if (($numrow-1)==$count) { ?>
		<?php $lastno = $numrow ?>		
		<?php for ($x = 1; $x <= ($lines - $count); $x++) { ?>
		<?php $numrow++?>
			<tr>
				<td style="height:25px;"></td>
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
	<?php  } ?>

          
	<!--<table class="tbl-wo" border="0" align="center">
			<tr height="50px">
				<td style="padding-left:10px;">Prepared by : </td>
				<td style="padding-left:10px;">Verified by : </td>
			</tr>
			<tr height="50px">
				<td style="padding-left:10px;">Date: </td>
				<td style="padding-left:10px;">Date : </td>
			</tr>
		</table>-->
	
	<?php if (($numrow-1)%$lines ==0) { ?>

	     <tr>
				<td colspan="3">Prepared by :</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr >
				<td colspan="3">Date :</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr >
				<td colspan="3">Verified by :</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr >
				<td colspan="3">Date :</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>	
  
	</table>
	<div class="StartNewPage" id="breakpage"><span id="pagebreak">Page Break</span></div>
	<?php } ?>
	<?php endforeach; ?>
          <tr>
				<td colspan="3">Prepared by :</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr >
				<td colspan="3">Date :</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr >
				<td colspan="3">Verified by :</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr >
				<td colspan="3">Date :</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>	
<?php } else { ?>
	  	<table class="tbl-wo" border="1" align="center" style="border: 1px solid black;">
			<tr>
				<td style="padding-left:0px; width:120px;" align="center"><img src="<?php echo base_url(); ?>images/logo.png" style="width:100px; height:30px;"/></td>
				<td>
					<table class="tbl-wo" border="0" align="center">
						<tr>
							<td align="center"><b>HOUSEKEEPING SERVICES </b></td>
						</tr>
						<tr>
							<td align="center"><b>IIUM HOSPITAL</b> </td>
						</tr>
						<tr>
							<td align="center"><b>SCHEDULE PERIODIC WORK</b></td>
						</tr>
					</table>
				</td>
				<td style="padding-left:5px; width:160px;" align="right"> 
					<table class="tbl-wo" border="0" align="right">
						<tr>
							<td align="right"> QHP-002:HF-014</td>
						</tr>
						<tr>
							<td align="right"> Revision 1.0</td>
						</tr>
						<tr>
							<td align="right"> <?= date("d-M-y")?></td>
						</tr>
					</table>
				</td>
				<!--<td style="padding-left:0px; width:120px;" align="center"><img src="<?php echo base_url(); ?>images/logo.png" style="width:100px; height:40px;"/></td>-->
			</tr>
		</table>
	<div class="form">
		<table class="tbl-wo" border="0" align="center" style="font-weight:bold; margin-top:10px; margin-bottom:10px;">
			<!--<tr height="50px">
				<td style="padding-left:10px;" Colspan="3"><b>PROJECT : IIUM TEACHING HOSPITAL, KUANTAN</b></td>
			</tr>-->
			<tr height="30px">
				<td style="padding-left:10px;"><b>User Department : <?= $loc ?></b></td>
				<!--<td style="padding-left:10px;">Department Code: <?= $dept ?></td>-->
				<td style="padding-left:10px;">Month : <?= date('F', mktime(0, 0, 0, $month, 10)) ?></td>
			</tr>
		</table>
	</div>
	   <table class="tbl-wo" border="0" align="center" style="font-weight:bold; margin-top:10px; margin-bottom:10px;">
			<!--<tr height="50px">
				<td style="padding-left:10px;" Colspan="3"><b>PROJECT : IIUM TEACHING HOSPITAL, KUANTAN</b></td>
			</tr>-->
			<tr height="30px">
				<td style="padding-left:10px;"><b>User Department : <?= $loc ?></b></td>
				<!--<td style="padding-left:10px;">Department Code: <?= $dept ?></td>-->
				<td style="padding-left:10px;">Month : <?= date('F', mktime(0, 0, 0, $month, 10)) ?></td>
			</tr>
		</table>

	
	<table class="tftable2 font-size" border="1" style="text-align:center;" align="center">
		  <tr class="greyii">
		    <th class="td-r">No</th>
		    <th class="td-r">Work Scope</th>
		    <th class="td-r" style="width:12%;">Frequency</th>
		    <th class="td-r" style="width:15%;">Week 1</th>
		    <th class="td-r" style="width:15%;">Week 2</th>
		    <th class="td-r" style="width:15%;">Week 3</th>
		    <th class="td-r" style="width:15%;">Week 4</th>
		    <th class="td-r">Remark</th>
		  </tr>
	
	    <tbody id="live_data">
		</tbody>

	     <tr>
				<td colspan="3">Prepared by :</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr >
				<td colspan="3">Date :</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr >
				<td colspan="3">Verified by :</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr >
				<td colspan="3">Date :</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>	
  
	</table>
		</div>
	   <div class="StartNewPage" id="breakpage"><span id="pagebreak">Page Break</span></div>
	   <?php } ?>
	</body>
	<script>
<?php if ($this->input->get('p') != 1){ ?>
	  $( document ).ready(function() {
fetch_data("<?=$dept?>","<?=$loc?>","<?=$month?>","<?=$year?>");
});
<?php } ?>
   function fetch_data(d,l,m,y)  
      { 

//alert(dapatdata);	  
           $.ajax({  
                url:"<?php echo base_url('index.php/ajaxspw/keluardata'); ?>",  
                method:"POST",  
				data:{dept_code:d,loc_code:l,month:m,year:y},  
                dataType:"text", 
                success:function(data){  
               $('#live_data').html(data);                    
			  // $("td#live_data").parent().replaceWith(data);					 
                }  
           });  
      }
	  
function myfungsi(id,wek) {
   var id = id;
   var week1 = document.getElementById("week1_" + wek).value;
   var week2 = document.getElementById("week2_" + wek).value;
   var week3 = document.getElementById("week3_" + wek).value;
   var week4 = document.getElementById("week4_" + wek).value;
   var dept = "<?=$dept?>";
   var loc = "<?=$loc?>";

  $.post("<?php echo base_url('index.php/ajaxspw/masukdata'); ?>",
        {
		  dept : dept,
          loc : loc,		  
		  id : id,
          week1: week1,     
          week2: week2,     
          week3: week3,     
          week4: week4     
        },
        function(data,status){
		   //alert('dddd');
            //alert("Data: " + data + "\nStatus: " + status);
        });	
  

}
	</script>
</html>

