<?php echo form_open('contentcontroller/desknew');?>
							<script>
							
								/*setTimeout(function(){
  								window.location.href = 'http://localhost/tutorial/FEMSHospital_v3/index.php/LoginController/logout?continue=http://localhost/tutorial/FEMSHospital_v3/index.php/contentcontroller/desknew/','logout?continue='.current_url();
								},(160000))
								*/
								
							</script>	
<div class="ui-middle-screen">
	<div class="content-workorder" style="padding-bottom:4%;">
		<table class="ui-content-middle-menu-workorder" border="0" height="100%" width="90%" align="center" style="font-size:16px;">
			<tr class="ui-color-style-2" style="height:40px;">
				<td align="center" colspan="4" style="border-top-left-radius:10px; border-top-right-radius:10px;"><h4 style="margin-bottom:-0px;">New Complaint</h4></td>
			</tr>
			
			<form>
				<?php $RN="RQ/A4/B01714/14";
				echo form_hidden('RN');?>
				
				<tr class="ui-color-contents-style-1">
					<td style="padding-left:10px; padding-bottom:20px; padding-top:10px;" colspan="4">Complaint number will be automatically generated by the system. 
						</td>
				</tr>
				<tr>
				<td style="padding-left:10px; padding-bottom:20px; padding-top:10px;" colspan="4"><span style="color:red;"><?php echo validation_errors(); ?> 
					
				</span></td>
				
				</tr>
				<tr class="ui-color-contents-style-1">
					<td style="padding-left:0px; margin-top:-2px;" width="50%" colspan="2" valign="top">
						<table width="98%" class="ui-content-middle-menu-workorder" style="">
							<tr class="ui-color-contents-style-1" height="30px">
								<td colspan="2" class="ui-header-new"><b>Details</b></td>
							</tr>
							<tr >
								<td class="ui-desk-style-table">
									<table class="ui-content-form" width="100%" border="0">
										<tr>
											<td style="padding-left:10px;" width="50%">*Requested By :</td>
											<td style="padding-left:10px;" width="50%"><input type="text" name="n_requested_by" value=""></td>
										</tr>
										<tr>
											<td style="padding-left:10px;">*Complaint Date : </td>
											<td style="padding-left:10px;"><input type="date" name="n_complaint_date" value=""></td>
										</tr>
										<tr>
											<td style="padding-left:10px;">*Complaint Time :</td>
											<td style="padding-left:10px;"><input type="time" name="n_complaint_time" value="15:00"></td>
										</tr>
										<tr>
											<td style="padding-left:10px;" valign="top">*Designation : </td>
											<td style="padding-left:10px;" valign="top">	
												<input type="radio" name="n_designation" value="Doctor">Doctor<br>
												<input type="radio" name="n_designation" value="Matron">Matron<br>
												<input type="radio" name="n_designation" value="MedicalAssistant">Medical Assistant<br>
												<input type="radio" name="n_designation" value="Officer">Officer<br>
												<input type="radio" name="n_designation" value="PMSB">PMSB<br>
												<input type="radio" name="n_designation" value="Sister In-Charge">Sister In-Charge<br>
												<input type="radio" name="n_designation" value="Sister On Duty">Sister On Duty<br>
												<input type="radio" name="n_designation" value="Specialist">Specialist<br>
												<input type="radio" name="n_designation" value="Staff Nurse">Staff Nurse<br>
												<input type="radio" name="n_designation" value="Supervisor">Supervisor<br>
											</td>
										</tr>
										<tr>
											<td style="padding-left:10px;" valign="top">*Priority :  </td>
											<td style="padding-left:10px;" valign="top">	
												<input type="radio" name="n_priority" value="Normal" checked="checked" >Normal<br>
												<input type="radio" name="n_priority" value="Emergency" ><span style="color:red;">Emergency</span><br>
											</td>
										</tr>
										<tr>
											<td style="padding-left:10px;" valign="top">*Source :  </td>
											<td style="padding-left:10px;" valign="top">	
												<input type="radio" name="n_source" value="MOH" checked="checked" <?php echo set_radio('V_request_type', 'MOH'); ?>>MOH<br>
												<input type="radio" name="n_source" value="SIHAT" <?php echo set_radio('V_request_type', 'SIHAT'); ?>>SIHAT<br>
											</td>
										</tr>
										<tr>
											<td style="padding-left:10px;" valign="top">NCR No : </td>
										</tr>
										<tr>
											<td style="padding-left:10px;" valign="top">VCM Month :  </td>
										</tr>
										<tr>
											<td style="padding-left:10px;" valign="top">VCM Year :   </td>
										</tr>	
										<tr>
											<td style="padding-left:10px;" valign="top">*Summary : </td>
											<td style="padding-left:10px;"><textarea class="InputText" name="n_summary" cols="22" rows="7"></textarea></td>
										</tr>	
										<tr>
											<td style="padding-left:10px;" valign="top">*Description : </td>
											<td style="padding-left:10px;"><textarea class="InputText" name="n_description" cols="22" rows="7"></textarea></td>
										</tr>																																						
									</table>
								</td>
							</tr>
							<tr class="ui-color-contents-style-1">
								<td height="10px" colspan="4">&nbsp;</td>
							</tr>
							<tr class="ui-color-contents-style-1">
								<td style="padding-left:0px; margin-top:-2px;" width="100%" colspan="4" valign="top">
									<table width="99%" class="ui-content-middle-menu-workorder" style="">
										<tr style="color:white;" height="30px">
											<td colspan="2" class="ui-header-new"><b>Follow Up Information</b></td>
										</tr>
										<tr >
											<td class="ui-desk-style-table">
												<table class="ui-content-form" style="color:black;" width="100%" border="0">
													<tr>
														<td style="padding-left:10px;" width="50%">*Personnel Code :   </td>
														<td style="padding-left:10px;" width="50%"><input type="text" name="V_User_dept_code" value=""></td>
													</tr>
													<tr>
														<td style="padding-left:10px;">*Personnel Name :   </td>
														<td style="padding-left:10px;"><input type="text" name="V_respon" value=""></td>
													</tr>
													<tr>
														<td style="padding-left:10px;">Designation :  </td>
														<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
													</tr>
													<tr>
														<td style="padding-left:10px;">*Start Date : </td>
														<td style="padding-left:10px;"><input type="date" name="startdate" value=""></td>
													</tr>
													<tr>
														<td style="padding-left:10px;">*End Date :   </td>
														<td style="padding-left:10px;"><input type="date" name="enddate" value=""></td>
													</tr>	
													<tr>
														<td style="padding-left:10px;">*End Time :   </td>
														<td style="padding-left:10px;"><input type="time" name="endtime" value=""></td>
													</tr>
													<tr>
														<td style="padding-left:10px;">Action Taken :  </td>
														<td style="padding-left:10px;"><textarea class="InputText" name="" cols="22" rows="7"></textarea></td>
													</tr>																																																																	
												</table>
											</td>
										</tr>						
									</table>
								</td>			
							</tr>
						</table>
					</td>
					<td style="padding-left:0px; margin-top:-2px;" width="50%" colspan="2" valign="top">
						<table width="98%" class="ui-content-middle-menu-workorder" style="">
							<tr class="ui-color-contents-style-1" height="30px">
								<td colspan="2" class="ui-header-new"><b>Details of Related Request</b></td>
							</tr>
							<tr >
								<td class="ui-desk-style-table">
									<table class="ui-content-form" width="100%" border="0">
										<tr>
											<td style="padding-left:10px;" width="25%">Request Number : </td>
											<td style="padding-left:10px;" width="25%"><input type="text" name="FirstName" value=""></td>
										</tr>
										<tr>
											<td style="padding-left:10px;">Request Status :  </td>
											<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
										</tr>
										<tr>
											<td style="padding-left:10px;">Requested By : </td>
											<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
										</tr>
										<tr>
											<td style="padding-left:10px;">Requested Date : </td>
											<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
										</tr>
										<tr>
											<td style="padding-left:10px;">Priority : </td>
											<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
										</tr>
										<tr>
											<td style="padding-left:10px;" valign="top">Summary : </td>
											<td style="padding-left:10px;"><textarea class="InputText" name="" cols="22" rows="7"></textarea></td>
										</tr>
										<tr>
											<td style="padding-left:10px;">Asset Tag Number : </td>
											<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
										</tr>
										<tr>
											<td style="padding-left:10px;">*Asset Number :  </td>
											<td style="padding-left:10px;"><input type="text" name="asset_no" value=""></td>
										</tr>
										<tr>
											<td style="padding-left:10px;">Asset Serial Number : </td>
											<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
										</tr>
										<tr>
											<td style="padding-left:10px;">Phone Number : </td>
											<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
										</tr>
										<tr>
											<td style="padding-left:10px;">User Department : </td>
											<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
										</tr>	
										<tr>
											<td style="padding-left:10px;">Location :  </td>
											<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
										</tr>	
										<tr>
											<td style="padding-left:10px;">Request Closed On : </td>
											<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
										</tr>																																								
									</table>
								</td>
							</tr>
							<tr class="ui-color-contents-style-1">
								<td height="10px" colspan="4">&nbsp;</td>
							</tr>
							<tr style="color:black;">
								<td style="padding-left:0px; margin-top:-2px;" width="100%" colspan="4" valign="top">
									<table width="99%" class="ui-content-middle-menu-workorder" style="">
										<tr class="ui-color-contents-style-1" height="30px">
											<td colspan="2" class="ui-header-new"><b>Location</b></td>
										</tr>
										<tr >
											<td class="ui-desk-style-table" style="padding-bottom: 8px;">
												<table class="ui-content-form" width="100%" border="0">
													<tr>
														<td style="padding-left:10px;" width="25%">Phone Number :  </td>
														<td style="padding-left:10px;" width="25%"><input type="text" name="FirstName" value=""></td>
													</tr>
													<tr>
														<td style="padding-left:10px;">User Department :   </td>
														<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
													</tr>
													<tr>
														<td style="padding-left:10px;">&nbsp; </td>
														<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
													</tr>
													<tr>
														<td style="padding-left:10px;">Location : </td>
														<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
													</tr>
													<tr>
														<td style="padding-left:10px;">&nbsp; </td>
														<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
													</tr>																																					
												</table>
											</td>
										</tr>						
									</table>
								</td>			
							</tr>
							<tr class="ui-color-contents-style-1">
								<td height="10px" colspan="4">&nbsp;</td>
							</tr>
							<tr class="ui-color-contents-style-1">
								<td style="padding-left:0px; margin-top:-2px;" width="100%" colspan="4" valign="top">
									<table width="99%" class="ui-content-middle-menu-workorder" style="">
										<tr style="color:white;" height="30px">
											<td colspan="2" class="ui-header-new"><b>Related Asset</b></td>
										</tr>
										<tr >
											<td class="ui-desk-style-table">
												<table class="ui-content-form" width="100%" border="0">
													<tr>
														<td style="padding-left:10px;" width="25%">Asset Tag Number :  </td>
														<td style="padding-left:10px;" width="25%"><input type="text" name="FirstName" value=""></td>
													</tr>
													<tr>
														<td style="padding-left:10px;">Asset Number :    </td>
														<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
													</tr>
													<tr>
														<td style="padding-left:10px;">Asset Serial Number : </td>
														<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
													</tr>
													<tr>
														<td style="padding-left:10px;">Warranty Expiry Date : </td>
														<td style="padding-left:10px;"><input type="text" name="FirstName" value=""></td>
													</tr>																																					
												</table>
											</td>
										</tr>						
									</table>
								</td>			
							</tr>
							<tr class="ui-color-contents-style-1">
								<td height="10px" colspan="4">&nbsp;</td>
							</tr>
							<tr class="ui-color-contents-style-1">
								<td style="padding-left:0px; margin-top:-2px;" width="100%" colspan="4" valign="top">
									<table width="99%" class="ui-content-middle-menu-workorder" style="">
										<tr style="color:white;" height="30px">
											<td colspan="2" class="ui-header-new"><b>Closing</b></td>
										</tr>
										<tr >
											<td class="ui-desk-style-table">
												<table class="ui-content-form" width="100%" border="0">
													<tr>
														<td style="padding-left:10px;" width="25%">Close Date :    </td>
														<td style="padding-left:10px;" width="25%"><input type="text" name="FirstName" value=""></td>
													</tr>																																																													
												</table>
											</td>
										</tr>						
									</table>
								</td>			
							</tr>					
						</table>
					</td>				
				</tr>
			
			<tr class="ui-color-contents-style-1">
				<td height="10px" colspan="4">&nbsp;</td>
			</tr>
			<tr class="ui-color-style-2" style="height:40px;">
				<td align="center" colspan="4" style="border-bottom-left-radius:10px; border-bottom-right-radius:10px;">
					<input type="submit" class="btn-button" name="mysubmit" value="Submit Post!" />
					<button type="button">Save</button><button type="button">Clear</button></td>
			</tr>
		</table>	
	</div>
	</form>
</div>
</body>
</html>
<?php echo form_close(); ?>