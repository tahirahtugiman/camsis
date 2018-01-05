<?php $autocolor = array('bg-purple', 'bg-red', 'bg-yellow', 'bg-aqua', 'bg-light-blue'); shuffle($autocolor); ?>
<?php if ($this->session->userdata('usersess') == 'HKS') { ?>
<div class="main-box">
	<div class="box2">
		<div class="small-box <?php echo $autocolor[0];?>">
			<div class="inner2" >
				<p>PERIODIC WORK ( MONTHLY PLANNER )</p>
			</div>
			<div class="icon"><i class="icon-file-text2"></i></div>
			<?php echo anchor ('monthly_p_work','<span class="ui-left_web">More Info <i class="icon-arrow-right"></i></span>','class="small-box-footer"'); ?>
		</div>
	</div>
	<div class="box2">
		<div class="small-box <?php echo $autocolor[1];?>">
			<div class="inner2" >
				<p>WEEKLY / PERIODIC PLANNER</p>
			</div>
			<div class="icon"><i class="icon-file-text2"></i></div>
			<?php echo anchor ('weeklyperiodic_planner','<span class="ui-left_web">More Info <i class="icon-arrow-right"></i></span>','class="small-box-footer"'); ?>
		</div>
	</div>
	<div class="box2">
		<div class="small-box <?php echo $autocolor[2];?>">
			<div class="inner2" >
				<p>SCHEDULE OF WEEKLY ROUTINE JOINT INSPECTION</p>
			</div>
			<div class="icon"><i class="icon-file-text2"></i></div>
			<?php echo anchor ('sowr_joint_inspection','<span class="ui-left_web">More Info <i class="icon-arrow-right"></i></span>','class="small-box-footer"'); ?>
		</div>
	</div>
	<div class="box2">
		<div class="small-box <?php echo $autocolor[3];?>">
			<div class="inner2" >
				<p>GENERAL WASTE COLLECTION SCHEDULE</p>
			</div>
			<div class="icon"><i class="icon-file-text2"></i></div>
			<?php echo anchor ('gwcollection','<span class="ui-left_web">More Info <i class="icon-arrow-right"></i></span>','class="small-box-footer"'); ?>
		</div>
	</div>
</div>
<?php  } else {  ?>
<div class="main-box">
	<div class="box2">
		<div class="small-box <?php echo $autocolor[0];?>">
			<div class="inner2" >
				<p>New Asset</p>
			</div>
			<div class="icon"><i class="icon-file-text2"></i></div>
			<?php echo anchor ('asset','<span class="ui-left_web">More Info <i class="icon-arrow-right"></i></span>','class="small-box-footer"'); ?>
		</div>
	</div>
	<div class="box2">
		<div class="small-box <?php echo $autocolor[1];?>">
			<div class="inner2" >
				<p>Asset Catalog</p>
			</div>
			<div class="icon"><i class="icon-file-text2"></i></div>
			<?php echo anchor ('contentcontroller/assets','<span class="ui-left_web">More Info <i class="icon-arrow-right"></i></span>','class="small-box-footer"'); ?>
		</div>
	</div>
	<div class="box2">
		<div class="small-box <?php echo $autocolor[3];?>">
			<div class="inner2" >
				<p>Asset PPM Planner</p>
			</div>
			<div class="icon"><i class="icon-file-text2"></i></div>
			<?php echo anchor ('ppm_planered','<span class="ui-left_web">More Info <i class="icon-arrow-right"></i></span>','class="small-box-footer"'); ?>
		</div>
	</div>
</div>
<?php } ?>
