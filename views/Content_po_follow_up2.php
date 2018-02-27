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
							<?php }elseif($this->input->get('tab') == 1){ ?> <b> Shipment </b> Two <span style="display:iniline-block; font-size:12px; color:red;"><?php  if (!($chk)){?>You may not update this section until you have filled in SHIPMENT / INVOICE & DO 1 information.<?php } ?></span>
							<?php }elseif($this->input->get('tab') == 2){ ?><b>Shipment </b> Three <span style="display:iniline-block; font-size:12px; color:red;"><?php  if (!($chk)){?>You may not update this section until you have filled in SHIPMENT / INVOICE & DO 2 information.<?php } ?></span>
							<?php }elseif($this->input->get('tab') == 3){ ?><b>Payment </b><span style="display:iniline-block; font-size:12px; color:red;"><?php  if (!($chk)){?> You may not update this section until you have filled in SHIPMENT / INVOICE & DO information<?php } ?></span>
							<?php } ?></span>
							<span class="textmenu1" style="float:right;padding-top:0px;">
							<?php if ($chk){
							echo anchor ('Procurement/po_follow_up2?po='.$this->input->get('po').'&powhat=update&tab='.$whattab, '<button type="button" class="btn-button btn-primary-button">Update</button>'); 
							}?>
							</span>
							</td>
						</tr>
						<tr >
						<?php if ($this->input->get('tab') != 3){ ?>
							<td class="ui-desk-style-table">
								<div class="ui-main-form-1">
									<div class="middle_d">
										<table width="100%" class="ui-content-form-reg" style="">
											<tr >
												<td class="ui-desk-style-table">
													<table class="ui-content-form" width="100%" border="0">
														<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">SHIPMENT</td></tr>													
														<!--<tr>
															<td class="td-assest" style="width:40%;">PARTS (RM)/UNIT :</td>
															<td><?=isset($pofollow[0]->parts_rm) ? $pofollow[0]->parts_rm : ''?></td>
														</tr>
														<tr>
															<td class="td-assest">LABOUR (RM) :</td>
															<td><?=isset($pofollow[0]->labor_rm) ? $pofollow[0]->labor_rm : ''?></td>
														</tr>
														<tr>
															<td class="td-assest">CENTRAL STORE (RM) :</td>
															<td><?=isset($pofollow[0]->cs_rm) ? $pofollow[0]->cs_rm : ''?></td>
														</tr>-->
														<tr>
															<td class="td-assest">COST (RM) :</td>
															<td><?=isset($pofollow[0]->cost_rm) ? $pofollow[0]->cost_rm : ''?></td>
														</tr>
														<tr>
															<td class="td-assest">GST (6%) (RM) :</td>
															<td><?=isset($pofollow[0]->gst_rm) ? $pofollow[0]->gst_rm : ''?></td>
														</tr>
														<tr>
															<td class="td-assest">TOTAL INC GST (RM) :</td>
															<td><?=isset($pofollow[0]->totalcost) ? $pofollow[0]->totalcost : ''?></td>
														</tr>
														<tr>
															<td class="td-assest">STATUS (C/P) :</td>
															<td><?=isset($pofollow[0]->status_set) ? $pofollow[0]->status_set : ''?></td>
														</tr>
														<tr>
															<td class="td-assest">RECEIPIENT :</td>
															<td><?=isset($pofollow[0]->recipient_code) ? $pofollow[0]->recipient_code : ''?></a></td>
														</tr>
														
														<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">FINANCE SUBMISSION Date</td></tr>
														<tr style="height:20px;">
															<td class="td-assest">FINANCE SUBMISSION Date</td>
															<td><?=isset($pofollow[0]->Date_Completed) ? date("d-m-Y",strtotime($pofollow[0]->Date_Completed)) : ''?></td>
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
															<td><?=isset($pofollow[0]->do_no) ? $pofollow[0]->do_no : ''?></td>
														</tr>
														<tr>
															<td class="td-assest">DO Date :</td>
															<td><?=isset($pofollow[0]->do_date) ? date("d-m-Y",strtotime($pofollow[0]->do_date)) : ''?></td>
														</tr>
														<tr>
															<td class="td-assest">TAX INV / INV :</td>
															<td><?=isset($pofollow[0]->Invoice_No) ? $pofollow[0]->Invoice_No : ''?></td>
														</tr>
														<tr>
															<td class="td-assest">TAX INV / INV Date :</td>
															<td><?=isset($pofollow[0]->invoice_date) ? date("d-m-Y",strtotime($pofollow[0]->invoice_date)) : ''?></td>
														</tr>				
														<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">Others</td></tr>
														<tr style="height:20px;">
															<td class="td-assest">DEPARTMENT</td>
															<td><?=isset($pofollow[0]->dept) ? $pofollow[0]->dept : ''?></td>
														</tr>		
														<tr>
															<td class="td-assest">MD APPROVAL Date :</td>
															<td><?=isset($pofollow[0]->md_appdt) ? date("d-m-Y",strtotime($pofollow[0]->md_appdt)) : ''?></td>
														</tr>				
														<tr>
															<td class="td-assest">VENDOR :</td>
															<td><?=isset($pofollow[0]->vendor) ? $pofollow[0]->vendor : ''?></td>
														</tr>		
														<tr>
															<td class="td-assest">PAYMENT TYPE :</td>
															<td><?=isset($pofollow[0]->paytype) ? $pofollow[0]->paytype : ''?></td>
														</tr>		
														<tr>
															<td class="td-assest">COD CLOSING Date :</td>
															<td><?=isset($pofollow[0]->closingdtcc) ? date("d-m-Y",strtotime($pofollow[0]->closingdtcc)) : ''?></td>
														</tr>																
													</table>
												</td>
											</tr>
										</table>
									</div>
								</div>
							</td>
							<?php } else { ?>
							<td class="ui-desk-style-table">
								<div class="ui-main-form-1">
									<div class="middle_d">
										<table width="100%" class="ui-content-form-reg" style="">
											<tr >
												<td class="ui-desk-style-table">
													<table class="ui-content-form" width="100%" border="0">
														
														
														<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">Payment Date</td></tr>
														<tr style="height:20px;">
															<td class="td-assest">Payment Date</td>
															<td><?=isset($pofollow[0]->Date_Completedc) ? date("d-m-Y",strtotime($pofollow[0]->Date_Completedc)) : ''?></td>
														</tr>																												
													</table>
												</td>
											</tr>
										</table>
									</div>
								</div>
								
							</td>
							
							
							
							<?php } ?>
						</tr>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
