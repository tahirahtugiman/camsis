<div class="ui-middle-screen">
<div class="div-p"></div>
	<div class="content-workorder">
		<table class="ui-content-middle-menu-workorder" border="0" height="" align="center">
<?php 
$procument = $this->input->get('tab');
switch ($procument) {
    case "1":
        $tulis = "Completed PO";
        break;
    default:
        $tulis = "Pending PO";
} ?>
			<?php include 'content_po_tab.php';?>
			<tr class="ui-color-desk desk2">
				<td colspan="4" class="t-header" style="color:black; height:40px; padding-left:10px;"><b><?= $tulis ?></b> <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?></td>
			</tr>
			<tr class="ui-color-desk bg-red-blood"> 
				<td colspan="4">
					<table width="100%" class="ui-content-middle-menu-desk">
						<tr style="background:#B3130A;">
							<td width="3%" height="30px">
							<a href="?tab=<?= $this->input->get('tab');?>&y=<?= $year-1?>&m=<?= $month?>"><img src="<?php echo base_url(); ?>images/arrow-left2.png" alt="" class="ui-img-icon"/></a>
							</td>
							<td width="3%">
							<a href="?tab=<?= $this->input->get('tab');?>&y=<?= ($month-1 == 0) ? $year-1 :$year?>&m=<?= ($month-1 == 0) ? 12 :$month-1?>"><img src="<?php echo base_url(); ?>images/arrow-left.png" alt="" class="ui-img-icon"/></a>
							</td>
							<td width="88%" align="center">
							<?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?>
							</td>
							<td width="3%">
							<a href="?tab=<?= $this->input->get('tab');?>&y=<?= ($month+1 == 13) ? $year+1 :$year?>&m=<?= ($month+1 == 13) ? 1 :$month+1?>"><img src="<?php echo base_url(); ?>images/arrow-right.png" alt="" class="ui-img-icon"/></a>
							</td>
							<td width="3%">
							<a href="?tab=<?= $this->input->get('tab');?>&y=<?= $year+1?>&m=<?= $month?>"><img src="<?php echo base_url(); ?>images/arrow-right2.png" alt="" class="ui-img-icon"/></a>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr class="ui-color-contents-style-1">
				<td colspan="4" style="" valign="top" >
					<table class="ui-content-middle-menu-workorder2" width="100%">
						<tr class="ui-menu-color-header" style="color:white; font-size:12px;">
							<th >&nbsp;</th>
							<th style="text-align:left;">PO Reference No</th>
							<th >MIRN No.</th>
							<th >Issue Date</th>
						</tr>
						<style>
				.ui-content-middle-menu-workorder2 tr th {padding:8px;font-size:14px;}
				.ui-content-middle-menu-workorder2 tr td {padding:8px;font-size:14px;}
				.ui-content-middle-menu-workorder2 tr td.td-desk a{ font-weight:bold; font-size:14px;}
				</style>
							<?php $numrow = 1; ?>
							<?php if($this->input->get('tab') == 0){?>
							<tr align="center" <?= ($numrow%2==0) ?  'class="ui-color-color-color"' :  '' ?> >
		    					<td class="td-desk"><?=$numrow++?></td>
		    					<td class="td-desk" style="text-align:left;"><a href="<?php echo base_url();?>index.php/Procurement/po_follow_up2?pr=pen">PO/OPU-02/MKA/AGJ/G2016/0296  </a></td>
		    					<td class="td-desk">MRIN/MKA/AGJ/00585/2016</td>
		    					<td class="td-desk">18 Jul 2016 18/07/2016 17:42:46 </td>
		        			</tr>
							<?php }elseif($this->input->get('tab') == 1){?>
							<tr align="center" <?= ($numrow%2==0) ?  'class="ui-color-color-color"' :  '' ?> >
		    					<td class="td-desk"><?=$numrow++?></td>
		    					<td class="td-desk" style="text-align:left;"><a href="<?php echo base_url();?>index.php/Procurement/po_follow_up2?pr=approved">PO/OPU-02/MKA/AGJ/G2016/0294 </a></td>
		    					<td class="td-desk">MRIN/MKA/AGJ/00584/2016 </td>
		    					<td class="td-desk">18 Jul 2016 18/07/2016 17:30:29 </td>
		        			</tr>
							<?php } ?>							
								<tr align="center" style="height:200px; background:white;">
								<td colspan="10" class="default-NO">NO <?php if($tulis == "All MRIN" ){ echo "MRIN";}else{ echo $tulis;}?> FOUND FOR <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?></td>
							</tr>
				</table>
			</td>	
		</tr>
		<tr class="ui-header-new" style="height:5px;">
				<td align="center" colspan="4">
				</td>
			</tr>
	</table>	
	</div>
</div>
</body>
</html>