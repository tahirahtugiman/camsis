
<meta content="utf-8" http-equiv="encoding">
<body>
	<style type="text/css">
		.tbl-wo{
			font-size: 12px;
		}
		.tbl-wo-1{
			font-size: 10px;
		}
	</style>
	<div id="Instruction" class="pr-printer">
		<div class="header-pr">SERVICE REQUEST AND WORK ORDER</div>
	      <button onclick="javascript:myFunctionprint()" class="btn-button btn-primary-button" value="t">PRINT</button>
	     <!--<button type="cancel" class="btn-button btn-primary-button" onclick="window.history.back()">CANCEL</button>-->
		 <?php if ($this->input->get('wrk_ord') <> '') {?>
		<button type="cancel" class="btn-button btn-primary-button" onclick="window.history.back()">CANCEL</button>
       <?php }else{ ?>
		 <button type="cancel" class="btn-button btn-primary-button" onclick="location.href = '<?php base_url();?>report_rcmbulk?n_startdate=<?=$this->input->post('n_startdate')?>&n_enddate=<?=$this->input->post('n_enddate')?>&t=y'">CANCEL</button>
		 <?php } ?>
	</div>
	<?php $num=1;foreach ($record as $row): ?>
	<div class="">
		<table class="tbl-wo" border="1" align="center" style="border: 1px solid black;margin-top:5px;">
			<tr>
				<td style="padding-left:0px; width:120px;" align="center"><img src="<?php echo base_url(); ?>images/penmedic3.png" style="width:100px; height:40px;"/></td>
				<td>
					<table class="tbl-wo" border="0" align="center">
						<tr>
							<td align="center"><b style="text-transform: uppercase;"> 
							<?php if(($this->session->userdata('usersess') == 'HKS') or ($this->session->userdata('usersess') == 'SEC')){
							echo 'AP';}?>
							Facility Management Services</b></td>
						</tr>
						<tr>
							<td align="center"><b style="text-transform: uppercase;">IIUM MEDICAL CENTRE</b></td>
						</tr>
						<tr>
							<td align="center"><b style="text-transform: uppercase;">
							<?php if(($this->session->userdata('usersess') == 'SEC') or ($this->session->userdata('usersess') == 'HKS')){?>
							REQUEST
							<?php }else{ ?>
							SERVICE AND REQUEST 
							<?php } ?>
							Work ORDER
							<?php if(($this->session->userdata('usersess') == 'SEC') or ($this->session->userdata('usersess') == 'HKS') ){?>
								(SCS/HKS)
							<?php } ?>
							<?php if(($this->session->userdata('usersess') == 'FES') or ($this->session->userdata('usersess') == 'BES') ){?>
								(FES/BES)
							<?php } ?>
							</b></td>
						</tr>
					</table>
				</td>
				<td style="padding-left:5px; width:150px;" align="center">
				<img src="<?php echo base_url(); ?>images/logo.png" style="width:145px; height:60px;"/></td>
			</tr>
		</table>
		<table class="tbl-wo" border="0" align="center" style="font-weight:bold;">
			<tr>
				<td style="padding:1px; width:15%; font-size: 12px;">SERVICE TYPE : </td>
				<?php if(($this->session->userdata('usersess') == 'SEC')){?>
				<td style="padding:1px; width:80px; font-size: 13px;">
					<div class="box2"><img src="<?php echo base_url(); ?>images/tick2.png" class="img-tick"/></div> SCS
				</td>
				<td style="padding:1px; width:80px; font-size: 12px;"> 
					<div class="box2"></div> HKS
				</td>
				<?php }elseif(($this->session->userdata('usersess') == 'HKS')){ ?>
				<td style="padding:1px; width:80px; font-size: 12px;">
					<div class="box2"></div> SCS
				</td>
				<td style="padding:1px; width:80px; font-size: 12px;">
					<div class="box2"><img src="<?php echo base_url(); ?>images/tick2.png" class="img-tick"/></div> HKS			
				</td>
				<?php }elseif(($this->session->userdata('usersess') == 'BES')){ ?>
				<td style="padding:1px; width:80px; font-size: 12px;"> 
					<div class="box2"></div> FES
				</td>
				<td style="padding:1px; width:80px; font-size: 12px;">
					<div class="box2"><img src="<?php echo base_url(); ?>images/tick2.png" class="img-tick"/></div> BES
				</td>
				<?php }elseif(($this->session->userdata('usersess') == 'FES')){ ?>
				<td style="padding:1px; width:80px; font-size: 12px;">
					<div class="box2"><img src="<?php echo base_url(); ?>images/tick2.png" class="img-tick"/></div> FES			
				</td>
				<td style="padding:1px; width:80px; font-size: 12px;">
					<div class="box2"></div> BES
				</td>
				<?php } ?>
				<td style="padding-left:45%; width:400px; font-size: 12px;"> Date : <?= date("d/m/Y")?> </td>
			</tr>
			<tr>
				<td style="padding:1px; width:100px; font-size: 12px;" colspan="6">WORK ORDER NO : <?= ($row[7]) ? $row[7] : 'NA' ?> </td>
			</tr>
		</table>
		<!--<table class="tbl-wo" border="0" align="center">
			<tr>
				<td width="33.5%"><span style="font-weight:bold;">SERVICE REQUEST</span></td>
				<td colspan="" width="50%"><span style="float:right; font-weight:bold;">Service & Work Order Request No :</span></td>
				<td width="1%" style="font-weight:bold;"><span style="color:blue;"></span></td>
			</tr>
		</table>-->
		<table class="tbl-wo" border="1" align="center" style="border: 1px solid black;">
			<tr>
				<td style="width:50%; padding:1px;">
				
					<table class="tbl-wo-1" border="0" align="left">
						<tr>
							<td valign="top" width="50%">
								<table class="tbl-wo-1">
									<tr>
										<td style="width:20%;" valign="top">Requestor</td>
										<td style="width:50%;" valign="top">: <span style="color:blue;"><?= (isset($row[0][0]->V_requestor)) ? $row[0][0]->V_requestor : 'NA' ?></span></td>
									</tr>
									<tr>
										<td style="width:20%;" valign="top">Department</td>
										<td valign="top" style=" width: 50%;">: <span style="color:blue;"><?= (isset($row[0][0]->v_UserDeptDesc)) ? $row[0][0]->v_UserDeptDesc : 'NA' ?></span></td>
									</tr>
									<tr>
										<td style="width:20%;">Dept. Code </td>
										<td style=" width: 50%;"><span style="color:blue;">: <?= (isset($row[0][0]->V_User_dept_code)) ? $row[0][0]->V_User_dept_code : 'NA' ?></span></td>
									</tr>
									<tr>
										<td style="width:20%;">Room Code </td>
										<td  style="width: 50%;"><span style="color:blue; ">: <?= (isset($row[0][0]->V_location_code)) ? $row[0][0]->V_location_code : 'NA' ?> (<?= (isset($row[0][0]->v_Location_Name)) ? $row[0][0]->v_Location_Name : 'NA' ?>)</span></td>
									</tr>
									<tr>
										<td style="width:20%;">Equipment </td>
										<td style=" width: 50%;"><span style="color:blue;">: <?= (isset($row[0][0]->V_Asset_name)) ? $row[0][0]->V_Asset_name : 'NA' ?> </span></td>
									</tr>
								</table>
							</td>
							<td valign="top" width="50%">
								<table class="tbl-wo-1">
									<tr>
										<td valign="top">Designation:</td>
										<td> <span style="color:blue;"><?= (isset($row[0][0]->V_MohDesg)) ? $row[0][0]->V_MohDesg : 'NA' ?></span></td>
									</tr>
									<tr>
										<td valign="top">Ext. No:</td>
										<td valign="top"> <span style="color:blue;"><?= (isset($row[0][0]->V_phone_no)) ? $row[0][0]->V_phone_no : 'NA' ?></span></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td valign="top" width="50%">
								<table class="tbl-wo-1" width="100%">
									<tr>
										<td style="width: 45%">Model </td>
										<td><span style="color:blue;">: <?= (isset($row[0][0]->V_Model_no)) ? $row[0][0]->V_Model_no : 'NA' ?></span></td>
									</tr>
									<tr>
										<td style="width: 27%">Serial No </td>
										<td><span style="color:blue;">: <?= (isset($row[0][0]->V_Serial_no)) ? $row[0][0]->V_Serial_no : 'NA' ?></span>
										</td>
									</tr>
								</table>
							</td>
							<td valign="top" width="50%">
								<table class="tbl-wo-1">
									<tr>
										<?php if(($this->session->userdata('usersess') == 'SEC') or ($this->session->userdata('usersess') == 'HKS')){?>

										<?php }else{ ?>
										<td valign="top">Asset No: </td>
										<td valign="top"><span style="color:blue;"><?= (isset($row[0][0]->V_Tag_no)) ? $row[0][0]->V_Tag_no : 'NA' ?></span></td>
										<?php } ?>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
				<td style="width:50%; padding:1px;" valign="top" colspan="0"> 
					<table class="tbl-wo-1" border="0" align="left">
						<tr>
							<td class="tbl-wo-data">Taken By </td>
							<td>: <span style="color:blue;"><?= (isset($row[0][0]->takenby)) ? $row[0][0]->takenby : 'NA' ?></span></td>
						</tr>
						<tr>
							<td class="tbl-wo-data">Request Type</td>
							<td>: <span style="color:blue;"><?= (isset($row[0][0]->V_request_type)) ? $row[0][0]->V_request_type : 'NA' ?></span></td>
						</tr>
						<tr>
							<td class="tbl-wo-data">Date</td>
							<td>: <span style="color:blue;"><?= date("d/m/Y", strtotime(isset($row[0][0]->D_date) == TRUE ? $row[0][0]->D_date : 'N/A'))?></span></td>
						</tr>
						<tr>
							<td class="tbl-wo-data">Time </td>
							<td>: <span style="color:blue;"><?= date("H:i ", strtotime(isset($row[0][0]->D_date) == TRUE ? $row[0][0]->D_date : 'N/A'))?></span></td>
						</tr>
						<tr>
						<td class="tbl-wo-data">Priority </td>
						<td> 
							<table class="tbl-wo" border="0" align="left">
								<tr>
									<td style="width:33.33%;"> :
									<div class="box2">
									<?php if($row[0][0]->V_priority_code == 'Normal'){?>
									<img src="<?php echo base_url(); ?>images/tick2.png" class="img-tick"/>
									<?php }else{ ?>
									<?php } ?></div> Normal </td>
									<td style="width:33.33%;"><div class="box2">
									<?php if($row[0][0]->V_priority_code == 'Emergency'){?>
									<img src="<?php echo base_url(); ?>images/tick2.png" class="img-tick"/>
									<?php }else{ ?>
									<?php } ?>
									</div> Emergency </td>
								</tr>
							</table>
						</td>
						</tr>
						<?php if(($this->session->userdata('usersess') == 'SEC') or ($this->session->userdata('usersess') == 'HKS')){?>
						
						<?php }else{ ?>
						<tr>
						<td style="width: 29%">Warranty Status</td>
						<td style="width: 69%"> 
							<table class="tbl-wo" border="0" align="left">
								<tr>
									<td style="width:55%;"> : <div class="box2">
									<?php if(strtotime($row[1][0]->V_Wrn_end_code) > strtotime(date("d/m/Y"))) {?>
									<img src="<?php echo base_url(); ?>images/tick2.png" class="img-tick"/>
									<?php }else{ ?>
									
									<?php } ?>
									</div> Under Warranty</td>
									<td style="width:40%;"><div class="box2">
									<?php  if(strtotime($row[1][0]->V_Wrn_end_code) < strtotime(date("d/m/Y"))) {?>
									<img src="<?php echo base_url(); ?>images/tick2.png" class="img-tick"/>
									<?php }else{ ?>
									
									<?php } ?>
									</div> Post Warranty</td>
								</tr>
							</table>
						</td>
						</tr>
						<?php } ?>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="padding:1px;"> 
					<table class="tbl-wo-1" border="0" align="bottom">
						<tr>
							<td> Request Description : 
								<?php if(in_array($this->session->userdata("usersess"), array("FES", "BES")) ){?>
								<span style="border-bottom: 1px dotted black;margin-right: 5px;width: 77%; height:12px; float: right;"></span>
								<?php } ?>
							</td>
						</tr>
						<?php if($row[0][0]->V_summary == 'N/A'){?>
						<tr>
							<td> <hr class='dotted' style="margin:10px 5px 5px 5px;" /></td>
						</tr>
						<tr>
							<td> <hr class='dotted' style="margin:10px 5px 5px 5px;" /></td>
						</tr>
						<?php }else{ ?>
						<tr>
							<td style="padding:3px 3px 3px 0px;">
								<p style="border-bottom: 1px dotted black; margin-left: 5px; margin-right: 5px;">
									<span style="color:blue;"><?= (isset($row[0][0]->V_summary)) ? $row[0][0]->V_summary : 'NA' ?></span>
								</p>
								<?php if(in_array($this->session->userdata("usersess"), array("SEC","HKS"))){?>
								<p style="border-bottom: 1px dotted black; margin-left: 5px; margin-right: 5px;"></p>
								<?php }?>
							</td>
						</tr>
						<?php } ?>
						
						
					</table> 
				</td>
			</tr>
		</table>
		<table class="tbl-wo-1" border="0" align="center">
			<tr>
				<td align="center" height="5px"></td>
			</tr>
		</table>
		<table class="tbl-wo" border="0" align="center" style="background-color:black; color:white;">
			<tr>
				<td align="center"><span style="font-weight:bold; text-transform: uppercase;">RESPONSE Findings</span></td>
			</tr>
		</table>
		<table class="tbl-wo" border="1" align="center" style="border: 1px solid black;">
			<tr>
				<td style="width:50%; padding:1px;" rowspan="2" valign="top">
					<table class="tbl-wo-1" border="0" align="left">
						<tr>
							<td> Assigned To : <?=(isset($row[2][0][0])) ? $row[2][0][0] : ''?><br /> <i>( Name )</i></td>
						</tr>
						<tr>
							<td> Response findings :</td>
						</tr>
						<tr>
							<td><p style="border-bottom: 1px dotted black; margin-left: 5px; margin-right: 5px;"><?=isset($row[4][0][0]) ? $row[4][0][0] : '&nbsp;'?> <!-- <hr class='dotted' style="margin:10px 5px 5px 5px;" /> --></p></td>
						</tr>
						<tr>
							<td><p style="border-bottom: 1px dotted black; margin-left: 5px; margin-right: 5px;"> &nbsp;</p></td>
						</tr>
						<?php if(($this->session->userdata('usersess') == 'SEC') or ($this->session->userdata('usersess') == 'HKS')){?>

						<?php }else{ ?>
						<tr>
							<td><p style="border-bottom: 1px dotted black; margin-left: 5px; margin-right: 5px;"> &nbsp;<!-- <hr class='dotted' style="margin:10px 5px 5px 5px;" /> --></p></td>
						</tr>
						<?php } ?>
					</table> 
				</td>
				<td style="width:50%; padding:1px;" valign="top" style="" colspan="">
					<table class="tbl-wo-1" border="0" align="left">
						<tr>
							<td colspan="3" height="40px" valign="top"> Requestor Verification : <br /> <i>(Name,sign &amp; stamp)</i></td>
						</tr>
						<?php if(($this->session->userdata('usersess') == 'SEC') or ($this->session->userdata('usersess') == 'HKS')){?>
						<tr>
							<td colspan="3" height="40px">&nbsp; </td>
						</tr>
						<?php }else{ ?>

						<?php } ?>
						<tr>
							<td style="width:27.33%">&nbsp; </td>
							<td> Date : </td>
							<td>Time :</td>
						</tr>
					</table> 
				</td>
			</tr>
			<?php if(($this->session->userdata('usersess') == 'SEC') or ($this->session->userdata('usersess') == 'HKS')){?>

			<?php }else{ ?>
			<tr>
				<td style="width:50%; padding:1px;" valign="top" style="" colspan="">
					<table class="tbl-wo-1" border="0" align="left">
						<tr>
							<td>
							<table class="tbl-wo-1" border="0" align="left">
								<tr>
									<td style="width:21%;" valign="top"> Equipment :</td>
									<td style="width:33%;" valign="top"><div class="box2"></div> Remained on-side </td>
									<td style="width:41%;"><div class="box2"></div> Released to Contractor <br/> 
									<i style="padding-left:12px;">ETF Ref No : </i> </td>
								</tr>
							</table>
						</tr>
						<tr>
							<td>
							<table class="tbl-wo-1" border="0" align="left">
								<tr>
									<td style="width:41%;"> Physical Condition :</td>
									<td style="width:21%;"><div class="box2"></div> Good </td>
									<td style="width:33%;"><div class="box2"></div> Not Good </td>
								</tr>
							</table>
						</tr>
					</table>
				</td>
			</tr>
		<?php } ?>
		</table>
		<table class="tbl-wo-1" border="0" align="center">
			<tr>
				<td align="center" height="5px"></td>
			</tr>
		</table>
		<table class="tbl-wo" border="0" align="center" style="background-color:black; color:white;">
			<tr>
				<td align="center"><span style="font-weight:bold; text-transform: uppercase;">Corrective Actions</span></td>
			</tr>
		</table>
		<table class="tbl-wo" border="" style="border: 1px solid black; ">
			<tr>
				<td rowspan="2" align="center">Assign to: <br />(Name / Staff No)</td>
				<td colspan="2" align="center">Start</td>
				<td colspan="2" align="center">End</td>
				<td rowspan="2" align="center">Part / Item Code</td>
				<td rowspan="2" align="center">Part / Item Descriptions</td>
				<td rowspan="2" align="center">Qty</td>
				<td rowspan="2" align="center">Rate</td>
			</tr>
			<tr>
				<td align="center">Date</td>
				<td align="center">Time</td>
				<td align="center">Date</td>
				<td align="center">Time</td>
			</tr>
			<tr>
				<td align="center">&nbsp;<?=(isset($row[2][0][0])) ? $row[2][0][0] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][0][1])) ? $row[2][0][1] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][0][2])) ? $row[2][0][2] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][0][1])) ? $row[2][0][1] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][0][3])) ? $row[2][0][3] : ''?></td>
				<td align="center" style="width:15%;">&nbsp;</td>
				<td align="center">&nbsp;<?=(isset($row[3][0][0])) ? $row[3][0][0] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[3][0][1])) ? $row[3][0][1] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[3][0][2])) ? $row[3][0][2] : ''?></td>
			</tr>
			<tr>
				<td align="center">&nbsp;<?=(isset($row[2][1][0])) ? $row[2][1][0] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][1][1])) ? $row[2][1][1] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][1][2])) ? $row[2][1][2] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][1][1])) ? $row[2][1][1] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][1][3])) ? $row[2][1][3] : ''?></td>
				<td align="center">&nbsp;</td>
				<td align="center">&nbsp;<?=(isset($row[3][1][0])) ? $row[3][1][0] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[3][1][1])) ? $row[3][1][1] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[3][1][2])) ? $row[3][1][2] : ''?></td>
			</tr>
			<tr>
				<td align="center">&nbsp;<?=(isset($row[2][2][0])) ? $row[2][2][0] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][2][1])) ? $row[2][2][1] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][2][2])) ? $row[2][2][2] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][2][1])) ? $row[2][2][1] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][2][3])) ? $row[2][2][3] : ''?></td>
				<td align="center">&nbsp;</td>
				<td align="center">&nbsp;<?=(isset($row[3][2][0])) ? $row[3][2][0] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[3][2][1])) ? $row[3][2][1] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[3][2][2])) ? $row[3][2][2] : ''?></td>
			</tr>
			<tr>
				<td align="center">&nbsp;<?=(isset($row[2][3][0])) ? $row[2][3][0] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][3][1])) ? $row[2][3][1] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][3][2])) ? $row[2][3][2] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][3][1])) ? $row[2][3][1] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][3][3])) ? $row[2][3][3] : ''?></td>
				<td align="center">&nbsp;</td>
				<td align="center">&nbsp;<?=(isset($row[3][3][0])) ? $row[3][3][0] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[3][3][1])) ? $row[3][3][1] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[3][3][2])) ? $row[3][3][2] : ''?></td>
			</tr>
			<tr>
				<td align="center">&nbsp;<?=(isset($row[2][4][0])) ? $row[2][4][0] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][4][1])) ? $row[2][4][1] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][4][2])) ? $row[2][4][2] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][4][1])) ? $row[2][4][1] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[2][4][3])) ? $row[2][4][3] : ''?></td>
				<td align="center">&nbsp;</td>
				<td align="center">&nbsp;<?=(isset($row[3][4][0])) ? $row[3][4][0] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[3][4][1])) ? $row[3][4][1] : ''?></td>
				<td align="center">&nbsp;<?=(isset($row[3][4][2])) ? $row[3][4][2] : ''?></td>
			</tr>			
			<tr>
				<td valign="top" height="60px" colspan="9" >
					<table class="tbl-wo-1" border="0" align="left">
						<tr>
							<td style="padding:1px;">Actual Work Done / Recommendation :</td>
						</tr>
						
						<tr>
							<td><?=(isset($row[4][1][0])) ? $row[4][1][0] : ''?><hr class='dotted' style="margin:10px 5px 5px 5px;"/></td>
						</tr>
						<tr>
							<td><?=(isset($row[4][2][0])) ? $row[4][2][0] : ''?><hr class='dotted' style="margin:10px 5px 5px 5px;"/></td>
						</tr>
						<tr>
							<td><?=(isset($row[4][3][0])) ? $row[4][3][0] : ''?><hr class='dotted' style="margin:10px 5px 5px 5px;"/></td>
						</tr>
						<tr>
							<td><hr class='dotted' style="margin:10px 5px 5px 5px;"/></td>
						</tr>
					</table>
				</td>
			</tr>
			<?php if(($this->session->userdata('usersess') == 'SEC') or ($this->session->userdata('usersess') == 'HKS')){?>
			<tr>
			    <td valign="top" height="60px" colspan="9" >
					<table class="tbl-wo-1" border="0" align="left">
						<tr>
							<td style="padding:5px 5px 5px 25px; width:55px;">Remarks :</td>
							<td style="padding:3px;"><hr class='dotted' style="margin:10px 5px 5px 5px;"/></td>
						</tr>
						<tr>
							<td></td>
							<td style="padding:1px;"><hr class='dotted' style="margin:10px 5px 5px 5px;"/></td>
						</tr>
					</table>
			    </td>
			</tr>
			<?php }else{ ?>

			<?php } ?>

			<tr>
			<?php if(($this->session->userdata('usersess') == 'SEC') or ($this->session->userdata('usersess') == 'HKS')){?>
				<td style=" height:0px;border-bottom:1px solid white;border-right:1px solid black;border-left:1px solid black;margin:0px;padding:0px;" colspan="5" rowspan=""></td>
			<?php }else{ ?>
				<td style="width:50%; padding:0px 0px 0px 3px;" colspan="5" valign="top" heigth="10px" rowspan="">
					<table class="tbl-wo" border="0" align="left">
						<tr>
							<td style="width:30%;"> Out-sourcing :</td>
							<td style="width:37%;"><div class="box2"></div> Not Required</td>
							<td style="width:33%;"><div class="box2"></div> Required</td>
						</tr>
						<tr>
							<td></td>
							<td><div class="box2"></div> Contract Service</td>
						</tr>
					</table>
				</td>
			<?php } ?>
			    <td style="width:50%; padding:1px;" colspan="5" valign="top"  rowspan="4">
					<table class="tbl-wo-1" border="0" align="left">
					<?php if(($this->session->userdata('usersess') == 'SEC') or ($this->session->userdata('usersess') == 'HKS')){?>
						<tr>
							<td colspan="3" height="30px">&nbsp;</td>
						</tr>
					<?php }else{ ?>
						<tr>
							<td style="width:33.33%;"> Performance Test :</td>
							<?php if (($row[5]) AND $row[5][0]->v_ptest == 'Done') { ?>
							<td style="width:33.33%;"><div class="box2"><img src="<?php echo base_url(); ?>images/tick2.png" class="img-tick"/></div> Pass</td>
							<td style="width:33.33%;"><div class="box2"></div> Fail</td>
							<?php } ?>
							<?php if (($row[5]) AND $row[5][0]->v_ptest <> 'Done') { ?>
							<td style="width:33.33%;"><div class="box2"></div> Pass</td>
							<td style="width:33.33%;"><div class="box2"></div> Fail</td>
							<?php } ?>
							<?php if (!($row[5])) { ?>
							<td style="width:33.33%;"><div class="box2"></div> Pass</td>
							<td style="width:33.33%;"><div class="box2"></div> Fail</td>
							<?php } ?>
						</tr>
						<tr>
							<td></td>
							<?php if (($row[5]) AND $row[5][0]->v_ptest == 'Not Applicable') { ?>
							<td><div class="box2"><img src="<?php echo base_url(); ?>images/tick2.png" class="img-tick"/></div> Not Applicable</td>
							<td><div class="box2"></div> Not Required </td>
							<?php } ?>
							<?php if (($row[5]) AND $row[5][0]->v_ptest <> 'Not Applicable') { ?>
							<td><div class="box2"></div> Not Applicable</td>
							<td><div class="box2"></div> Not Required </td>
							<?php } ?>
							<?php if (!($row[5])) { ?>
							<td><div class="box2"></div> Not Applicable</td>
							<td><div class="box2"></div> Not Required </td>
							<?php } ?>
						</tr>
						<tr>
							<td> Safety Test :</td>
							<?php if (($row[5]) AND $row[5][0]->v_stest == 'Done') { ?>
							<?php if (($row[5]) AND $row[5][0]->v_sstatus == 'Y') { ?>
							<td><div class="box2"><img src="<?php echo base_url(); ?>images/tick2.png" class="img-tick"/></div> Pass</td>
							<td><div class="box2"></div> Fail</td>
							<?php } else { ?>
							<td><div class="box2"></div> Pass</td>
							<td><div class="box2"><img src="<?php echo base_url(); ?>images/tick2.png" class="img-tick"/></div> Fail</td>
							<?php } ?>
							<?php } else { ?>
							<td><div class="box2"></div> Pass</td>
							<td><div class="box2"></div> Fail</td>
							<?php } ?>
						</tr>
						<tr>
							<td></td>
							<?php if (($row[5]) AND $row[5][0]->v_stest == 'Not Applicable') { ?>
							<td><div class="box2"><img src="<?php echo base_url(); ?>images/tick2.png" class="img-tick"/></div> Not Applicable</td>
							<td><div class="box2"></div> Not Required </td>
							<?php } ?>
							<?php if (($row[5]) AND $row[5][0]->v_stest <> 'Not Applicable') { ?>
							<td><div class="box2"></div> Not Applicable</td>
							<td><div class="box2"></div> Not Required </td>
							<?php } ?>
							<?php if (!($row[5])) { ?>
							<td><div class="box2"></div> Not Applicable</td>
							<td><div class="box2"></div> Not Required </td>
							<?php } ?>
						</tr>
						<tr style="line-height:33px;">
							<td height="20px;" valign="bottom">Remarks : </td>
							<td colspan="2" valign="bottom"><hr class='dotted' style="margin:5px 5px 5px 0px;"/></td>
						</tr>
					<?php } ?>
						<tr>
							<td>Completed By : </td>
							<td><?=($row[5]) && isset($row[5][0]->userr) && $row[5][0]->userr <> 'N/A' ? $row[5][0]->userr : ''?></td>
							<td>Date : <?=($row[5]) && isset($row[5][0]->d_DateDone) ? date("d-m-Y",strtotime($row[5][0]->d_DateDone)) : ''?></td>
						</tr>
						<tr>
							<td><i>(Name)</i> </td>
							<td></td>
							<td>Time : <?=($row[5]) && isset($row[5][0]->v_time) ? $row[5][0]->v_time : ''?></td>
						</tr>
					</table>
				</td>
			</tr>
			<?php if(($this->session->userdata('usersess') == 'SEC') or ($this->session->userdata('usersess') == 'HKS')){?>

			<?php }else{ ?>
			<tr>
			    <td style="width:50%; padding:0px 0px 0px 3px;" colspan="5">
			    	<table class="tbl-wo" border="0" align="left">
						<tr>
							<td style="width:30%;">Claim Status :</td>
							<td style="width:37%;"><div class="box2"></div> Not Reimbursable</td>
							<td style="width:33%;"><div class="box2"></div> Reimbursable</td>
						</tr>
						<tr>
							<td>Reference No :</td>
							<td><hr class='dotted' style="margin:margin:10px 10px 10px 0px;height:10px;"/></td>
						</tr>
					</table>
			    </td>
			</tr>
			<?php } ?>
			<tr>
			    <td style="width:50%; padding:0px 0px 0px 3px;" colspan="5" valign="top" heigth="10px" rowspan="2">
			    	<table class="tbl-wo" border="0" align="left">
						<tr>
							<td style="" colspan="3" valign="top" height="25px"> Recommendation / Report :</td>
						</tr>
						<tr>
							<!-- <td style="width:34%;"><div class="box2"></div> Advisory Service</td>
							<td style="width:13%;"><div class="box2"></div> BER</td>
							<td style="width:98%;"><div class="box2"></div> Condition Appraisal</td> -->

							<td style="width:37%;"><div class="box2"></div> Advisory Service</td>
							<?php if(!in_array($this->session->userdata('usersess'), array('SEC','HKS'))){?>
							<td style="width:15%;"><div class="box2"></div> BER</td>
							<td style="width:70%;"><div class="box2"></div> Condition Appraisal</td>
							<?php }else{?>
							<td style="width:45%;" colspan="2"><div class="box2"></div> Condition Appraisal</td>
							<?php }?>
						</tr>
						<tr>
							<td colspan="3" width="100%">
								<table class="tbl-wo" border="0" align="left" width="100%">
									<tr>
										<td width="37%"><div class="box2"></div> Exemption</td>
										<td align="left" width="33%"> <i>Reference No :</i></td>
										<td> <hr class='dotted' style="margin:margin:10px 10px 10px 0px;height:10px;"/></td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
			    </td>
			</tr>
		</table>
		<table class="tbl-wo-1" border="0" align="center">
			<tr>
				<td align="center" height="5px"></td>
			</tr>
		</table>
		<table class="tbl-wo" border="0" align="center" style="background-color:black; color:white;">
			<tr>
				<td align="center"><span style="font-weight:bold;">WORK ORDER COMPLETION VALIDATION</span></td>
			</tr>
		</table>
		<table class="tbl-wo" border="1" align="center" style="border: 1px solid black;">
			<tr>
				<td style="width:50%;" align="center"> Acceptance by Customer</td>
				<td style="width:50%;" valign="top" colspan="2" align="center"> For Office use only</td>
			</tr>
			<tr>
				<td style="padding:10px 0px 0px 3px;" class="tb-class" colspan="" rowspan="2" valign="top">
					<table class="tbl-wo" border="0" align="left" style="width:100%; height:100%;">
						<tr>
							<td valign="top">Signature :</td>
						</tr>
						<tr>
							<td valign="top">Name :</td>
						</tr>
						<tr>
							<td valign="top">Designation :</td>
						</tr>
						<tr>
							<td valign="top">Date :</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td style="padding:10px 0px 0px 3px;" class="tb-class" colspan="2">
					<table class="tbl-wo" border="0" align="left" style="width:100%;">
						<tr>
							<td valign="top">Signature :</td>
						</tr>
						<tr>
							<td valign="top">Name :</td>
						</tr>
						<tr>
							<td valign="top">Designation :</td>
						</tr>
						<tr>
							<td valign="top">Date :</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td style="padding-left:3px;" class="tb-class" colspan="2" valign="top">
					<table class="tbl-wo-1" border="0" align="left" style="width:100%; height:100%;">
						<tr>
							<td style="width:20%" valign="top">Quality Cause Code : QC</td>
							<td style="" valign="top"><hr class='dotted' style="margin:10px 5px 5px 0px; width:5%;"/></td>
						</tr>
					</table>
				</td>
			</tr>	
		</table>
		<table class="tbl-wo" border="0" align="">
			<tr>
				<td style="" valign="top" colspan="2"><span style="font-size:7px; padding-left:30px;"><i>Note: Tick (<span align="center" class="icon-check" style="font-size:7px;"></span>) where applicable.</i></span></td>
			</tr>
			<?php $usersess = $this->session->userdata('usersess');?>
			<?php if( in_array($usersess, array("HKS","SEC","FES","BES") ) ){?>
			<tr>
				<td style="" valign="top"><span style="font-size:7px; padding-left:30px;"><i>*Date and Time declared by APSB shall be deemed valid if NOT provided by the customer.</i></span></td>
				<td style="" valign="top" align="right"><span style="font-size:7px; padding-left:30px;"><i></i></span></td>
			</tr>
			<tr>
				<td style="" valign="top"><span style="font-size:7px; padding-left:30px;"><i></i></span></td>
				<td style="" valign="top" align="right"><span style="font-size:7px; padding-left:30px;"><i>Copyright product of Advance Pact Sdn Bhd. All Right Reserveed.</i></span></td>
			</tr>
			<tr>
				<td style="" valign="top"><span style="font-size:7px; padding-left:0px;">APSB-FORM</span></td>
				<?php if( $this->session->userdata('usersess') == 'SEC' || $this->session->userdata('usersess') == 'HKS' ){?>
				<td style="" valign="top" align="right"><span style="font-size:7px; padding-left:30px;">QP-001 : HF-012 : Revision 2.0 : 09 May 2018</span></td>
				<?php }elseif( $this->session->userdata('usersess') == 'BES' || $this->session->userdata('usersess') == 'FES' ){?>
				<td style="" valign="top" align="right"><span style="font-size:7px; padding-left:30px;">QP-001 : BFF-001 : Revision 2.0 : 09 May 2018</span></td>
				<?php } ?>
			</tr>
			<?php }else{ ?>
			<tr>
				<td style="" valign="top"><span style="font-size:7px; padding-left:30px;"><i>*Date and Time declared by APSB shall be deemed valid if NOT provided by the customer.</i></span></td>
				<td style="" valign="top" align="right"><span style="font-size:7px; padding-left:30px;"><i>Copyright product of Advance Pact Sdn Bhd. All Right Reserveed.</i></span></td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<div class="StartNewPage" id="breakpage"><span id="pagebreak">Page Break</span></div>
	
		<?php endforeach; ?>
	</body>
</html>