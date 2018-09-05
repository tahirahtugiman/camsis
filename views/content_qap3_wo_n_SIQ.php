
<div class="ui-middle-screen">
<?php include 'content_tab_qap3.php';?>
	<div class="content-workorder">
		<table class="ui-content-middle-menu-workorder" border="0" height="" width="80%" align="center">
			<?php include 'content_tab_qap3_vo.php';?>
			<tr class="" height="40px" style="color:white;">
				<td class="ui-middle-color assets-headear" colspan="3" style="padding-left:10px;"><b>Work Orders with No SIQ <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?></b><br /><span style="font-size:14px;"><i>The following work orders were evaluated but in compliant with uptime and PPM SIQ criteria.</i></span></td>
			</tr>
			<tr style="background:#B3130A;">
				<td colspan="12" height="40px">
					<table width="100%" class="ui-content-middle-menu-desk">
						<tr>
							<td width="3%" height="30px">
							<a href="?y=<?= $year-1?>&m=<?= $month?>&tab=2&vo=1"><img src="<?php echo base_url(); ?>images/arrow-left2.png" alt="" class="ui-img-icon" style="padding-top:4px; padding-left:4px;"/></a>
							</td>
							<td width="3%">
							<a href="?y=<?= ($month-1 == 0) ? $year-1 :$year?>&m=<?= ($month-1 == 0) ? 12 :$month-1?>&tab=2&vo=1"><img src="<?php echo base_url(); ?>images/arrow-left.png" alt="" class="ui-img-icon" style="padding-top:4px; padding-left:4px;"/></a>
							</td>
							<td width="88%" align="center">
							<?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?>
							</td>
							<td width="3%">
							<a href="?y=<?= ($month+1 == 13) ? $year+1 :$year?>&m=<?= ($month+1 == 13) ? 1 :$month+1?>&tab=2&vo=1"><img src="<?php echo base_url(); ?>images/arrow-right.png" alt="" class="ui-img-icon" style="padding-top:4px; padding-left:4px;"/></a>
							</td>
							<td width="3%">
							<a href="?y=<?= $year+1?>&m=<?= $month?>&tab=2&vo=1"><img src="<?php echo base_url(); ?>images/arrow-right2.png" alt="" class="ui-img-icon" style="padding-top:4px; padding-left:4px;"/></a>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr class="ui-color-contents-style-1">
				<td style="" width="" colspan="12" valign="top" align="center">
					<!--web-->
					<div class="ui-left_web wrap">
					<?php if ($validPeriod == 'true') { ?>
					<table class="ui-desk-style-table" style="color:black; background:white; text-align:center;" cellpadding="4" cellspacing="0" width="100%">      			
	    				<tr class="ui-menu-color-header" style="color:white;font-weight:;" align="center">
							<td>&nbsp;</td>
							<td>Type Code </td>  
							<td>Work Order</td>
							<td>Asset Number </td>
							<td>Uptime SIQ (Uptime vs TRPI)</td>
							<td> PPM SIQ </td>
						</tr>
						<tr align="center">
						<?php foreach($records as $row):?>
						<?= $numrow%2==0 ? '<tr class="ui-color-color-color item" id="item-<?php echo $numrow?>">' : '<tr class="item" id="item-<?php echo $numrow?>">'; ?>
	    				<?php
	    				/*$statusCondition = 'true';
	    				if (substr($row->siquptime_status,0,3) == 'Err' OR substr($row->siquptime_status,0,3) == 'Exc' OR substr($row->siqppm_status,0,3) == 'Err' OR substr($row->siqppm_status,0,3) == 'Exc'){
	    					$statusCondition = 'false';
	    				}*/

	    				if (!is_null($row->siquptime_status)) {
	    					$SIQUptime = $row->siquptime_status;
	    					if (substr($SIQUptime,0,2) == 'Ex'){
	    						$SIQUptime = "<span style=color:black;>".$SIQUptime."</span>";
	    					}
	    					elseif (substr($SIQUptime,0,2) == 'Er'){
	    						$SIQUptime = "<span style=color:red;>".$SIQUptime."</span>";
	    					}
	    					elseif (substr($SIQUptime,0,3) == 'SIQ'){
	    						$SIQUptime = "<span style=color:green;>".$SIQUptime."</span>";
	    					}
	    				}
	    				else{
	    					$SIQUptime = "<span style=color:green;>".'TRPI '.$row->trpi.' Uptime '.$row->uptime_pct."</span>";
	    				}
	    				
	    				$SIQPPM = '';
	    				if ($row->wo_type == 'PPM'){
	    					if (!is_null($row->siqppm_status)){
	    						$SIQPPM = $row->siqppm_status;
	    						if (substr($SIQPPM,0,2) == 'Ex'){
	    							$SIQPPM = "<span style=color:black;>".$SIQPPM."</span>";
	    						}
	    						elseif($SIQPPM == 'PPM completed on time') {
	    							$SIQPPM = "<span style=color:green;>".$SIQPPM."</span>";
	    						}
	    					}
	    				}
	    				?>  
							<td><?=$numrow?></td>
							<td><?=isset($row->type_code) ? $row->type_code : '' ?></td>
							<?php if (substr($row->work_order_no,0,2) == 'PP') { ?>
							<td><?php echo anchor ('contentcontroller/jobclose?wrk_ord='.$row->work_order_no.'&vppm=5',''.$row->work_order_no.'' ) ?></td>
							<?php } else { ?>
							<td><?php echo anchor ('contentcontroller/jobclose?wrk_ord='.$row->work_order_no.'&wo=6',''.$row->work_order_no.'' ) ?></td>
							<?php } ?>
							<td><?php echo anchor ('contentcontroller/assetupdate?asstno='.$row->asset_no,''.$row->asset_no.'' ) ?></td>
							<td><?= $SIQUptime ?></td>
							<td><?= $SIQPPM?></td>
						</tr>
						<?php $numrow++ ?>
						
						<?php endforeach;?>
						</tr>
						<?php } else { ?>
						<?php  if (strtotime($year . '-' . $month . '-01') > strtotime('2008-09-01')) { ?>
						<tr>
						<td align="center" style="height:200px; background:white;" colspan="12">
						<span style="color:red; text-transform: uppercase; font-size:14px; display:table-cell; text-align:center; vertical-align:middle; width:98%;">NO SIQ EVALUATION HAS BEEN DONE FOR THIS MONTH.</span>
						<?php } else { ?>
						<tr>
						<td align="center" style="height:200px; background:white;" colspan="12">
						<span style="color:red; text-transform: uppercase; font-size:14px; display:table-cell; text-align:center; vertical-align:middle; width:98%;">NO SIQ HAS BEEN GENERATED ON THIS MONTH.</span>
						<?php } ?>
						<?php } ?>
						</td>
						</tr>
					</table>
					<?php if (isset($next)): ?>
					<div class="nav">
						<a href='?p=<?php echo $next?>&numrow=<?php echo $numrow?>'>Next</a>
					</div>
					<?php endif?>
				</div>
				<!--endweb-->

				<!--mobile-->
				<div class="ui-left_mobile">
					<table class="ui-mobile-table-desk" style="color:black; width:100%;">
						<?php if ($validPeriod == 'true') { ?>
							<?php $numrow=1;foreach($records as $row):?>
	    				<?php
	    				$statusCondition = 'true';
	    				if (substr($row->siquptime_status,0,3) == 'Err' OR substr($row->siquptime_status,0,3) == 'Exc' OR substr($row->siqppm_status,0,3) == 'Err' OR substr($row->siqppm_status,0,3) == 'Exc'){
	    					$statusCondition = 'false';
	    				}

	    				if (!is_null($row->siquptime_status)) {
	    					$SIQUptime = $row->siquptime_status;
	    					if (substr($SIQUptime,0,2) == 'Ex'){
	    						$SIQUptime = "<span style=color:black;>".$SIQUptime."</span>";
	    					}
	    					elseif (substr($SIQUptime,0,2) == 'Er'){
	    						$SIQUptime = "<span style=color:red;>".$SIQUptime."</span>";
	    					}
	    					elseif (substr($SIQUptime,0,3) == 'SIQ'){
	    						$SIQUptime = "<span style=color:green;>".$SIQUptime."</span>";
	    					}
	    				}
	    				else{
	    					$SIQUptime = "<span style=color:green;>".'TRPI '.$row->trpi.' Uptime '.$row->uptime_pct."</span>";
	    				}
	    				
	    				$SIQPPM = '';
	    				if ($row->wo_type == 'PPM'){
	    					if (!is_null($row->siqppm_status)){
	    						$SIQPPM = $row->siqppm_status;
	    						if (substr($SIQPPM,0,2) == 'Ex'){
	    							$SIQPPM = "<span style=color:black;>".$SIQPPM."</span>";
	    						}
	    						elseif($SIQPPM == 'PPM completed on time') {
	    							$SIQPPM = "<span style=color:green;>".$SIQPPM."</span>";
	    						}
	    					}
	    				}
	    				?>  
						<?php if ($statusCondition == 'true') { ?>
							<tr <?=($numrow % 2) == 1 ? 'class="ui-color-color-color"' : 'class="bg-grey2"'?>>
								<td >No</td>
								<td class="td-desk">: <?=$numrow?></td>
							</tr>
							<tr <?=($numrow % 2) == 1 ? 'class="ui-color-color-color"' : 'class="bg-grey2"'?>>
								<td >Type Code </td>
								<td class="td-desk">: <?=isset($row->type_code) ? $row->type_code : '' ?></td>
							</tr>
							<?php if (substr($row->work_order_no,0,2) == 'PP') { ?>
							<tr <?=($numrow % 2) == 1 ? 'class="ui-color-color-color"' : 'class="bg-grey2"'?>>
								<td>Work Order</td>
								<td class="td-desk">: <?php echo anchor ('contentcontroller/jobclose?wrk_ord='.$row->work_order_no.'&vppm=5',''.$row->work_order_no.'' ) ?></td>
							</tr>
							<?php } else { ?>
							<tr <?=($numrow % 2) == 1 ? 'class="ui-color-color-color"' : 'class="bg-grey2"'?>>
								<td>Work Order</td>
								<td class="td-desk">: <?php echo anchor ('contentcontroller/jobclose?wrk_ord='.$row->work_order_no.'&wo=6',''.$row->work_order_no.'' ) ?></td>
							</tr>
							<?php } ?>
							<tr <?=($numrow % 2) == 1 ? 'class="ui-color-color-color"' : 'class="bg-grey2"'?>>
								<td>Asset Number</td>
								<td class="td-desk">: <?php echo anchor ('contentcontroller/assetupdate?asstno='.$row->asset_no,''.$row->asset_no.'' ) ?></td>
							</tr>
							<tr <?=($numrow % 2) == 1 ? 'class="ui-color-color-color"' : 'class="bg-grey2"'?>>
								<td>Uptime SIQ (Uptime vs TRPI) </td>
								<td class="td-desk" valign="top">: <span style="display:inline-block;"><?= $SIQUptime ?></span></td>
							</tr>
							<?php if ($row->wo_type == 'PPM') { ?>
							<?php if (strtotime($row->completed_date) < strtotime($row->ppm_agreeddate)){
								$StatusPPM = "<span style=color:red;>".'PPM completed past agreed date'."</span>";
							}
							elseif (strlen(strtotime($row->completed_date)) == 0){ 
								$StatusPPM = "<span style=color:red;>".'PPM not completed'."</span>";
							}
							?>
							<?php } ?>
							<tr <?=($numrow % 2) == 1 ? 'class="ui-color-color-color"' : 'class="bg-grey2"'?>>
								<td>PPM SIQ</td>
							<td valign="top">: <span style="display:inline-block;"><?=!is_null($row->siqppm_no) ? "<span style=color:red;>".anchor ('contentcontroller/qap3_SIQ_Number_update?ssiq='.$row->siqppm_no.'&m='.$month.'&y='.$year,''."<span style=color:red;>".$row->siquptime_no."</span>".'' ).'<br>'.$StatusPPM."</span>" : '' ?></span></td>
						</tr>
						<?php $numrow++ ?>
						<?php } ?>
						<?php endforeach;?>
						</tr>
						<?php } else { ?>
						<?php  if (strtotime($year . '-' . $month . '-01') > strtotime('2008-09-01')) { ?>
						<tr>
						<td align="center" style="height:200px;" colspan="2" class="default-NO">
						NO SIQ EVALUATION HAS BEEN DONE FOR THIS MONTH.
						<?php } else { ?>
						<tr>
						<td align="center" style="height:200px; background:white;" colspan="2" class="default-NO">
						NO SIQ HAS BEEN GENERATED ON THIS MONTH.
						<?php } ?>
						<?php } ?>
						</td>
						</tr>
					</table>
				</div>
				<!--endmobile-->
				</td>
			</tr>
			<tr class="ui-header-new" style="height:5px;">
				<td align="center" colspan="10">
				</td>
			</tr>
		</table>
	</div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
    	// Infinite Ajax Scroll configuration
        jQuery.ias({
            container : '.wrap', // main container where data goes to append
            item: '.item', // single items
            pagination: '.nav', // page navigation
            next: '.nav a', // next page selector
            loader: '<img src="<?php echo base_url(); ?>images/ajax-loader.gif"/>', // loading gif
            triggerPageThreshold: <?php echo ($rec[0]->jumlah / $limit) ?>  // show load more if scroll more than this
        });
    });
</script>