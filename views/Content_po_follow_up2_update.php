<?php 

if ($this->input->get('powhat')=="update") {
echo form_open('Procurement/po_follow_up2?pr='.$this->input->get('pr').'&po='.$this->input->get('po').'&tab='.$this->input->get('tab').'&powhat=confirm');}
else {
echo form_open('Procurement/po_follow_upsv?pr='.$this->input->get('pr').'&po='.$this->input->get('po').'&tab='.$this->input->get('tab'));}

?>


<div class="ui-middle-screen">
	<div class="content-workorder">
		<div class="div-p">&nbsp;</div>
		<div class="ui-main-form-5">
			<table width="100%" class="ui-content-form-reg" style="background:white;">
				<tr class="ui-color-contents-style-1" height="30px">
					<td colspan="2" class="ui-header-new">
					<span class="textmenu" style="float:left;">
					<?php if($this->input->get('powhat') == 'confirm'){?><b>Confirm</b><?php }?>
					<?php if ($this->input->get('tab') == 0){ ?> <b> Shipment </b> One
					<?php }elseif($this->input->get('tab') == 1){ ?> <b> Shipment </b> Two 
					<?php }elseif($this->input->get('tab') == 2){ ?><b>Shipment </b> Three 
					<?php }elseif($this->input->get('tab') == 3){ ?><b>Payment </b>
					<?php }elseif($this->input->get('tab') == 1111){ ?><b>New PO </b>
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
										<?php $numberdate = 0;  ?>
										<?php if($this->input->get('powhat') == 'confirm'){ $confim = 'readonly';}else{ $confim = ''; }
										if ($confim == '') {
										$parts_rm = isset($pofollow[0]->parts_rm) ? $pofollow[0]->parts_rm : '';
										$labor_rm = isset($pofollow[0]->labor_rm) ? $pofollow[0]->labor_rm : '';
										$cs_rm = isset($pofollow[0]->cs_rm) ? $pofollow[0]->cs_rm : '';
										$cost_rm = isset($pofollow[0]->cost_rm) ? $pofollow[0]->cost_rm : '';
										$gst_rm = isset($pofollow[0]->gst_rm) ? $pofollow[0]->gst_rm : '';
										$status_set = isset($pofollow[0]->status_set) ? $pofollow[0]->status_set : '';
										$recipient_code = isset($pofollow[0]->recipient_code) ? $pofollow[0]->recipient_code : '';
										$Date_Completed = isset($pofollow[0]->Date_Completed) ? date("d-m-Y",strtotime($pofollow[0]->Date_Completed)) : '';
										$Date_Completedc = isset($pofollow[0]->Date_Completedc) ? date("d-m-Y",strtotime($pofollow[0]->Date_Completedc)) : '';
										$do_no = isset($pofollow[0]->do_no) ? $pofollow[0]->do_no : '';
										$do_date = isset($pofollow[0]->do_date) ? date("d-m-Y",strtotime($pofollow[0]->do_date)) : '';
										$Invoice_No = isset($pofollow[0]->Invoice_No) ? $pofollow[0]->Invoice_No : '';
										$invoice_date = isset($pofollow[0]->invoice_date) ? date("d-m-Y",strtotime($pofollow[0]->invoice_date)) : '';
										
										$total_rm = isset($pofollow[0]->totalcost) ? $pofollow[0]->totalcost : '';
										$md_apprdt = isset($pofollow[0]->md_appdt) ? date("d-m-Y",strtotime($pofollow[0]->md_appdt)) : '';
										$dept = isset($pofollow[0]->dept) ? $pofollow[0]->dept : '';
										$closingdt = isset($pofollow[0]->closingdtcc) ? date("d-m-Y",strtotime($pofollow[0]->closingdtcc)) : '';
										$paytype = isset($pofollow[0]->paytype) ? $pofollow[0]->paytype : '';
										$vendor = isset($pofollow[0]->vendor) ? $pofollow[0]->vendor : '';
										
										} else {
										$parts_rm = '';
										$labor_rm = '';
										$cs_rm = '';
										$cost_rm = '';
										$gst_rm = '';
										$status_set = '';
										$recipient_code = '';
										$Date_Completed = '';
										$Date_Completedc = '';
										$do_no = '';
										$do_date = '';
										$Invoice_No = '';
										$invoice_date = '';
										
										$total_rm = '';
										$md_apprdt = '';
										$dept = '';
										$closingdt = '';
										$paytype = '';
										$vendor = '';
										
										}
										
										$nktauwatab = isset($whattab) ? $whattab : $this->input->get('tab');
										//echo "lapulok : ".$nktauwatab;
										if ( $nktauwatab == "3") {
										?>
										<table class="ui-content-form" width="100%" border="0">
										
										<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">Payment Date</td></tr>
												<tr style="height:20px;">
													<td class="td-assest">Payment Date</td>
													<td><input type="text"  name="n_completeddt" value="<?=$Date_Completedc?><?=$this->input->post('n_completeddt')?>" class="form-control-button2 n_wi-date2" id="date<?php echo $numberdate++; ?>" <?=$confim?>></td>
												</tr>

                                        <tr>
										<td style="padding:10px;" valign="top">Attachments   :   </td>
										<!--<td style="padding:10px;"><a href="" ><span class="icon-plus" style="font-size:12px; color:green;"></span> Add New</a></td>-->
										<?php if ($this->input->get('po') == 3){ ?>
										<td style="padding:10px;"><a href="javascript:void(0)" onclick="fCallLocationa('<?=$runningno?>','attachment')" value="z" ><span class="icon-plus" style="font-size:12px; color:green;" ></span> Add New </a></td>
										<?php } else { ?>
										<td style="padding:10px;"><a href="javascript:void(0)" onclick="fCallLocationa('<?=$runningno?>','attachment')" value="z" ><span class="icon-plus" style="font-size:12px; color:green;" ></span> Add New </a></td>
										<?php } ?>
									</tr>
									<tr style="display:<?=($this->input->get('powhat')=="update" ? 'none' : 'block') ?>;" id="trcommaattachment">
										<td style="padding-left:10px; display:block;">
										<?php if ($this->input->get('powhat')=="update")  { ?>
										<span style="display:inline-block;" id="spcommaattachment"></span>
										<?php } else { ?>
										<span style="display:inline-block;" id="spcommaattachment"></span>
										<span id="spattachment">
										<?php
											foreach($recordatt as $row){
												$extension = explode(".",$row->doc_id);

												if ($extension[1] == 'docx' || $extension[1] == 'xlsx' || $extension[1] == 'pdf') {
												echo "<span class='icon-play icon' style='font-size:15px;'></span><span style='font-size:15px; font-weight:bold;'>" .$row->Doc_name. "</span><a href=".base_url()."uploadpofiles/".$row->doc_id."><span class='icon-file-text2 icon'></a></span><a href='javascript:fCallLocatiod(\"".$row->PO_No."\",\"".$row->Id."\",\"attachment\");'><span class='icon-cross icon' style='color:red;'></span></a><a href='javascript:fCallLocatioe(\"".$row->PO_No."\",\"".$row->Id."\",\"attachment\");'><span class='icon-new icon'></span></a>";
												echo '<br>';
												} else {
												echo "<span class='icon-play icon' style='font-size:15px;'></span><span style='font-size:15px; font-weight:bold;'>" .$row->Doc_name. "</span> <br/><img src=".base_url()."uploadpofiles/".$row->doc_id." style='width:50px; height:50px; padding-left:5px;' ><a href='javascript:fCallLocatiod(\"".$row->PO_No."\",\"".$row->Id."\",\"attachment\");'><span class='icon-cross icon' style='color:red;'></span></a><a href='javascript:fCallLocatioe(\"".$row->PO_No."\",\"".$row->Id."\",\"attachment\");'><span class='icon-new icon'></span></a>";
												echo '<br>';
												}
											}
										?>
										<?php } ?>
										</span>
										</td>
									</tr>												
											</table>
										</td>
									</tr>
								</table>
							</div>
						</div>
										<?php } else {?>
											<table class="ui-content-form" width="100%" border="0">
											  <?php if ($this->input->get('tab')=="1111") {?>
											  <tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">PO Details<font color="red"><?php  echo validation_errors();?></font></td></tr>
												<tr style="height:20px;">
													<td class="td-assest">PO No. :</td>
													<td><input type="text"  name="n_pono" value="<?=$this->input->post('n_pono')?>" class="form-control-button2 n_wi-date2" <?=$confim?>></td>
												</tr>
												<tr>
													<td class="td-assest">PO Date</td>
													<td><input type="text"  name="n_podt" value="<?=$this->input->post('n_podt')?>" class="form-control-button2 n_wi-date2" id="date<?php echo $numberdate++; ?>" <?=$confim?>></td>
												</tr>		
												<?php } ?>	
												<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">SHIPMENT</td></tr>													
												<!--<tr>
													<td class="td-assest" style="width:40%;">PARTS (RM)/UNIT </td>
													<td><input type="number" step="0.01" name="n_partsrm" value="<?=$parts_rm?><?=$this->input->post('n_partsrm')?>" class="form-control-button2 n_wi-date2" <?=$confim?>></td>
												</tr>
												<tr>
													<td class="td-assest">LABOUR (RM) :</td>
													<td><input type="number"  name="n_labourm" value="<?=$labor_rm?><?=$this->input->post('n_labourm')?>" class="form-control-button2 n_wi-date2" <?=$confim?>></td>
												</tr>
												<tr>
													<td class="td-assest">CENTRAL STORE (RM) :</td>
													<td><input type="number" step="0.01"  name="n_ctrlstorerm" value="<?=$cs_rm?><?=$this->input->post('n_ctrlstorerm')?>" class="form-control-button2 n_wi-date2" <?=$confim?>></td>
												</tr>
												<tr>-->
													<td class="td-assest">COST (RM) :</td>
													<td><input type="number" step="0.01" id="n_costrm"  name="n_costrm" value="<?=$cost_rm?><?=$this->input->post('n_costrm')?>" class="form-control-button2 n_wi-date2" <?=$confim?>></td>
												</tr>
												<tr>
													<td class="td-assest">GST (6%) (RM) :</td>
													<td><input type="number" step="0.01" id="n_gstrm"  name="n_gstrm" value="<?=$gst_rm?><?=$this->input->post('n_gstrm')?>" class="form-control-button2 n_wi-date2" <?=$confim?>></td>
													
												</tr>
												<tr>
													<td class="td-assest">TOTAL INC GST (RM) :</td>
													<td><input type="number" step="0.01" id="n_totalrm" name="n_totalrm" value="<?=$total_rm?><?=$this->input->post('n_totalrm')?>" class="form-control-button2 n_wi-date2" <?=$confim?>></td>
													
												</tr>
												<!--<tr>
													<td class="td-assest">STATUS (C/P) :</td>
													<td>
													<?php 
													$status_list = array(
													'0' => '',
															  '1' => 'C',
															  '2' => 'P',
												
														   );
													 ?>   
														<?php echo form_dropdown('n_status_list', $status_list ,$status_set.$this->input->post('n_status_list'), 'class="dropdown n_wi-date2"'.$confim.''); ?> 
													</td>
												</tr>-->
												<tr>
													<td class="td-assest" valign="top">RECEIPIENT :</td>
													<td>
													<input type="text"  id="n_receipient" name="n_receipient" value="<?=$recipient_code?><?=$this->input->post('n_receipient')?>" class="form-control-button2 n_wi-date"  >
													<?php if($this->input->get('powhat') != 'confirm'){?>
													<span class="icon-windows" onclick="testje(this)" value="update"></span><br/>
													<?php }?>
													</td>
													<!--<input type="text"  id="n_receipient" name="n_receipient" value="<?=$recipient_code?><?=$this->input->post('n_receipient')?>" class="form-control-button2 n_wi-date2" id="code2" style="border:none;" readonly></td>-->
												</tr>
												
												<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">FINANCE SUBMISSION Date</td></tr>
												<tr style="height:20px;">
													<td class="td-assest">FINANCE SUBMISSION Date</td>
													<td><input type="text"  name="n_completeddt" value="<?=$Date_Completed?><?=$this->input->post('n_completeddt')?>" class="form-control-button2 n_wi-date2" id="date<?php echo $numberdate++; ?>" <?=$confim?>></td>
												</tr><br>
                                                <tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">Components & Attachments</td></tr>
												<tr>
										<td style="padding:10px;  valign="top">Components  :   </td>
										<?php if ($this->input->get('po') == 3){ ?>
										<td style="padding:10px;"><a href="javascript:void(0)" onclick="fCallLocationa('<?=$runningno?>','component')" value="z" ><span class="icon-plus" style="font-size:12px; color:green;" ></span> Add New </a></td>
										<?php } else { ?>
										<td style="padding:10px;"><a href="javascript:void(0)" onclick="fCallLocationa('<?=$runningno?>','component')" value="z" ><span class="icon-plus" style="font-size:12px; color:green;" ></span> Add New </a></td>
										<?php } ?>
									</tr>
                                    <tr style="display:<?=($this->input->get('powhat')=="update" ? 'none' : 'block' )?>;" id="trcommacomponent">
									
										<td style="padding-left:10px; display:block;">
										<?php if ($this->input->get('powhat')=="update") { ?>
						
										<span style="display:inline-none;" id="spcommacomponent"></span>
										<?php } else { ?>
														
										<span style="display:inline-none;" id="spcommacomponent"></span>
								
										<span id="spcomponent">
										<?php
										
											foreach($recordcom as $row){
												$extension = explode(".",$row->com_id);

												if ($extension[1] == 'docx' || $extension[1] == 'xlsx' || $extension[1] == 'pdf') {
												echo "<span class='icon-play icon' style='font-size:15px;'></span><span style='font-size:15px; font-weight:bold;'>" .$row->component_name. "</span><a href=".base_url()."uploadpofiles/".$row->com_id."><span class='icon-file-text2 icon'></a></span><a href='javascript:fCallLocatiod(\"".$row->PO_No."\",\"".$row->Id."\",\"component\");'><span class='icon-cross icon' style='color:red;'></span></a><a href='javascript:fCallLocatioe(\"".$row->PO_No."\",\"".$row->Id."\",\"component\");'><span class='icon-new icon'></span></a>";
												echo '<br>';
												} else {
												echo "<span class='icon-play icon' style='font-size:15px;'></span><span style='font-size:15px; font-weight:bold;'>" .$row->component_name. "</span> <br/><img src=".base_url()."uploadpofiles/".$row->com_id." style='width:50px; height:50px; padding-left:5px;' ><a href='javascript:fCallLocatiod(\"".$row->PO_No."\",\"".$row->Id."\",\"component\");'><span class='icon-cross icon' style='color:red;'></span></a><a href='javascript:fCallLocatioe(\"".$row->PO_No."\",\"".$row->Id."\",\"component\");'><span class='icon-new icon'></span></a>";
												echo '<br>';
												}
											}
										?>
										<?php } ?>
										</span>
										</td>
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
												<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">INVOICE & Delivery Order</td></tr>													
												<tr>
													<td class="td-assest" style="width:40%;">Delivery Order :</td>
													<td><input type="text"  name="n_do" value="<?=$do_no?><?=$this->input->post('n_do')?>" class="form-control-button2 n_wi-date2" <?=$confim?>></td>
												</tr>
												<tr>
													<td class="td-assest">Delivery Order Date :</td>
													<td><input type="text"  name="n_dodt" value="<?=$do_date?><?=$this->input->post('n_dodt')?>" class="form-control-button2 n_wi-date2" id="date<?php echo $numberdate++; ?>" <?=$confim?>></td>
												</tr>
												<tr>
													<td class="td-assest">TAX INV / INV :</td>
													<td><input type="text"  name="n_inv" value="<?=$Invoice_No?><?=$this->input->post('n_inv')?>" class="form-control-button2 n_wi-date2" <?=$confim?>></td>
												</tr>
												<tr>
													<td class="td-assest">TAX INV / INV Date :</td>
													<td><input type="text"  name="n_invdt" value="<?=$invoice_date?><?=$this->input->post('n_invdt')?>" class="form-control-button2 n_wi-date2" id="date<?php echo $numberdate++; ?>" <?=$confim?>></td>
												</tr>						
												<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">Others</td></tr>
												<tr style="height:20px;">
													<td class="td-assest">DEPARTMENT :</td>
													<td><?php 
													$status_list1 = array(
													'' => '',
															  'ACCB' => 'ADVANCE COMPETENCY CERTIFICATION BODY',
																'ACL' => 'ADVANCE CAL LAB',
																'ADM' => 'ADMIN',
																'AP BES' => 'AP BIOMEDICAL ENGINEERING SERVICES DIVISION',
																'AS' => 'Asset Solutions Department',
																'BECTA' => 'Biomedical Engineering Competency Training Academy',
																'BT' => 'Information Technology Department(Business Technology)',
																'CCD' => 'CORPORATE COMMUNICATIONS  DIVISION',
																'CD' => 'COMPLIANCE DIVISION',
																'DS' => 'Design Solution',
																'DUT' => 'Data Management & User Training Department',
																'FD' => 'FINANCE DIVISION',
																'HR' => 'Human Resource',
																'IMG' => 'Imaging',
																'ICT' => 'Information Technology Department(ICT Maintenance)',
																'LCSD' => 'LEGAL & CONTRACT SERVICES DIVISION',
																'MDO' => 'MANAGING DIRECTORS OFFICE',
																'MSD' => 'MANAGEMENT SERVICES DIVISION',
																'PRO' => 'Procurement',
																'SC' => 'Supply Chain Department',
																'SSD' => 'SUPPORT SERVICES DIVISION',
																'SS' => 'Specialty Services',
																'STD' => 'Standard Department',
																'TCS' => 'Tender & Contract Services Department'
												
														   );
													 ?>   
														<?php echo form_dropdown('n_dept', $status_list1 ,$dept.$this->input->post('n_dept'), 'class="dropdown n_wi-date2"'.$confim.''); ?> 
													</td>
												</tr>
											  <tr>
													<td class="td-assest">APPROVAL Date</td>
													<td><input type="text"  name="n_mddt" value="<?=$md_apprdt?><?=$this->input->post('n_mddt')?>" class="form-control-button2 n_wi-date2" id="date<?php echo $numberdate++; ?>" <?=$confim?>></td>
												</tr>		
												<tr style="height:20px;">
													<td class="td-assest">VENDOR :</td>
													<td><input type="text"  name="n_vendor" value="<?=$vendor?><?=$this->input->post('n_vendor')?>" class="form-control-button2 n_wi-date2" <?=$confim?>></td>
												</tr>
												<tr style="height:20px;">
													<td class="td-assest">PAYMENT TYPE :</td>
													<td><?php  $status_list2 = array(
													'' => '',
															  'Term' => 'Term',
															  'COD' => 'COD',
															  'Reimburse' => 'Reimburse',
															  'Utilities' => 'Utilities',
												
														   );
													 ?>   
														<?php echo form_dropdown('n_paytype', $status_list2 ,$paytype.$this->input->post('n_paytype'), 'class="dropdown n_wi-date2"'.$confim.''); ?></td>
												</tr>	
												<tr>
													<td class="td-assest">COD CLOSING Date :</td>
													<td><input type="text"  name="n_codcdt" value="<?=$closingdt?><?=$this->input->post('n_codcdt')?>" class="form-control-button2 n_wi-date2" id="date<?php echo $numberdate++; ?>" <?=$confim?>></td>
												</tr>																			
											</table>
											
										</td>
									</tr>
								</table>
							</div>
						</div>
					</td>
				</tr>
				<?php } ?>
				<tr class="ui-color-contents-style-1" height="30px">
					<td colspan="2" class="ui-header-new" align="center">
					<?php if (validation_errors() == '') { ?>
					<input type="submit" class="btn-button btn-primary-button" name="mysubmit" value="Save" style="width:150px;"/>
					<?php } ?>
                    <input type="button" class="btn-button btn-primary-button" name="Cancel" value="Cancel" onclick="window.history.back()" style="width:150px;"/>
					</td>
				</tr>
			</table>
				<?php echo form_hidden('tempno',isset($runningno) ? $runningno : '') ?>
				
		</div>
	</div>
	<?php //include 'content_jv_popup.php';?>
	<script language="JavaScript" type="text/javascript">
function testje(a,hour)
{
var parent = a.getAttribute('value');
//alert('masuk lalalalalla'+parent);
			//var hour = hour;
			//var minute = minute;
			winProp = 'width=600,height=400,left=' + ((screen.width - 600) / 2) +',top=' + ((screen.height - 400) / 2) + ',menubar=no, directories=no, location=no, scrollbars=yes, statusbar=no, toolbar=no, resizable=no';
//alert('masuk lalalalalla'+parent);			
			Win = window.open('assetdetailname?parent=woresponse&v=q&r=1&hour=0&minute=0&pr=update', 'assetdetailname', winProp);
			Win.window.focus();
}

function update2field(){      

first = document.getElementById("n_costrm").value;  
//alert('masla');        
one = parseInt(first)*.06;
two = parseInt(first)+(parseInt(first)*.06);
document.getElementById("n_gstrm").value = one.toFixed(2);   
document.getElementById("n_totalrm").value = two.toFixed(2);  

}

function update2field2(){      

first = document.getElementById("n_gstrm").value;  
//alert('masla');
one = (parseInt(first)/6)*100;
two = parseInt(first)+(parseInt(first)/6)*100;        
document.getElementById("n_costrm").value = one.toFixed(2);   
document.getElementById("n_totalrm").value = two.toFixed(2);  

}

function update2field3(){      

first = document.getElementById("n_totalrm").value;  
//alert('masla'); 
one = (parseInt(first)/106)*100;
two = (parseInt(first)/106)*6;       
document.getElementById("n_costrm").value = one.toFixed(2);   
document.getElementById("n_gstrm").value = two.toFixed(2);  

}

function fCallLocationa(pono,tag){
	winProp = 'width=450,height=270,left=' + ((screen.width - 600) / 2) +',top=' + ((screen.height - 400) / 2) + ',menubar=no, directories=no, location=no, scrollbars=yes, statusbar=no, toolbar=no, resizable=no';
	Win = window.open('<?php if ($this->uri->slash_segment(2) != 'e_pr/') { echo "asset3_comm_newpo";} else { echo "asset3_comm_newpo"; }?>?pono=' + pono + '&act=addnew' + '&tag=' + tag , 'Location', winProp);
	Win.window.focus();
	}
	
function fCallLocatioa(pono,tag)
	{
		setTimeout(function() {
			var url		=	'<?php echo base_url ('index.php/ajaxproc') ?>?option=pono&pono='+pono+'&tag='+tag;
	 		document.getElementById('spcomma'+tag).innerHTML = '';
			$('#spcomma'+tag).load(url);
	 		document.getElementById('trcomma'+tag).style.display='block';
	 		if (tag == 'component') {
	 		document.getElementById('spcomponent').style.display='none';
	 		}
	 		else {
	 		document.getElementById('spattachment').style.display='none';
	 		}
		document.body.style.cursor='default';
		} ,300);
 			
	}
	function fCallLocatioe(pono, id, tag)
	{
		var url		=	'<?php echo base_url ('index.php/Procurement/asset3_comm_newpo') ?>?pono='+pono+'&id='+id+'&act=update'+'&tag='+tag;
 		//document.getElementById('spcomma').innerHTML = '';
		//$('#spcomma').load(url);
 		///document.getElementById('trcomma').style.display='block';
		//document.body.style.cursor='default';
		winProp = 'width=450,height=270,left=' + ((screen.width - 600) / 2) +',top=' + ((screen.height - 400) / 2) + ',menubar=no, directories=no, location=no, scrollbars=yes, statusbar=no, toolbar=no, resizable=no';
		Win = window.open(url, 'Location', winProp);
		Win.window.focus();
 			
	}

	function fCallLocatiod(pono, id, tag)
	{
		var url		=	'<?php echo base_url ('index.php/Procurement/asset3_comm_newpo') ?>?pono='+pono+'&id='+id+'&act=delete'+'&tag='+tag;
 		//document.getElementById('spcomma').innerHTML = '';
		//$('#spcomma').load(url);
 		///document.getElementById('trcomma').style.display='block';
		//document.body.style.cursor='default';
		winProp = 'width=450,height=270,left=' + ((screen.width - 600) / 2) +',top=' + ((screen.height - 400) / 2) + ',menubar=no, directories=no, location=no, scrollbars=yes, statusbar=no, toolbar=no, resizable=no';
		Win = window.open(url, 'Location', winProp);
		Win.window.focus();
 			
	}	

</script>

	<?php //echo "lklklkl : " . $this->uri->slash_segment(1). "<br>"; include 'content_jv_popup.php';?>
</div>

</form>

</body>
</html>



