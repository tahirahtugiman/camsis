<div class="ui-middle-screen">
	<div class="content-workorder">
		<div class="div-p">&nbsp;</div>
		<div class="ui-main-form">
		<?php include 'content_follow_tab.php';?>			
			<div class="ui-main-form-5">
				<div class="middle_d2">
					<table width="100%" class="ui-content-form-reg" style="background:white;">
						<tr class="ui-color-contents-style-1" height="30px">
							<td colspan="2" class="ui-header-new">
							<span class="textmenu" style="float:left;">
							<?php if ($this->input->get('tab') == 0){ ?> <b> Shipment </b> One
							<?php }elseif($this->input->get('tab') == 1){ ?> <b> Shipment </b> Two <span style="display:iniline-block; font-size:12px; color:red;">You may not update this section until you have filled in SHIPMENT / INVOICE & DO 1 information.</span>
							<?php }elseif($this->input->get('tab') == 2){ ?><b>Shipment </b> Three <span style="display:iniline-block; font-size:12px; color:red;">You may not update this section until you have filled in SHIPMENT / INVOICE & DO 2 information.</span>
							<?php }elseif($this->input->get('tab') == 3){ ?><b>Payment </b><span style="display:iniline-block; font-size:12px; color:red;"> You may not update this section until you have filled in SHIPMENT / INVOICE & DO information</span>
							<?php } ?></span>
							<span class="textmenu1" style="float:right;padding-top:0px;">
							<?php echo anchor ('Procurement/po_follow_up2?pr='.$this->input->get('pr').'&po=update&tab='.$this->input->get('tab'), '<button type="button" class="btn-button btn-primary-button">Update</button>'); ?>
							</span>
							</td>
						</tr>
						<tr >
							<td class="ui-desk-style-table">
								<div class="ui-main-form-1">
									<div class="middle_d">
										<table width="100%" class="ui-content-form-reg" style="">
											<tr >
												<td class="ui-desk-style-table">
													<table class="ui-content-form" width="100%" border="0">
														<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">SHIPMENT</td></tr>													
														<tr>
															<td class="td-assest" style="width:40%;">PARTS (RM)/UNIT</td>
															<td></td>
														</tr>
														<tr>
															<td class="td-assest">LABOUR (RM) :</td>
															<td></td>
														</tr>
														<tr>
															<td class="td-assest">CENTRAL STORE (RM) :</td>
															<td></td>
														</tr>
														<tr>
															<td class="td-assest">COST (RM) :</td>
															<td></td>
														</tr>
														<tr>
															<td class="td-assest">GST (6%) (RM) :</td>
															<td></td>
														</tr>
														<tr>
															<td class="td-assest">STATUS (C/P) :</td>
															<td></a></td>
														</tr>
														<tr>
															<td class="td-assest">RECEIPIENT :</td>
															<td></a></td>
														</tr>
														
														<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">Completed Date</td></tr>
														<tr style="height:20px;">
															<td class="td-assest">Completed Date</td>
															<td></td>
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
															<td></td>
														</tr>
														<tr>
															<td class="td-assest">DO Date :</td>
															<td></td>
														</tr>
														<tr>
															<td class="td-assest">TAX INV / INV :</td>
															<td></td>
														</tr>
														<tr>
															<td class="td-assest">TAX INV / INV Date :</td>
															<td></td>
														</tr>																										
													</table>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</td>
						</tr>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
