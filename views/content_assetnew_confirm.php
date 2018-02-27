<?php echo form_open('asset_ctrl/confirmation_asset');?>
<div class="ui-middle-screen">
	<div class="content-workorder">
		<div class="div-p"></div>
		<div class="ui-main-form">
			<div class="ui-main-form-header">
				<table align="center" height="40px" border="0">
					<tr>
						<td><span style="margin-left:10px;">Confirm Asset</span></td>
					</tr>
				</table>
			</div>
			<div class="n-req">Asset number will be automatically generated by the system.<br> <span style="color:red;"><?php echo validation_errors(); ?></span></div>
			<div class="ui-main-form-1">
				<div class="middle_d">
					<?php $RN="RQ/A4/B01714/14"; echo form_hidden('RN');?>
					<table width="100%" class="ui-content-form-reg" style="">
						<tr class="ui-color-contents-style-1" height="30px">
							<td colspan="2" class="ui-header-new"><b>Asset Details</b></td>
						</tr>
						<tr >
							<td class="ui-desk-style-table">
								<table class="ui-content-form" width="100%" border="0">
									<tr>
										<td style="padding-left:10px;" width="40%" valign="top">*Equipment Code : </td>
										<td style="padding-left:10px;" width="60%"><input type="text" name="n_equipment_code" value="<?php echo $this->input->post('n_equipment_code');?>" class="form-control-button" disabled><br /><input type="text" name="n_equipment_code2" value="<?php echo set_value('n_equipment_code2'); ?>" class="form-control-button" style="margin-top:4px;" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">*Asset Workgroup : </td>
										<td style="padding-left:10px;"><input type="text" name="n_asset_workgroup" value="<?php echo $this->input->post('n_asset_workgroup');?>" class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">*User Department :</td>
										<td style="padding-left:10px;"><input type="text" name="n_user_department" value="<?php echo $this->input->post('n_user_department');?>" class="form-control-button" disabled><br /><input type="text" name="n_user_department1" value="<?php echo set_value('n_user_department1'); ?>" class="form-control-button" style="margin-top:4px;" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">*Location :  </td>
										<td style="padding-left:10px;" valign="top"><input type="text" name="n_location" value="<?php echo $this->input->post('n_location');?>" class="form-control-button" disabled><br /><input type="text" name="n_location2" value="<?php echo set_value('n_location2'); ?>" class="form-control-button" style="margin-top:4px;" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">Asset Tag Number : </td>
										<td style="padding-left:10px;" valign="top">AUTO GENERATED</td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">*Register Date :   </td>
										<td style="padding-left:10px;" valign="top"><input type="text" name="n_register_date" value="<?php echo $this->input->post('n_register_date');?>" class="form-control-button" style="width: 83%" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">Brand : </td>
										<td style="padding-left:10px;" valign="top"><input type="text" name="n_brand" value="<?php echo $this->input->post('n_brand');?>" class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">Manufacturer :   </td>
										<td style="padding-left:10px;" valign="top"><input type="text" name="n_manufacturer" value="<?php echo $this->input->post('n_manufacturer');?>" class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">Model :   </td>
										<td style="padding-left:10px;" valign="top"><input type="text" name="n_model" value="<?php echo $this->input->post('n_model');?>" class="form-control-button" disabled></td>
									</tr>	
									<tr>
										<td style="padding-left:10px;" valign="top">T&C Request Number:   </td>
										<td style="padding-left:10px;" valign="top"><input type="text" name="n_tnc_request" value="<?php echo $this->input->post('n_tnc_request');?>" class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">Serial Number :   </td>
										<td style="padding-left:10px;" valign="top"><input type="text" name="n_serial" value="<?php echo $this->input->post('n_serial');?>" class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">*Remarks :  </td>
										<td style="padding-left:10px;"><textarea class="Input" name="n_remarks"  cols="22" rows="4" disabled><?php echo $this->input->post('n_remarks');?></textarea></td>
									</tr>	
									<tr>
										<td style="padding-left:10px;" valign="top">*Make <br />(Country of Origin) : </td>
										<td style="padding-left:10px;" valign="top"><input type="text" name="n_make" value="<?php echo $this->input->post('n_make');?>" class="form-control-button" disabled/></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">*Chasis No. :    </td>
										<td style="padding-left:10px;"><input type="text" name="n_chasis" value="Not Applicable" disabled class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">*Engine No. :     </td>
										<td style="padding-left:10px;"><input type="text" name="n_engine_no" value="Not Applicable" disabled class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">*Registration No. :    </td>
										<td style="padding-left:10px;"><input type="text" name="n_registration" value="Not Applicable" disabled class="form-control-button" disabled></td>
									</tr>																																						
								</table>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="ui-main-form-2">
				<div class="middle_d">
					<table class="ui-content-form-reg" >
						<tr class="ui-color-contents-style-1" height="30px">
							<td colspan="2" class="ui-header-new"><b>General Information</b></td>
						</tr>
						<tr >
							<td class="ui-desk-style-table">
								<table class="ui-content-form" width="100%" border="0">
									<tr>
										<td style="padding-left:10px;" width="40%" valign="top">Agent : </td>
										<td style="padding-left:10px;" width="60%"><input type="text" name="n_agent" value="<?php echo $this->input->post('n_agent');?>" class="form-control-button" disabled><br /><input type="text" id="n_agent2" name="n_agent2" value="<?php echo set_value('n_agent2'); ?>" class="form-control-button" style="margin-top:4px;" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Supplier :   </td>
										<td style="padding-left:10px;"><input type="text" name="n_supplier" value="<?php echo $this->input->post('n_supplier');?>" class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Cost :  </td>
										<td style="padding-left:10px;">RM&nbsp;&nbsp;<input type="text" name="n_cost" value="<?php echo $this->input->post('n_cost');?>" size="16" class="form-control-button2" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">File Reference :  </td>
										<td style="padding-left:10px;"><input type="text" name="n_file_reference" value="<?php echo $this->input->post('n_file_reference');?>" class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">LPO : </td>
										<td style="padding-left:10px;"><input type="text" name="n_lpo" value="<?php echo $this->input->post('n_lpo');?>" class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">Purchase Date : </td>
										<td style="padding-left:10px;"><input type="text" name="n_purchase_date" value="<?php echo $this->input->post('n_purchase_date');?>" class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Commissionned On: </td>
										<td style="padding-left:10px;"><input type="text" name="n_commissioned_on" value="<?php echo $this->input->post('n_commissioned_on');?>" class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Warranty Expire On :   </td>
										<td style="padding-left:10px;"><input type="text" name="n_warranty" value="<?php echo $this->input->post('n_warranty');?>" class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Technical Report Number : </td>
										<td style="padding-left:10px;" valign="top"><input type="text" name="n_technical_report" value="<?php echo $this->input->post('n_technical_report');?>" class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Capacity : </td>
										<td style="padding-left:10px;"><input type="text" name="n_capacity" value="<?php echo $this->input->post('n_capacity');?>" class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Depreciation :  </td>
										<td style="padding-left:10px;"><input type="text" name="n_depreciation" value="<?php echo $this->input->post('n_depreciation');?>" size="13" class="form-control-button" disabled> years</td>
									</tr>	
									<tr>
										<td style="padding-left:10px;">Life Span :  </td>
										<td style="padding-left:10px;"><input type="text" name="n_life_span" value="<?php echo $this->input->post('n_life_span');?>" size="13" class="form-control-button" disabled> years</td>
									</tr>	
									<tr>
										<td style="padding-left:10px;" valign="top">OP Hours Code :  </td>
										<td style="padding-left:10px;"><input type="text" name="n_op_hours" value="<?php echo $this->input->post('n_op_hours');?>" class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;" valign="top">Job Type Code :   </td>
										<td style="padding-left:10px;"><input type="text" name="n_job_type_code" value="<?php echo $this->input->post('n_job_type_code'); ?>" class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Contract Code :  </td>
										<td style="padding-left:10px;"><input type="text" name="n_contract_code" value="<?php echo $this->input->post('n_contract_code'); ?>" class="form-control-button" disabled>
										</td>
									</tr>
									<tr>
										<td style="padding-left:10px;">User Name :   </td>
										<td style="padding-left:10px;"><input type="text" name="n_user_name" value="<?php echo $this->input->post('n_user_name'); ?>" class="form-control-button" disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Procedure :  </td>
										<td style="padding-left:10px;"><input type="text" name="n_procedure" value="<?php echo $this->input->post('n_procedure'); ?>" class="form-control-button"disabled></td>
									</tr>
									<tr>
										<td style="padding-left:10px;">Manual / Drawing<br />Reference Number : </td>
										
										<td style="padding-left:10px;"><input type="text" name="n_manual_drawing" value="<?php echo set_value('n_manual_drawing'); ?>" class="form-control-button"disabled></td>
									</tr>	
									<tr>
										<td style="padding-left:10px;">Asset Group :</td>
										<td style="padding-left:10px;"><input type="text" name="a_group" value="<?php echo set_value('a_group'); ?>" class="form-control-button"disabled></td>
									</tr>									
								</table>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<table align="center" height="40px" border="0" style="width:100%;" class="ui-main-form-m">
				<tr>
					<td align="center">Update Maintenance Status</td>
				</tr>
			</table>
			<div class="middle_d2">
				<table class="ui-content-form-reg" >
					<tr class="ui-color-contents-style-1" height="30px">
						<td colspan="2" class="ui-header-new"><b>Asset Status</b></td>
					</tr>
					<tr >
						<td class="ui-desk-style-table">
							<table class="ui-content-form" width="100%" border="0">	
								<tr>
									<td valign="top" width="20%">Asset Status :  </td>
									<td><input type="text" style="width: 29%;" name="n_asset_status" value="<?php echo $this->input->post('n_asset_status');?>" class="form-control-button" disabled></td>
								</tr>																																								
							</table>
						</td>
					</tr>
				</table>
			</div>
			<div class="middle_d2">
				<table class="ui-content-form-reg" >
					<tr class="ui-color-contents-style-1" height="30px">
						<td colspan="2" class="ui-header-new"><b>Asset Condition</b></td>
					</tr>
					<tr >
						<td class="ui-desk-style-table">
							<table class="ui-content-form" width="100%" border="0">	
								<tr>
								<?php if (substr($this->input->post('ref_num'), 0, 2) == "C1"){
								$lokasi = 'V1Location';
								} elseif (substr($this->input->post('ref_num'), 0, 2) == "C5"){
								$lokasi = 'V5Location';
								$tarikh_lokasi = 'v5_date';
								} elseif (substr($this->input->post('ref_num'), 0, 2) == "C7"){
								$lokasi = 'V6Location';
								$tarikh_lokasi = 'v6_date';
								} ?>
									<td valign="top" width="20%">Asset Condition :  <?php echo $this->input->post('ref_num'); ?></td>

									<td><input type="text" style="width: 29%;" name="n_asset_condition" value="<?php echo $this->input->post('n_asset_condition');?>" class="form-control-button" disabled>&nbsp;&nbsp;&nbsp;&nbsp;Ref No :</span><input type="text" name="FirstName" value="<?php echo set_value('FirstName'); ?>" size="13" class="form-control-button2" style="margin-top:4px;" disabled><span style="margin-left:20px;">Date :</span><input type="text" name="D_time" value="" class="form-control-button2" style="width: 170px" disabled><br />
									</td>
								</tr>																																								
							</table>
						</td>
					</tr>
				</table>
			</div>
			<div class="middle_d2">
				<table class="ui-content-form-reg" >
					<tr class="ui-color-contents-style-1" height="30px">
						<td colspan="2" class="ui-header-new"><b>Asset Variation</b></td>
					</tr>
					<tr >
						<td class="ui-desk-style-table">
						<?php if (substr($this->input->post('n_variation_status'), 0, 2) == "V1"){
						$lokasi = 'V1Location';
						} elseif (substr($this->input->post('n_variation_status'), 0, 2) == "V5"){
						$lokasi = 'V5Location';
						$tarikh_lokasi = 'v5_date';
						} elseif (substr($this->input->post('n_variation_status'), 0, 2) == "V6"){
						$lokasi = 'V6Location';
						$tarikh_lokasi = 'v6_date';
						} ?>
							<table class="ui-content-form" width="100%" border="0">	
								<tr>
									<td valign="top" width="20%">Variation Status :  </td>
									<td><input type="text" style="width: 29%;" name="n_variation_status" value="<?php echo $this->input->post('n_variation_status');?>" class="form-control-button" disabled>  Location :</span><input type="text" name="v_loc_rmk" value="<?= $this->input->post('lokasi'); ?>" size="13" class="form-control-button2" style="margin-top:4px;" disabled><span style="margin-left:20px;">Date :</span><input type="text" name="D_time" value="<?php echo ($this->input->post('tarikh_lokasi')) ? $this->input->post('tarikh_lokasi') : 0;?>" class="form-control-button2" style="width: 170px" disabled></td>
								</tr>
								<tr>
									<td style="padding-left:10px;" valign="top" width="20%">&nbsp;</td>
									<td colspan="6"><span style="color:red;">The following fields are now mandatory if variation status is other than V1.</span></td>
								</tr>
								<tr>
									<td style="padding-left:10px;" valign="top" width="20%">SNF / VNF Ref No : </td>
									<td colspan="6"><input style="width: 170px" class="form-control-button" type="text" name="n_snfvnf" value="<?php echo $this->input->post('n_snfvnf'); ?>" disabled> <span style="font-size:14px;">Example: <span style="font-weight: bold;">XXX/SNF/VVF/MMMYYYY</span><i>(XXX-hosp code, MMM-month, YYYY-year)</i></span></td>
								</tr>
								<tr>
									<td style="padding-left:10px;" valign="top" width="20%">Submission Date : </td>
									<td colspan="6"><input style="width: 170px" class="form-control-button" type="text" name="n_submission_date" value="<?php echo $this->input->post('n_submission_date'); ?>" disabled> <span style="font-size:14px;"><i>Can be register date or estimate date of VO submission</i></span></td>
									
								</tr>																												
							</table>
						</td>
					</tr>
				</table>
			</div>
			<div class="middle_d2">
				<table class="ui-content-form-reg" >
					<tr class="ui-color-contents-style-1" height="30px">
						<td colspan="2" class="ui-header-new"><b>Asset Class</b></td>
					</tr>
					<tr >
						<td class="ui-desk-style-table">
							<table class="ui-content-form" width="100%" border="0">	
								<tr>
									<td style="padding-left:10px;" valign="top" width="20%">Asset Class :  </td>
									<td style="padding-left:10px;"><input style="width: 170px" class="form-control-button" type="text" name="n_asset_class" value="<?php echo $this->input->post('n_asset_class'); ?>" disabled/></td>
								</tr>																																								
							</table>
						</td>
					</tr>
				</table>
			</div>
			<table align="center" height="40px" border="0" style="width:100%;" class="ui-main-form-footer">
				<tr>
					<td align="center"><input type="submit" class="btn-button btn-primary-button" style="width: 200px;" name="mysubmit" value="Save"></td>
				</tr>
			</table>
			<input type="hidden" name="n_asset_type" id="n_asset_type" value="<?php echo set_value('n_asset_type'); ?>" />
		</div>
	</div>
