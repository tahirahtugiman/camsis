<body>
	<div id="Instruction" class="pr-printer">
		<div class="header-pr">SERVICE REQUEST AND WORK ORDER</div>
		<button onclick="javascript:myFunction('print_complaint?cmplnt_no=<?=$this->input->get('cmplnt_no')?>&none=closed');" class="btn-button btn-primary-button">PRINT</button>
		<button type="cancel" class="btn-button btn-primary-button" onclick="window.history.back()">CANCEL</button>
	</div>
	<div class="" style="border:0px solid; display:block; width:95%; margin-left:auto; margin-right:auto;">
		<!--<table class="tbl-wo" border="0" align="center">
			<tr>
				<td><img src="<?php echo base_url(); ?>images/logo.png" style="width:140px; height:40px;"/>
				<br /><span style="font-size:7.2px;">(Advance Pact Sdn Bhd)</span></td>
				<td rowspan="2" width="40%" align="center" style="font-weight:bold; font-size:20px;"><?= ($hosp[0]->v_HospitalName) ? $hosp[0]->v_HospitalName : 'NA' ?></td>
				<td valign="bottom" colspan="2"><span style="float:right;">Date : <?= date("d M j")?>&nbsp;</span></td>
			</tr>
		</table>-->
		<table class="tbl-wo" border="1" align="center" style="border: 1px solid black;margin-top:5px;">
			<tr>
				<td style="padding-left:0px; width:120px;" align="center"><img src="<?php echo base_url(); ?>images/penmedic3.png" style="width:100px; height:30px;"/></td>
				<td>
					<table class="tbl-wo" border="0" align="center">
						<tr>
							<td align="center"><b style="text-transform: uppercase;">Facility Management Services</b></td>
						</tr>
						<tr>
							<td align="center"><b style="text-transform: uppercase;">IIUM MEDICAL CENTRE</b></td>
						</tr>
						<tr>
							<td align="center"><b style="text-transform: uppercase;">COMPLAINT Work ORDER</b></td>
						</tr>
					</table>
				</td>
				<td style="padding-left:0px; width:120px;" align="center"><img src="<?php echo base_url(); ?>images/logo.png" style="width:100px; height:40px;"/></td>
			</tr>
		</table>
		<table class="tbl-wo" border="0" align="center" style="font-weight:bold;">
			<tr>
				<td style="padding-left:10px; width:15%">SERVICE TYPE : </td>
				<td style="padding-left:10px; width:80px;"><?php if(($this->session->userdata('usersess') == 'FES')){?><div class="box2"><img src="<?php echo base_url(); ?>images/tick2.png" class="img-tick"/></div><?php } else { ?><div class="box2"><?php } ?></div> FES </td>
				<td style="padding-left:10px; width:80px;"><?php if(($this->session->userdata('usersess') == 'BES')){?><div class="box2"><img src="<?php echo base_url(); ?>images/tick2.png" class="img-tick"/></div><?php } else { ?><div class="box2"><?php } ?></div> BES </td>
				<td style="padding-left:10px; width:80px;"><?php if(($this->session->userdata('usersess') == 'HKS')){?><div class="box2"><img src="<?php echo base_url(); ?>images/tick2.png" class="img-tick"/></div><?php } else { ?><div class="box2"><?php } ?></div> HKS </td>
				<td style="padding-left:10px; width:200px;"> OTHERS : .............................. </td>
				<td style="padding-left:10px; width:200px;"> Date :  <?= date("d/m/Y", strtotime(isset($woinfo[0]->d_ComplaintDt) == TRUE ? $woinfo[0]->d_ComplaintDt : 'N/A'))?></td>
			</tr>
			<tr>
				<td style="padding-left:10px; width:100px;"" colspan="6">COMPLAINT NO : <?= ($wrk_ord) ? $wrk_ord : 'NA' ?> </td>
			</tr>
		</table>
		<!--<table class="tbl-wo" border="0" align="center">
			<tr>
				<td width="33.5%"><span style="font-weight:bold;">Complaint</span></td>
				<td colspan="" width="50%"><span style="float:right; font-weight:bold;"> Complaint No :</span></td>
				<td width="1%" style="font-weight:bold;"><span style="color:blue;"><?= ($wrk_ord) ? $wrk_ord : 'NA' ?></span></td>
			</tr>
		</table>-->
		<table class="tbl-wo" border="1" align="center" style="border: 1px solid black;">
			<tr>
				<td style="width:50%; padding:5px;" valign="top"> 
					<table class="tbl-wo-1" border="0" align="left">
						<!--<tr>
							<td class="tbl-wo-data">Service Type </td>
							<td>: <span style="color:blue;"><?= ($woinfo[0]->v_ServiceCode) ? $woinfo[0]->v_ServiceCode : 'NA' ?></span></td>
						</tr>-->
						<tr>
							<td class="tbl-wo-data">Requestor</td>
							<td>: <span style="color:blue;"><?= ($woinfo[0]->v_requestor) ? $woinfo[0]->v_requestor: 'NA' ?></span></td>
						</tr>
						<tr>
							<td class="tbl-wo-data">Designation</td>
							<td>: <span style="color:blue;"><?= ($woinfo[0]->v_Designation) ? $woinfo[0]->v_Designation : 'NA' ?></span></td>
						</tr>
						<tr>
							<td class="tbl-wo-data">Department</td>
							<td>: <span style="color:blue;"><?= ($woinfo[0]->v_UserDeptDesc) ? $woinfo[0]->v_UserDeptDesc : 'NA' ?></span></td>
						</tr>
						<!--<tr>
							<td class="tbl-wo-data">Location</td>
							<td >: <span style="color:blue;"><?= ($woinfo[0]->v_location_name) ? $woinfo[0]->v_location_name : 'NA' ?></span></td>
						</tr>-->
						<tr>
							<td class="tbl-wo-data">Dept. Code </td>
							<td><span style="color:blue;">: <?= ($woinfo[0]->v_UserDeptCode) ? $woinfo[0]->v_UserDeptCode : 'NA' ?></span></td>
						</tr>
						<tr>
							<td class="tbl-wo-data">Room Code </td>
							<td><span style="color:blue;">: <?= ($woinfo[0]->v_Location) ? $woinfo[0]->v_Location : 'NA' ?> (<?= ($woinfo[0]->v_Location_Name) ? $woinfo[0]->v_Location_Name : 'NA' ?>) </span></td>
						</tr>
						<tr>
							<td style="width:;">Ext. No</td>
							<td style="width:;">: <span style="color:blue;"><?= ($woinfo[0]->v_Phone) ? $woinfo[0]->v_Phone : 'NA' ?></span></td>
						</tr>
					</table>
				</td>
				<td style="width:50%; padding:5px;" valign="top">
					<table class="tbl-wo-1" border="0" align="left">
						<tr>
							<td width="15%">Taken By </td>
							<td>: <span style="color:blue;"></span></td>
						</tr>
						<tr>
							<td width="15%">Date</td>
							<td>: <span style="color:blue;"></span></td>
						</tr>
						<tr>
							<td width="15%">Time </td>
							<td >: <span style="color:blue;"></span></td>
						</tr>
						<tr>
							<td width="15%">Complaint Type </td>
							<td>
								<span style="color:blue;">: </span>
								<div class="box2" style="margin-left:4px;"></div> Schedule Work 
								<div class="box2" style="margin-left:20px;"></div> Unscheduled Work </br>
								<div class="box2" style="margin-left:10px;"></div> Others : .....................</td>
						</tr>
						<tr>
							<td width="15%">Ref. No </td>
							<td><span style="color:blue;">: </span>..........................................................................</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td style="width:100%; padding:5px;" colspan="2"> 
					<table class="tbl-wo" border="0" align="left">
						<tr>
							<td width="151px" height="10px" valign="top">Complaint Description : </td>
							<?php if($woinfo[0]->v_ComplaintDesc == 'N/A'){?>
							<td> <hr class='dotted' style="margin:15px 10px 10px 5px;" /></td>
						</tr>
						<tr>
							<td width="151px" height="10px" valign="top"></td>
							<td>
								<hr class='dotted' style="margin:5px 10px 10px 5px;" />
							</td>
						</tr>
						<?php }else{ ?>
							<td style="padding:5px 5px 5px 5px;">
								<p style="border-bottom: 1px dotted black; margin-left: 5px; margin-right: 5px;">
									<span style="color:blue;"><?= ($woinfo[0]->v_ComplaintDesc) ? $woinfo[0]->v_ComplaintDesc : 'NA' ?></span>
								</p>
								<p style="border-bottom: 1px dotted black; margin-left: 5px; margin-right: 5px;"></p>
							</td>
						</tr>
						<?php } ?>							
					</table>
				</td>
			</tr>
		</table>
		<table class="tbl-wo-1" border="0" align="center">
			<tr>
				<td align="center">&nbsp;</td>
			</tr>
		</table>
		<table class="tbl-wo" border="0" align="center" style="background-color:black; color:white;">
			<tr>
				<td align="center"><span style="font-weight:bold;">COMPLAINT FINDINGS</span></td>
			</tr>
		</table>
		<table class="tbl-wo" border="0" align="center" style="border: 1px solid black;">
			<tr>
				<td style="padding-left:10px;padding-top:10px;"> Assigned To <span style="float: right;">:</span></td>
				<td width="35%"></td>
				<td width="50%"></td>
			</tr>
			<tr>
				<td style="padding-left:10px;padding-top:10px;"> Date <span style="float: right;">:</span></td>
				<td width="35%"></td>
				<td width="50%">
					<table class="tbl-wo">
						<tr>
							<td style="padding-left:10px;padding-top:10px;"> Time <span style="float: right;">:</span></td>
							<td width="35%"></td>
							<td width="50%"></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td style="padding-left:10px;padding-top:10px;"> Details <span style="float: right;">:</span></td>
				<td width="35%"></td>
				<td width="50%"></td>
			</tr>
		</table>
		<table class="tbl-wo-1" border="0" align="center">
			<tr>
				<td align="center">&nbsp;</td>
			</tr>
		</table>
		<table class="tbl-wo" border="0" align="center" style="background-color:black; color:white;">
			<tr>
				<td align="center"><span style="font-weight:bold;">ROOT CAUSE</span></td>
			</tr>
		</table>
		<table class="tbl-wo" border="1" style="border: 1px solid;">
			<tr>
			    <td style="height:70px; padding:5px;" colspan="" valign="top">Details:</td>
			</tr>
		</table>
		<table class="tbl-wo-1" border="0" align="center">
			<tr>
				<td align="center">&nbsp;</td>
			</tr>
		</table>
		<table class="tbl-wo" border="0" align="center" style="background-color:black; color:white;">
			<tr>
				<td align="center"><span style="font-weight:bold;">CORRECTIVE ACTION</span></td>
			</tr>
		</table>
		<table class="tbl-wo" border="1" style="border: 1px solid;">
			<tr>
			    <td style="" colspan="2" valign="top">
			    	<table class="tbl-wo" border="0" align="left" style="width:100%;">
						<tr>
							<td height="110px" valign="top" style="padding:5px;" colspan="2"> Detail </td>
						</tr>
						<tr>
						<td valign="top" style="height:55px; width:17%; padding:5px;" align="left"> Action taken by :</td>
						<td style="width:35.5%; padding-right:50px;" align="center">
						<hr class='dotted' style="width:100%;"/>(Name & Signature) </td>
							<td valign="top" style="width:51.5%; padding:5px;">Date & Time: </td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table class="tbl-wo-1" border="0" align="center">
			<tr>
				<td align="center">&nbsp;</td>
			</tr>
		</table>
		<table class="tbl-wo" border="0" align="center" style="background-color:black; color:white;">
			<tr>
				<td align="center"><span style="font-weight:bold;">PREVENTIVE ACTION</span></td>
			</tr>
		</table>
		<table class="tbl-wo" border="1" style="border: 1px solid;">
			<tr>
			    <td style="" colspan="2" valign="top">
			    	<table class="tbl-wo" border="0" align="left" style="width:100%;">
						<tr>
							<td height="110px" valign="top" style="padding:5px;" colspan="2"> Detail </td>
						</tr>
						<tr>
						<td valign="top" style="height:55px; width:17%; padding:5px;" align="left"> Action taken by :</td>
						<td style="width:35.5%; padding-right:50px;" align="center">
						<hr class='dotted' style="width:100%;"/>(Name & Signature) </td>
							<td valign="top" style="width:51.5%; padding:5px;">Date & Time: </td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table class="tbl-wo-1" border="0" align="center">
			<tr>
				<td align="center">&nbsp;</td>
			</tr>
		</table>
		<table class="tbl-wo" border="0" align="center" style="background-color:black; color:white;">
			<tr>
				<td align="center"><span style="font-weight:bold;">COMPLAINT COMPLETION VALIDATION</span></td>
			</tr>
		</table>
		<table class="tbl-wo" border="1" align="center" style="border: 1px solid black;">
			<tr>
				<td style="width:50%;" align="center" > Acceptance by Customer </td>
				<td style="width:50%;" valign="top" colspan="2" align="center"> For Office Use Only</td>
			</tr>
			<tr>
				<td style="padding:5px;" class="tb-class" colspan="" rowspan="2" valign="top">
					<table class="tbl-wo" border="0" align="left" style="width:100%; height:100%;">
						<tr>
							<td style="width: 20%" valign="top" >Signature <span style="float: right;">:</span></td>
							<td width="80%"></td>
						</tr>
						<tr>
							<td style="width: 20%" valign="top">Name <span style="float: right;">:</span></td>
							<td width="80%"></td>
						</tr>
						<tr>
							<td style="width: 20%" valign="top">Designation <span style="float: right;">:</span></td>
							<td width="80%"></td>
						</tr>
						<tr>
							<td style="width: 20%" valign="bottom">Date <span style="float: right;">:</span></td>
							<td width="80%"></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td style="padding:5px;" class="tb-class" colspan="2">
					<table class="tbl-wo" border="0" align="left" style="width:100%; height:100%;">
						<tr>
							<td style="width: 20%" valign="top" >Signature <span style="float: right;">:</span></td>
							<td width="80%"></td>
						</tr>
						<tr>
							<td style="width: 20%" valign="top">Name <span style="float: right;">:</span></td>
							<td width="80%"></td>
						</tr>
						<tr>
							<td style="width: 20%" valign="top">Designation <span style="float: right;">:</span></td>
							<td width="80%"></td>
						</tr>
						<tr>
							<td style="width: 20%" valign="bottom">Date <span style="float: right;">:</span></td>
							<td width="80%"></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<table class="tbl-wo" border="0" align="">
			<tr>
				<td style="" valign="top"><span style="font-size:7px; padding-left:30px;"><i>Note: Tick (<span align="center" class="icon-check" style="font-size:7px;"></span>) where applicable.</i></span></td>
			</tr>
			<tr>
				<td style="" valign="top"><span style="font-size:7px; padding-left:30px;"><i>*Date and Time declared by APSB shall be deemed valid if NOT provided by the customer.</i></span></td>
			</tr>
			<tr>
				<td style="" valign="top"><span style="font-size:7px; padding-left:30px;"><i></i></span></td>
				<td style="" valign="top" align="right"><span style="font-size:7px; padding-left:30px;"><i>Copyright product of Advance Pact Sdn Bhd. All Right Reserveed.</i></span></td>
			</tr>
			<tr>
				<td style="" valign="top"><span style="font-size:7px; padding-left:0px;">APSB-FORM</span></td>
				<td style="" valign="top" align="right"><span style="font-size:7px; padding-left:30px;">QP-053 : BFHF-005 : Revision 2.0 : 09 May 2018</span></td>
			</tr>
		</table>
	</div>
	<div class="StartNewPage" id="breakpage"><span id="pagebreak">Page Break</span></div>
	</body>
</html>

