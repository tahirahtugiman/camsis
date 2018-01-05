<?php echo form_open('Procurement/po_follow_up2?pr='.$this->input->get('pr').'&po=confirm&tab='.$this->input->get('tab'));?>
<div class="ui-middle-screen">
	<div class="content-workorder">
		<div class="div-p">&nbsp;</div>
		<div class="ui-main-form-5">
			<table width="100%" class="ui-content-form-reg" style="background:white;">
				<tr class="ui-color-contents-style-1" height="30px">
					<td colspan="2" class="ui-header-new">
					<span class="textmenu" style="float:left;">
					<?php if($this->input->get('po') == 'confirm'){?><b>Confirm</b><?php }?>
					<?php if ($this->input->get('tab') == 0){ ?> <b> Shipment </b> One
					<?php }elseif($this->input->get('tab') == 1){ ?> <b> Shipment </b> Two 
					<?php }elseif($this->input->get('tab') == 2){ ?><b>Shipment </b> Three 
					<?php }elseif($this->input->get('tab') == 3){ ?><b>Payment </b>
					<?php } ?></span>
					</td>
				</tr>
				<tr >
					<td class="ui-desk-style-table">
						<div class="ui-main-form-1">
							<div class="middle_d">
								<table width="100%" class="ui-content-form-reg" style="">
									<tr >
										<td class="ui-desk-style-table">
										<?php $numberdate = 0; ?>
										<?php if($this->input->get('po') == 'confirm'){ $confim = 'disabled';}else{ $confim = ''; }?>
											<table class="ui-content-form" width="100%" border="0">
												<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">SHIPMENT</td></tr>													
												<tr>
													<td class="td-assest" style="width:40%;">PARTS (RM)/UNIT </td>
													<td><input type="text"  name="n_registered_date" value="" class="form-control-button2 n_wi-date2" <?=$confim?>></td>
												</tr>
												<tr>
													<td class="td-assest">LABOUR (RM) :</td>
													<td><input type="text"  name="n_registered_date" value="" class="form-control-button2 n_wi-date2" <?=$confim?>></td>
												</tr>
												<tr>
													<td class="td-assest">CENTRAL STORE (RM) :</td>
													<td><input type="text"  name="n_registered_date" value="" class="form-control-button2 n_wi-date2" <?=$confim?>></td>
												</tr>
												<tr>
													<td class="td-assest">COST (RM) :</td>
													<td><input type="text"  name="n_registered_date" value="" class="form-control-button2 n_wi-date2" <?=$confim?>></td>
												</tr>
												<tr>
													<td class="td-assest">GST (6%) (RM) :</td>
													<td><input type="text"  name="n_registered_date" value="" class="form-control-button2 n_wi-date2" <?=$confim?>></td>
												</tr>
												<tr>
													<td class="td-assest">STATUS (C/P) :</td>
													<td>
													<?php 
													$status_list = array(
													'0' => '',
															  '1' => 'C',
															  '2' => 'P',
												
														   );
													 ?>   
														<?php echo form_dropdown('n_status_list', $status_list ,'', 'class="dropdown n_wi-date2"'.$confim.''); ?> 
													</td>
												</tr>
												<tr>
													<td class="td-assest" valign="top">RECEIPIENT :</td>
													<td>
													<input type="text"  name="n_registered_date" value="" class="form-control-button2 n_wi-date<?php if($this->input->get('po') == 'confirm'){?>2<?php }?>" id="code" readonly>
													<?php if($this->input->get('po') != 'confirm'){?>
													<span class="icon-windows" onclick="fCalldetailname(this)" value="update"></span><br/>
													<?php }?>
													<input type="text"  name="n_registered_date" value="" class="form-control-button2 n_wi-date2" id="code2" style="border:none;" readonly></td>
												</tr>
												
												<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">Completed Date</td></tr>
												<tr style="height:20px;">
													<td class="td-assest">Completed Date</td>
													<td><input type="text"  name="n_registered_date" value="" class="form-control-button2 n_wi-date2" id="date<?php echo $numberdate++; ?>" <?=$confim?>></td>
												</tr>																												
											</table>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="ui-main-form-2">
							<div class="middle_d">
								<table width="100%" class="ui-content-form-reg" style="">
									<tr >
										<td class="ui-desk-style-table">
											<table class="ui-content-form" width="100%" border="0">
												<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">INVOICE & DO</td></tr>													
												<tr>
													<td class="td-assest" style="width:40%;">DO :</td>
													<td><input type="text"  name="n_registered_date" value="" class="form-control-button2 n_wi-date2" <?=$confim?>></td>
												</tr>
												<tr>
													<td class="td-assest">DO Date :</td>
													<td><input type="text"  name="n_registered_date" value="" class="form-control-button2 n_wi-date2" id="date<?php echo $numberdate++; ?>" <?=$confim?>></td>
												</tr>
												<tr>
													<td class="td-assest">TAX INV / INV :</td>
													<td><input type="text"  name="n_registered_date" value="" class="form-control-button2 n_wi-date2" <?=$confim?>></td>
												</tr>
												<tr>
													<td class="td-assest">TAX INV / INV Date :</td>
													<td><input type="text"  name="n_registered_date" value="" class="form-control-button2 n_wi-date2" id="date<?php echo $numberdate++; ?>" <?=$confim?>></td>
												</tr>																										
											</table>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</td>
				</tr>
				<tr class="ui-color-contents-style-1" height="30px">
					<td colspan="2" class="ui-header-new" align="center">
					<input type="submit" class="btn-button btn-primary-button" name="mysubmit" value="Save" style="width:150px;"/>
                    <input type="button" class="btn-button btn-primary-button" name="Cancel" value="Cancel" onclick="window.history.back()" style="width:150px;"/>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</form>
<?php include 'content_jv_popup.php';?>
</body>
</html>