</div>
</body>
<?php echo form_hidden('n_equipment_code',$this->input->post('n_equipment_code'));?>
<?php echo form_hidden('n_equipment_code',$this->input->post('n_equipment_code'));?>
<?php echo form_hidden('n_asset_workgroup',$this->input->post('n_asset_workgroup'));?>
<?php echo form_hidden('n_user_department',$this->input->post('n_user_department'));?>
<?php echo form_hidden('n_location',$this->input->post('n_location'));?>
<?php echo form_hidden('n_register_date',$this->input->post('n_register_date'));?>
<?php echo form_hidden('n_brand',$this->input->post('n_brand'));?>
<?php echo form_hidden('n_manufacturer',$this->input->post('n_manufacturer'));?>
<?php echo form_hidden('n_model',$this->input->post('n_model'));?>
<?php echo form_hidden('n_request_number',$this->input->post('n_request_number'));?>
<?php echo form_hidden('n_serial',$this->input->post('n_serial'));?>
<?php echo form_hidden('n_tnc_request',$this->input->post('n_tnc_request'));?>
<?php echo form_hidden('n_remarks',$this->input->post('n_remarks'));?>
<?php echo form_hidden('n_make',$this->input->post('n_make'));?>
<?php echo form_hidden('n_chasis_no',$this->input->post('n_chasis_no'));?>
<?php echo form_hidden('n_agent',$this->input->post('n_agent'));?>
<?php echo form_hidden('n_supplier',$this->input->post('n_supplier'));?>
<?php echo form_hidden('n_cost',$this->input->post('n_cost'));?>
<?php echo form_hidden('n_file_reference',$this->input->post('n_file_reference'));?>
<?php echo form_hidden('n_lpo',$this->input->post('n_lpo'));?>
<?php echo form_hidden('n_purchase_date',$this->input->post('n_purchase_date'));?>
<?php echo form_hidden('n_commissioned_on',$this->input->post('n_commissioned_on'));?>
<?php echo form_hidden('n_warranty',$this->input->post('n_warranty'));?>
<?php echo form_hidden('n_technical_report',$this->input->post('n_technical_report'));?>
<?php echo form_hidden('n_capacity',$this->input->post('n_capacity'));?>
<?php echo form_hidden('n_depreciation',$this->input->post('n_depreciation'));?>
<?php echo form_hidden('n_life_span',$this->input->post('n_life_span'));?>
<?php echo form_hidden('n_op_hours',$this->input->post('n_op_hours'));?>
<?php echo form_hidden('n_job_type_code',$this->input->post('n_job_type_code'));?>
<?php echo form_hidden('n_contract_code',$this->input->post('n_contract_code'));?>
<?php echo form_hidden('n_user_name',$this->input->post('n_user_name'));?>
<?php echo form_hidden('n_procedure',$this->input->post('n_procedure'));?>
<?php echo form_hidden('n_manual_drawing',$this->input->post('n_manual_drawing'));?>
<?php echo form_hidden('n_asset_status',$this->input->post('n_asset_status'));?>
<?php echo form_hidden('n_asset_condition',$this->input->post('n_asset_condition'));?>
<?php echo form_hidden('n_snfvnf',$this->input->post('n_snfvnf'));?>
<?php echo form_hidden('n_variation_status',$this->input->post('n_variation_status'));?>
<?php echo form_hidden('n_asset_class',$this->input->post('n_asset_class'));?>
<?php echo form_hidden('n_asset_type',$this->input->post('n_asset_type'));?>
<?php echo form_hidden('a_group',$this->input->post('a_group'));?>
<?php echo form_close(); ?>
</html>