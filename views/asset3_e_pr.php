<div class="ui-middle-screen">
	<div class="div-p"></div>
	<div class="content-workorder">
		<table class="ui-content-middle-menu-workorder" border="0" height="" align="center">
			<?php 
			$procument = $this->input->get('tab');
			switch ($procument) {
				case "1":
					$tulis = "PR Generated";
					$tulis2 = "PR Reference No";
				break;
				case "2":
					$tulis = "PO Generated";
					$tulis2 = "PO Reference No";
				break;
				default:
					$tulis = "PR Generated";
					$tulis2 = "MRIN Reference No";
			} ?>
			<?php include 'content_pr_tab.php';?>
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
				<td colspan="4" style="background-color: #fffefc;" valign="top" >
					<table class="ui-content-middle-menu-workorder2 ui-landscape" width="100%">
						<tr class="ui-menu-color-header" style="color:white; font-size:12px;">
							<th >&nbsp;</th>
							<th style="text-align:left;"><?=$tulis2?></th>
							<th >Issue Date</th>
							<th >Requestor</th>
							<th >MRIN</th>
							<th >Status</th>
							<th >Date</th>
						</tr>
						<style>
							.ui-content-middle-menu-workorder2 tr th {padding:8px;font-size:14px;}
							.ui-content-middle-menu-workorder2 tr td {padding:8px;font-size:14px;}
							.ui-content-middle-menu-workorder2 tr td.td-desk a{ font-weight:bold; font-size:14px;}
						</style>
						<?php if ($record) { ?>
							<?php if($this->input->get('tab') == 0){?>
								<?php $numrow = 1; foreach ($record as $row): ?>
						<tr align="center" <?= ($numrow%2==0) ?  'class="ui-color-color-color"' :  '' ?> >
							<td class="td-desk"><?=$numrow++?></td>
							<td class="td-desk" style="text-align:left;">
								<a href="<?php echo base_url();?>index.php/Procurement/e_pr?pr=pending&mrinno=<?=$row->DocReferenceNo?>">
									<?=isset($row->DocReferenceNo) ? $row->DocReferenceNo : ''?>
								</a>
							</td>
							<td class="td-desk"><?=isset($row->DateCreated) ? date("d-m-Y",strtotime($row->DateCreated)) : ''?></td>
							<td class="td-desk"><?=isset($row->name) ? $row->name : ''?></td>
							<td class="td-desk"><?=isset($row->DocReferenceNo) ? $row->DocReferenceNo : ''?><b></b></td>
							<td class="td-desk">Pending</td>
							<td class="td-desk"><?=isset($row->DateCreated) ? date("d-m-Y",strtotime($row->DateCreated)) : ''?></td>
						</tr>
								<?php endforeach; ?>
							<?php }elseif($this->input->get('tab') == 1){?>
								<?php $numrow = 1; foreach ($record as $row): ?>
						<tr align="center" <?= ($numrow%2==0) ?  'class="ui-color-color-color"' :  '' ?> >
							<td class="td-desk"><?=$numrow++?></td>
							<td class="td-desk" style="text-align:left;"><a href="<?php echo base_url();?>index.php/Procurement/e_pr?pr=approved&mrinno=<?=$row->DocReferenceNo?>"><?=isset($row->PR_No) ? $row->PR_No : ''?></a></td>
							<td class="td-desk"><?=isset($row->DateCreated) ? date("d-m-Y",strtotime($row->DateCreated)) : ''?></td>
							<td class="td-desk"><?=isset($row->name) ? $row->name : ''?></td>
							<td class="td-desk"><b><?=isset($row->DocReferenceNo) ? $row->DocReferenceNo : ''?></b></td>
							<td class="td-desk">Pending</td>
							<td class="td-desk"><?=isset($row->DateCreated) ? date("d-m-Y",strtotime($row->DateCreated)) : ''?></td>
						</tr>
								<?php endforeach; ?>
							<?php }elseif($this->input->get('tab') == 2){?>
								<?php $numrow = 1; foreach ($record as $row): ?>
						<tr align="center" <?= ($numrow%2==0) ?  'class="ui-color-color-color"' :  '' ?> >
							<td class="td-desk"><?=$numrow++?></td>
							<td class="td-desk" style="text-align:left;">
								<a href="<?php echo base_url();?>index.php/Procurement/e_po_print?po=<?=isset($row->PO_No) ? $row->PO_No : ''?>&mrin=<?=isset($row->DocReferenceNo) ? $row->DocReferenceNo : ''?>">
									<?=isset($row->PO_No) ? $row->PO_No : ''?>
								</a>
							</td>
							<td class="td-desk"><?=isset($row->DateCreated) ? date("d-m-Y",strtotime($row->DateCreated)) : ''?></td>
							<td class="td-desk"><?=isset($row->name) ? $row->name : ''?></td>
							<td class="td-desk"><b><?=isset($row->DocReferenceNo) ? $row->DocReferenceNo : ''?></b></td>
							<td class="td-desk">Pending</td>
							<td class="td-desk"><?=isset($row->DateCreated) ? date("d-m-Y",strtotime($row->DateCreated)) : ''?></td>
						</tr>
								<?php endforeach; ?>
							<?php } ?>
						<?php } else { ?>
						<tr align="center" style="height:200px; background:white;">
							<td colspan="7" class="default-NO">
								NO <?php if($tulis == "All MRIN" ){ echo "MRIN";}else{ echo $tulis;}?> FOUND FOR <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?>
							</td>
						</tr>
						<?php } ?>
					</table>

					<table class="ui-portrait" style="color:black;">
						<tbody style="width: 100%;">
							<?php if ($record) { ?>
								<?php if($this->input->get('tab') == 0){?>
									<?php $rownum = 1; foreach ($record as $row): ?>
							<tr <?=($rownum % 2) == 1 ? 'class="ui-color-color-color"' : 'class="tr_color"'?>>
								<td >No</td>
								<td class="td-desk">: <?=$rownum;?></td>
							</tr>
							<tr <?=($rownum % 2) == 1 ? 'class="ui-color-color-color"' : 'class="tr_color"'?>>
								<td ><?=$tulis2?></td>
								<td class="td-desk">: 
									<a href="<?php echo base_url();?>index.php/Procurement/e_pr?pr=pending&mrinno=<?=$row->DocReferenceNo?>">
										<?=isset($row->DocReferenceNo) ? $row->DocReferenceNo : ''?>
									</a>
								</td>
							</tr>
							<tr <?=($rownum % 2) == 1 ? 'class="ui-color-color-color"' : 'class="tr_color"'?>>
								<td >Issue Date</td>
								<td class="td-desk">: <?=isset($row->DateCreated) ? date("d-m-Y",strtotime($row->DateCreated)) : ''?></td>
							</tr>
							<tr <?=($rownum % 2) == 1 ? 'class="ui-color-color-color"' : 'class="tr_color"'?>>
								<td>Requestor</td>
								<td class="td-desk">: <?=isset($row->name) ? $row->name : ''?></td>
							</tr>
							<tr <?=($rownum % 2) == 1 ? 'class="ui-color-color-color"' : 'class="tr_color"'?>>
								<td>MRIN</td>
								<td class="td-desk">: <?=isset($row->DocReferenceNo) ? $row->DocReferenceNo : ''?><b></b></td>
							</tr>
							<tr <?=($rownum % 2) == 1 ? 'class="ui-color-color-color"' : 'class="tr_color"'?>>
								<td>Status</td>
								<td class="td-desk">: Pending</td>
							</tr>
							<tr <?=($rownum % 2) == 1 ? 'class="ui-color-color-color"' : 'class="tr_color"'?>>
								<td>Date</td>
								<td class="td-desk">: <?=isset($row->DateCreated) ? date("d-m-Y",strtotime($row->DateCreated)) : ''?></td>
							</tr>
									<?php endforeach;?>
								<?php } ?>
							<?php }else{?>
							<tr align="center" style="height:200px; background:white;">
								<td colspan="2" class="default-NO">
									NO <?php if($tulis == "All MRIN" ){ echo "MRIN";}else{ echo $tulis;}?> FOUND FOR <?=date('F', mktime(0, 0, 0, $month, 10))?> <?=$year?>
								</td>
							</tr>
							<?php } ?>
						</tbody>
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