<?php echo form_open('wo_visitplus_update_ctrl/confirmation');?>
<div class="ui-middle-screen">
	<div class="content-workorder" align="center">
		<table class="ui-desk-style-table3" cellpadding="4" cellspacing="0" width="92%">	
			<tr class="ui-color-contents-style-1" height="40px">
				<td class="ui-header-new" colspan="2"><b>Confirm Visit Plus</b></td>
			</tr>
			<tr>
				<td valign="top" class="td-assest">Visit Date : </td>
				<td><input type="text" name="n_Visit_Date" value="<?php echo set_value('n_Visit_Date'); ?>" class="form-control-button2" readonly></td>
			</tr>
			<tr>
				<td valign="top" class="td-assest">Start Time :</td>
				<td>
					<?php 
										$hour_list = array(
										'0' => '0',
                  						'1' => '1',
                  				 		'2' => '2',
                  				 		'3' => '3',
                  						'4' => '4',
                  				 		'5' => '5',
                  				 		'6' => '6',
                  						'7' => '7',
                  				 		'8' => '8',
                  				 		'9' => '9',
                  						'10' => '10',
                  				 		'11' => '11',
                  				 		'12' => '12',
                  				 		'13' => '13',
                  				 		'14' => '14',
                  						'15' => '15',
                  				 		'16' => '16',
                  				 		'17' => '17',
                  						'18' => '18',
                  				 		'19' => '19',
                  				 		'20' => '20',
                  						'21' => '21',
                  				 		'22' => '22',
                  				 		'23' => '23',
                					 );
										 ?>
								        <?php echo form_dropdown('n_Shour', $hour_list, set_value('n_Shour',date('H')) , 'class="dropdown" style="width: 52px;"disabled'); ?> 
										<?php 
										$min_list = array(
										'0' => '0',
                  						'1' => '1',
                  				 		'2' => '2',
                  				 		'3' => '3',
                  						'4' => '4',
                  				 		'5' => '5',
                  				 		'6' => '6',
                  						'7' => '7',
                  				 		'8' => '8',
                  				 		'9' => '9',
                  						'10' => '10',
                  				 		'11' => '11',
                  				 		'12' => '12',
                  				 		'13' => '13',
                  				 		'14' => '14',
                  						'15' => '15',
                  				 		'16' => '16',
                  				 		'17' => '17',
                  						'18' => '18',
                  				 		'19' => '19',
                  				 		'20' => '20',
                  						'21' => '21',
                  				 		'22' => '22',
                  				 		'23' => '23',
                  						'24' => '24',
                  				 		'25' => '25',
                  				 		'26' => '26',
                  						'27' => '27',
                  				 		'28' => '28',
                  				 		'29' => '29',
                  						'30' => '30',
                  				 		'31' => '31',
                  				 		'32' => '32',
                  						'33' => '33',
                  				 		'34' => '34',
                  				 		'35' => '35',
                  				 		'36' => '36',
                  				 		'37' => '37',
                  						'38' => '38',
                  				 		'39' => '39',
                  				 		'40' => '40',
                  						'41' => '41',
                  				 		'42' => '42',
                  				 		'43' => '43',
                  						'44' => '44',
                  				 		'45' => '45',
                  				 		'46' => '46',
                  				 		'47' => '47',
                  				 		'48' => '48',
                  						'49' => '49',
                  				 		'50' => '50',
                  				 		'51' => '51',
                  				 		'52' => '52',
                  				 		'53' => '53',
                  						'54' => '54',
                  				 		'55' => '55',
                  				 		'56' => '56',
                  						'57' => '57',
                  				 		'58' => '58',
                  				 		'59' => '59',
                					 );
										 ?>		
		              			<?php echo form_dropdown('n_Smin', $min_list, set_value('n_Smin',date('i')) , 'class="dropdown" style="width: 52px;"disabled'); ?>
				</td></td>
			</tr>
			<tr>
				<td valign="top" class="td-assest">End Time :</td>
				<td>
					<?php 
										$hour_list = array(
										'0' => '0',
                  						'1' => '1',
                  				 		'2' => '2',
                  				 		'3' => '3',
                  						'4' => '4',
                  				 		'5' => '5',
                  				 		'6' => '6',
                  						'7' => '7',
                  				 		'8' => '8',
                  				 		'9' => '9',
                  						'10' => '10',
                  				 		'11' => '11',
                  				 		'12' => '12',
                  				 		'13' => '13',
                  				 		'14' => '14',
                  						'15' => '15',
                  				 		'16' => '16',
                  				 		'17' => '17',
                  						'18' => '18',
                  				 		'19' => '19',
                  				 		'20' => '20',
                  						'21' => '21',
                  				 		'22' => '22',
                  				 		'23' => '23',
                					 );
										 ?>
								        <?php echo form_dropdown('n_Ehour', $hour_list, set_value('n_Ehour',date('H')) , 'class="dropdown" style="width: 52px;"disabled'); ?> 
										<?php 
										$min_list = array(
										'0' => '0',
                  						'1' => '1',
                  				 		'2' => '2',
                  				 		'3' => '3',
                  						'4' => '4',
                  				 		'5' => '5',
                  				 		'6' => '6',
                  						'7' => '7',
                  				 		'8' => '8',
                  				 		'9' => '9',
                  						'10' => '10',
                  				 		'11' => '11',
                  				 		'12' => '12',
                  				 		'13' => '13',
                  				 		'14' => '14',
                  						'15' => '15',
                  				 		'16' => '16',
                  				 		'17' => '17',
                  						'18' => '18',
                  				 		'19' => '19',
                  				 		'20' => '20',
                  						'21' => '21',
                  				 		'22' => '22',
                  				 		'23' => '23',
                  						'24' => '24',
                  				 		'25' => '25',
                  				 		'26' => '26',
                  						'27' => '27',
                  				 		'28' => '28',
                  				 		'29' => '29',
                  						'30' => '30',
                  				 		'31' => '31',
                  				 		'32' => '32',
                  						'33' => '33',
                  				 		'34' => '34',
                  				 		'35' => '35',
                  				 		'36' => '36',
                  				 		'37' => '37',
                  						'38' => '38',
                  				 		'39' => '39',
                  				 		'40' => '40',
                  						'41' => '41',
                  				 		'42' => '42',
                  				 		'43' => '43',
                  						'44' => '44',
                  				 		'45' => '45',
                  				 		'46' => '46',
                  				 		'47' => '47',
                  				 		'48' => '48',
                  						'49' => '49',
                  				 		'50' => '50',
                  				 		'51' => '51',
                  				 		'52' => '52',
                  				 		'53' => '53',
                  						'54' => '54',
                  				 		'55' => '55',
                  				 		'56' => '56',
                  						'57' => '57',
                  				 		'58' => '58',
                  				 		'59' => '59',
                					 );
										 ?>		
		              			<?php echo form_dropdown('n_Emin', $min_list, set_value('n_Emin',date('i')) , 'class="dropdown" style="width: 52px;"disabled'); ?>
				</td>
			</tr>
			<tr>
				<td valign="top" class="td-assest">Type of Work : </td>
				<td>
                              <?php 
                              $TOW_list = array(
                              '' => '',
                              'Normal' => 'Normal',
                              'Reimbursable' => 'Reimbursable',
                              'UnderWarranty' => 'UnderWarranty',
                              'BER' => 'BER',
                              );
                              ?>
                              <?php echo form_dropdown('n_Type_of_Work', $TOW_list, $this->input->post('n_Type_of_Work') , 'class="dropdown n_wi-date" disabled'); ?>
				</td>
			</tr>
			<tr>
				<td valign="top" class="td-assest">Action Taken : </td>
				<td><textarea class="input n_com" name="n_Action_Taken" readonly><?php echo set_value('n_Action_Taken'); ?></textarea></td>
			</tr>
			<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">MAINTENANCE COST SECTION </td></tr>
                  <tr><td colspan="3" ><b>Reschedule</b></td></tr>
                  <tr>
                        <td class="td-assest">Reschedule Date :</td>
                        <td><input type="text" name="n_rschDate" value="<?php echo set_value('n_rschDate'); ?>" class="form-control-button2" readonly></td>
                  </tr>
                  <tr>
                        <td valign="top" class="td-assest"> Reason :</td>
                        <td>
                             <input type="radio" id="radio-1-1" name="n_rschReason" class="regular-radio" value="1 - Not found" <?php echo set_radio('n_rschReason', '1 - Not found'); ?>disabled/> 
                              <label for="radio-1-1"></label> 1 - Not found <br />
                              <input type="radio" id="radio-1-2" name="n_rschReason" class="regular-radio" value="2 - In use" <?php echo set_radio('n_rschReason', '2 - In use'); ?>disabled/>   
                              <label for="radio-1-2"></label> 2 - In use<br />
                              <input type="radio" id="radio-1-3" name="n_rschReason" class="regular-radio" value="3 - Lock in room/not accessible" <?php echo set_radio('n_rschReason', '3 - Lock in room/not accessible'); ?>disabled/> 
                              <label for="radio-1-3"></label> 3 - Lock in room/not accessible <br />
                              <input type="radio" id="radio-1-4" name="n_rschReason" class="regular-radio" value="4 - Transferred" <?php echo set_radio('n_rschReason', '4 - Transferred'); ?>disabld/> 
                              <label for="radio-1-4"></label> 4 - Transferred <br />
                              <input type="radio" id="radio-1-5" name="n_rschReason" class="regular-radio" value="5 - Equipment down" <?php echo set_radio('n_rschReason', '5 - Equipment down'); ?>disabled/>   
                              <label for="radio-1-5"></label>  5 - Equipment down<br />
                              <input type="radio" id="radio-1-6" name="n_rschReason" class="regular-radio" value="6 - Breakdown of related support system" <?php echo set_radio('n_rschReason', '6 - Breakdown of related support system'); ?>disabled/> 
                              <label for="radio-1-6"></label> 6 - Breakdown of related support system <br />
                              <input type="radio" id="radio-1-7" name="n_rschReason" class="regular-radio" value="7 - Vendor delay" <?php echo set_radio('n_rschReason', '7 - Vendor delay'); ?>disabled/>   
                              <label for="radio-1-7"></label>  7 - Vendor delay<br />
                              <input type="radio" id="radio-1-8" name="n_rschReason" class="regular-radio" value="8 - Others" <?php echo set_radio('n_rschReason', '8 - Others'); ?>disabled/>   
                              <label for="radio-1-8"></label>  8 - Others<br /><br />
                              <textarea class="input n_com" name="n_rschReason1" readonly><?php echo set_value('n_rschReason1'); ?></textarea>
                        </td>
                  </tr>
                  <tr>
                        <td valign="top" class="td-assest">Reschedule Authorised By :</td>
                        <td><input type="text" id="n_rschAuth" name="n_rschAuth" value="<?php echo set_value('n_rschAuth'); ?>" size="10" class="form-control-button2 n_wi-date"  readonly></td>
                  </tr>
<tr>
                        <td colspan="3">
                              <div class="p-vo-normal">
                                    <table style="color:black;" width="">
                                          <tr style="font-weight: bold;">
                                                <td width="302px" style="padding-left:20px;">Name</td>
                                                <td width="150px" align="center">Time Spent</td>
                                                <td width="152px" align="center">Rate</td>
                                                <td width="122px;" align="center">Total</td>
                                          </tr>
                                    </table>
                              </div>
                              <div class="p-vo-1"><span>Technical In Charge 1 </span></div>
                              <div class="p-vo-2"><span class="ui-left_mobile">Name : </span>
                                    <input type="text" name="V_requestor1" value="<?php echo $this->input->post('C_requestor1');?>" size="10" class="form-control-button2" readonly><br />
                                    <span style="font-size:16px;"><?php echo $this->input->post('V_requestor1');?></span>
                              </div>
                              <div class="p-vo-3"><span class="ui-left_mobile">Time Spent : </span><?php 
                                                            $hour_list = array(
                                                            '0' => '0',
                                                      '1' => '1',
                                                      '2' => '2',
                                                      '3' => '3',
                                                      '4' => '4',
                                                      '5' => '5',
                                                      '6' => '6',
                                                      '7' => '7',
                                                      '8' => '8',
                                                      '9' => '9',
                                                      '10' => '10',
                                                      '11' => '11',
                                                      '12' => '12',
                                                      '13' => '13',
                                                      '14' => '14',
                                                      '15' => '15',
                                                      '16' => '16',
                                                      '17' => '17',
                                                      '18' => '18',
                                                      '19' => '19',
                                                      '20' => '20',
                                                      '21' => '21',
                                                      '22' => '22',
                                                      '23' => '23',
                                           );
                                                             ?>

                                                        <?php echo form_dropdown('n_End_Time_h1', $hour_list, set_value('n_End_Time_h1',date('H')) , 'class="dropdown" style="width: 52px;" disabled'); ?> 
                                                            
                                                            <?php 
                                                            $min_list = array(
                                                            '0' => '0',
                                                      '1' => '1',
                                                      '2' => '2',
                                                      '3' => '3',
                                                      '4' => '4',
                                                      '5' => '5',
                                                      '6' => '6',
                                                      '7' => '7',
                                                      '8' => '8',
                                                      '9' => '9',
                                                      '10' => '10',
                                                      '11' => '11',
                                                      '12' => '12',
                                                      '13' => '13',
                                                      '14' => '14',
                                                      '15' => '15',
                                                      '16' => '16',
                                                      '17' => '17',
                                                      '18' => '18',
                                                      '19' => '19',
                                                      '20' => '20',
                                                      '21' => '21',
                                                      '22' => '22',
                                                      '23' => '23',
                                                      '24' => '24',
                                                      '25' => '25',
                                                      '26' => '26',
                                                      '27' => '27',
                                                      '28' => '28',
                                                      '29' => '29',
                                                      '30' => '30',
                                                      '31' => '31',
                                                      '32' => '32',
                                                      '33' => '33',
                                                      '34' => '34',
                                                      '35' => '35',
                                                      '36' => '36',
                                                      '37' => '37',
                                                      '38' => '38',
                                                      '39' => '39',
                                                      '40' => '40',
                                                      '41' => '41',
                                                      '42' => '42',
                                                      '43' => '43',
                                                      '44' => '44',
                                                      '45' => '45',
                                                      '46' => '46',
                                                      '47' => '47',
                                                      '48' => '48',
                                                      '49' => '49',
                                                      '50' => '50',
                                                      '51' => '51',
                                                      '52' => '52',
                                                      '53' => '53',
                                                      '54' => '54',
                                                      '55' => '55',
                                                      '56' => '56',
                                                      '57' => '57',
                                                      '58' => '58',
                                                      '59' => '59',
                                           );
                                                             ?>         
                                          <?php echo form_dropdown('n_End_Time_m1', $min_list, set_value('n_End_Time_m1',date('i')) , 'class="dropdown" style="width: 52px;" disabled'); ?></div>
                              <div class="p-vo-4"><span class="ui-left_mobile">Rate : </span>RM<input type="text" id="n_personnel_rate2" name="V_rate2" value="<?php echo set_value('V_rate1'); ?>" size="10" class="input-none-rate" readonly></div>
                              <div class="p-vo-5"><span class="ui-left_mobile">Total : </span>RM<input type="text" id="T_rate2" name="T_rate2" value="<?php echo set_value('T_rate1'); ?>" size="10" class="input-none-rate" readonly></div>
                        </td>
                  </tr>
                  <tr>
                        <td colspan="3">
                              <div class="p-vo-1"><span>Technical In Charge 2 </span></div>
                              <div class="p-vo-2"><span class="ui-left_mobile">Name : </span>
                                    <input type="text" name="V_requestor2" value="<?php echo $this->input->post('C_requestor2');?>" size="10" class="form-control-button2" readonly><br />
                                    <span style="font-size:16px;"><?php echo $this->input->post('V_requestor2');?></span>
                              </div>
                              <div class="p-vo-3"><span class="ui-left_mobile">Time Spent : </span><?php 
                                                            $hour_list = array(
                                                            '0' => '0',
                                                      '1' => '1',
                                                      '2' => '2',
                                                      '3' => '3',
                                                      '4' => '4',
                                                      '5' => '5',
                                                      '6' => '6',
                                                      '7' => '7',
                                                      '8' => '8',
                                                      '9' => '9',
                                                      '10' => '10',
                                                      '11' => '11',
                                                      '12' => '12',
                                                      '13' => '13',
                                                      '14' => '14',
                                                      '15' => '15',
                                                      '16' => '16',
                                                      '17' => '17',
                                                      '18' => '18',
                                                      '19' => '19',
                                                      '20' => '20',
                                                      '21' => '21',
                                                      '22' => '22',
                                                      '23' => '23',
                                           );
                                                             ?>
                                                        <?php echo form_dropdown('n_End_Time_h2', $hour_list, set_value('n_End_Time_h2',date('H')) , 'class="dropdown" style="width: 52px;" disabled'); ?> 
                                                            <?php 
                                                            $min_list = array(
                                                            '0' => '0',
                                                      '1' => '1',
                                                      '2' => '2',
                                                      '3' => '3',
                                                      '4' => '4',
                                                      '5' => '5',
                                                      '6' => '6',
                                                      '7' => '7',
                                                      '8' => '8',
                                                      '9' => '9',
                                                      '10' => '10',
                                                      '11' => '11',
                                                      '12' => '12',
                                                      '13' => '13',
                                                      '14' => '14',
                                                      '15' => '15',
                                                      '16' => '16',
                                                      '17' => '17',
                                                      '18' => '18',
                                                      '19' => '19',
                                                      '20' => '20',
                                                      '21' => '21',
                                                      '22' => '22',
                                                      '23' => '23',
                                                      '24' => '24',
                                                      '25' => '25',
                                                      '26' => '26',
                                                      '27' => '27',
                                                      '28' => '28',
                                                      '29' => '29',
                                                      '30' => '30',
                                                      '31' => '31',
                                                      '32' => '32',
                                                      '33' => '33',
                                                      '34' => '34',
                                                      '35' => '35',
                                                      '36' => '36',
                                                      '37' => '37',
                                                      '38' => '38',
                                                      '39' => '39',
                                                      '40' => '40',
                                                      '41' => '41',
                                                      '42' => '42',
                                                      '43' => '43',
                                                      '44' => '44',
                                                      '45' => '45',
                                                      '46' => '46',
                                                      '47' => '47',
                                                      '48' => '48',
                                                      '49' => '49',
                                                      '50' => '50',
                                                      '51' => '51',
                                                      '52' => '52',
                                                      '53' => '53',
                                                      '54' => '54',
                                                      '55' => '55',
                                                      '56' => '56',
                                                      '57' => '57',
                                                      '58' => '58',
                                                      '59' => '59',
                                           );
                                                             ?>         
                                          <?php echo form_dropdown('n_End_Time_m2', $min_list, set_value('n_End_Time_m2',date('i')) , 'class="dropdown" style="width: 52px;" disabled'); ?></div>
                              <div class="p-vo-4"><span class="ui-left_mobile">Rate : </span>RM<input type="text" id="n_personnel_rate2" name="V_rate2" value="<?php echo set_value('V_rate2'); ?>" size="10" class="input-none-rate" readonly></div>
                              <div class="p-vo-5"><span class="ui-left_mobile">Total : </span>RM<input type="text" id="T_rate2" name="T_rate2" value="<?php echo set_value('T_rate2'); ?>" size="10" class="input-none-rate" readonly></div>
                        </td>
                  </tr>
                  <tr>
                        <td colspan="3">
                              <div class="p-vo-1"><span>Technical In Charge 3 </span></div>
                              <div class="p-vo-2"><span class="ui-left_mobile">Name : </span>
                                    <input type="text" name="V_requestor3" value="<?php echo $this->input->post('C_requestor3');?>" size="10" class="form-control-button2" readonly><br />
                                    <span style="font-size:16px;"><?php echo $this->input->post('V_requestor3');?></span>
                              </div>
                              <div class="p-vo-3"><span class="ui-left_mobile">Time Spent : </span><?php 
                                                            $hour_list = array(
                                                      '0' => '0',
                                                      '1' => '1',
                                                      '2' => '2',
                                                      '3' => '3',
                                                      '4' => '4',
                                                      '5' => '5',
                                                      '6' => '6',
                                                      '7' => '7',
                                                      '8' => '8',
                                                      '9' => '9',
                                                      '10' => '10',
                                                      '11' => '11',
                                                      '12' => '12',
                                                      '13' => '13',
                                                      '14' => '14',
                                                      '15' => '15',
                                                      '16' => '16',
                                                      '17' => '17',
                                                      '18' => '18',
                                                      '19' => '19',
                                                      '20' => '20',
                                                      '21' => '21',
                                                      '22' => '22',
                                                      '23' => '23',
                                           );
                                                             ?>
                                                        <?php echo form_dropdown('n_End_Time_h3', $hour_list, set_value('n_End_Time_h3',date('H')) , 'class="dropdown" style="width: 52px;" disabled'); ?> 
                                                            <?php 
                                                            $min_list = array(
                                                            '0' => '0',
                                                      '1' => '1',
                                                      '2' => '2',
                                                      '3' => '3',
                                                      '4' => '4',
                                                      '5' => '5',
                                                      '6' => '6',
                                                      '7' => '7',
                                                      '8' => '8',
                                                      '9' => '9',
                                                      '10' => '10',
                                                      '11' => '11',
                                                      '12' => '12',
                                                      '13' => '13',
                                                      '14' => '14',
                                                      '15' => '15',
                                                      '16' => '16',
                                                      '17' => '17',
                                                      '18' => '18',
                                                      '19' => '19',
                                                      '20' => '20',
                                                      '21' => '21',
                                                      '22' => '22',
                                                      '23' => '23',
                                                      '24' => '24',
                                                      '25' => '25',
                                                      '26' => '26',
                                                      '27' => '27',
                                                      '28' => '28',
                                                      '29' => '29',
                                                      '30' => '30',
                                                      '31' => '31',
                                                      '32' => '32',
                                                      '33' => '33',
                                                      '34' => '34',
                                                      '35' => '35',
                                                      '36' => '36',
                                                      '37' => '37',
                                                      '38' => '38',
                                                      '39' => '39',
                                                      '40' => '40',
                                                      '41' => '41',
                                                      '42' => '42',
                                                      '43' => '43',
                                                      '44' => '44',
                                                      '45' => '45',
                                                      '46' => '46',
                                                      '47' => '47',
                                                      '48' => '48',
                                                      '49' => '49',
                                                      '50' => '50',
                                                      '51' => '51',
                                                      '52' => '52',
                                                      '53' => '53',
                                                      '54' => '54',
                                                      '55' => '55',
                                                      '56' => '56',
                                                      '57' => '57',
                                                      '58' => '58',
                                                      '59' => '59',
                                           );
                                                             ?>         
                                          <?php echo form_dropdown('n_End_Time_m3', $min_list, set_value('n_End_Time_m3',date('i')) , 'class="dropdown" style="width: 52px;" disabled'); ?></div>
                              <div class="p-vo-4"><span class="ui-left_mobile">Rate : </span>RM<input type="text" id="n_personnel_rate3" name="V_rate3" value="<?php echo set_value('V_rate3'); ?>" size="10" class="input-none-rate" readonly></div>
                              <div class="p-vo-5"><span class="ui-left_mobile">Total : </span>RM<input type="text" id="T_rate3" name="T_rate3" value="<?php echo set_value('T_rate3'); ?>" size="10" class="input-none-rate" readonly></div>
                        </td>
                  </tr>
                   <tr>
                        <td colspan="3">
                              <div class="p-vo-normal">
                                    <table style="color:black;" width="">
                                          <tr style="font-weight: bold;">
                                                <td width="302px" style="padding-left:20px;">Name</td>
                                                <td width="150px" align="center">RM</td>
                                                <td width="152px" align="center">Rate</td>
                                                <td width="122px;" align="center">Total</td>
                                          </tr>
                                    </table>
                              </div>
                              <div class="p-vo-1"><span>Part Replaced </span></div>
                              <div class="p-vo-2"><span class="ui-left_mobile">Name : </span>
                                  <input type="text" name="V_part" value="<?php echo $this->input->post('V_part') ?>" size="10" class="form-control-button" readonly><span class="space"></span></div>
                              <div class="p-vo-3"><span class="ui-left_mobile">RM : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" name="V_partRM" value="<?php echo $this->input->post('V_partRM') ?>" size="10" class="form-control-button" style="text-align:center;" readonly><span class="space"></span></div>
                              <div class="p-vo-4"><span class="ui-left_mobile">Rate : &nbsp;&nbsp;</span><input type="text" name="V_partRate" value="<?php echo $this->input->post('V_partRate') ?>" size="5" class="form-control-button" style="text-align:center;" readonly><span class="space"></span></div>
                              <div class="p-vo-5"><span class="ui-left_mobile">Total : &nbsp;</span><input type="text" id= "V_parttotal"  name="V_parttotal" value="<?php echo $this->input->post('V_parttotal') ?>" size="10" class="form-control-button" style="text-align:center;"><span class="space"></span></div>
                        </td>
                  </tr>
                  <tr>
                        <td colspan="3">
                              <div class="p-vo-1"><span>Vendor Parts (Total) </span></div>
                              <div class="p-vo-2"><span class="ui-left_mobile">Name : </span>
                                    <input type="text" name="V_Vendor" value="<?php echo $this->input->post('C_Vendor');?>" size="10" class="form-control-button2" readonly/><br />
                                    <span style="font-size:16px;"/><?php echo $this->input->post('V_Vendor');?></span></div>
                  </td>
                  </tr>
				   <?php if ($this->input->post('chkbox') == 'ON'){?>
<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">Related Tests</td></tr>
			<tr>
				<td class="td-assest" valign="top">Performance Test : </td>
				<td valign="top">
					<input type="radio" id="radio-1-1" name="n_performance_test" class="regular-radio" <?php echo set_radio('n_performance_test', 'Done',true); ?> disabled/>   
					<label for="radio-1-1"></label> Done</option><br />
					<input type="radio" id="radio-1-2" name="n_performance_test" class="regular-radio" DISABLED/>   
					<label for="radio-1-2"></label><font color="#cccccc"> Not Done</font><br />
					<input type="radio" id="radio-1-3" name="n_performance_test" class="regular-radio" <?php echo set_radio('n_performance_test', 'Not Applicable',true); ?> disabled/>   
					<label for="radio-1-3"></label> Not Applicable</option>
				</td>
			</tr>
			<tr>
				<td class="td-assest" valign="top">Safety Test Required :</td>			
				<td >
					<input type="radio" id="radio-1-4" onclick="javascript:fShowSTestResult('Y');" name="n_safety_test" class="regular-radio" value="Done" <?php echo set_radio('n_safety_test', 'Done',true); ?> disabled/>   
					<label for="radio-1-4"></label> Done<br />
					<input type="radio" id="radio-1-5" name="n_safety_test" class="regular-radio" disabled/>   
					<label for="radio-1-5"></label><font color="#cccccc"> Not Done</font><br />
					<input type="radio" id="radio-1-6" onclick="javascript:fShowSTestResult('N');" name="n_safety_test" class="regular-radio" value="Not Applicable" <?php echo set_radio('n_safety_test', 'Not Applicable',true); ?> disabled>
					<label for="radio-1-6"></label> Not Applicable<br />
				</td>
			</tr>
			<tr>
				<td valign="top" class="td-assest">Safety Test Result :</td>			
				<td>
					<?php if ($this->input->post('n_safety_test') == 'Done') { ?> 
					<table border="0" width="150" id="divShowSTestResult" style="display:block; color:black; margin-left:-3px;">
					<?php } ?>
					<?php if ($this->input->post('n_safety_test') == 'Not Applicable' OR $this->input->post('n_safety_test') == '') { ?> 
					<table border="0" width="150" id="divShowSTestResult" style="display:none; color:black; margin-left:-3px;">
					<?php } ?>
						<tr>
							<td>
								<input type="radio" id="radio-1-29" name="n_safety_result" class="regular-radio" value="Y" <?php echo set_radio('n_safety_result', 'Y',true); ?>/>   
								<label for="radio-1-29"></label> Passed<br />
								<input type="radio" id="radio-1-29" name="n_safety_result" class="regular-radio" value="NA" <?php echo set_radio('n_safety_result', 'NA',true); ?>/>   
								<label for="radio-1-29"></label> Failed
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">Asset Information</td></tr>
			<tr>
				<td class="td-assest" valign="top" colspan="2">The following asset information is pulled from Asset Catalog for your easy reference.</td>
			</tr>
			<tr>
				<td class="td-assest" valign="top">Asset number : </td>
				<td><?= isset($ppmasset[0]->V_Asset_no) == TRUE ? $ppmasset[0]->V_Asset_no : 'N/A'?></td>
			</tr>
			<tr>
				<td class="td-assest" valign="top">Asset Tag Number : </td>
				<td><?= isset($ppmasset[0]->V_Tag_no) == TRUE ? $ppmasset[0]->V_Tag_no : 'N/A'?></td>
			</tr>
			<tr>
				<td class="td-assest" valign="top">Asset Serial Number : </td>
				<td><?= isset($ppmasset[0]->V_Serial_no) == TRUE ? $ppmasset[0]->V_Serial_no : 'N/A'?></td>
			</tr>
			<tr>
				<td class="td-assest" valign="top">Asset Name : </td>
				<td><?= isset($ppmasset[0]->V_Asset_name) == TRUE ? $ppmasset[0]->V_Asset_name : 'N/A'?></td>
			</tr>
			<tr>
				<td class="td-assest" valign="top">Safety Test Requirement : </td>
				<td><?= isset($ppmasset[0]->v_SafetyTest) == TRUE ? $ppmasset[0]->v_SafetyTest : 'N/A'?></td>
			</tr>
			<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">Related Codes</td></tr>
			<tr>
				<td valign="top">Job Type Code : </td>
				<td>
					<?php 
							$jobtype_list = array(
							'' => '',
							'1W' => '1W Weekly',
                  			'2W' => '2W Two Weekly',
                  			'3W' => '3W Three Weekly',
                  			'1M' => '1M Monthly',
                  			'2M' => '2M Two Monthly',
                  			'3M' => '3M Quarterly',
                  			'4M' => '4M Four Monthly',
                  			'6M' => '6M Half Yearly',
                  			'12M' => '12M Annually',
                  	 		'15M' => '15M 15 Month', 
                  			);
						?>	
		              	<?php echo form_dropdown('n_job_type', $jobtype_list, set_value('n_job_type') , 'class="dropdown n_wi-date2" disabled'); ?>
				</td>
			</tr>
			<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">Stoppage</td></tr>
			<tr>
				<td class="td-assest" valign="top">Stoppage : </td>
				<td><input class="InputText" onmouseup="javascript:fShowStoppage();"  type="checkbox" id="n_Stoppage" value="ON" <?php echo set_radio('n_Stoppage', 'ON', TRUE); ?> readonly></td>
			</tr>
			<tr>
				<td class="td-assest" valign="top" height="30px">Partially Functioning Start : </td>
				<td>
					<?php if ($this->input->post('n_Stoppage') == "ON") { ?>
					<div id="divShowPF1" name="divShowPF1" style="display:block; color:black;">
                    	<input type="text" class="form-control-button2 n_wi-date2" name="n_PFStartDate" value="<?php echo set_value('n_PFStartDate'); ?>" size="20" readonly >
                    	<span class="space"></span>
						<input type="text" class="form-control-button2" name="n_PFStartHH" value="<?php echo set_value('n_PFStartHH'); ?>" size="2" readonly>
						<input type="text" class="form-control-button2" name="n_PFStartNN" value="<?php echo set_value('n_PFStartNN'); ?>" size="2" readonly>									
					</div>
					<?php } ?>
					<?php if ($this->input->post('n_Stoppage') == "") { ?>
					<div id="divShowPF1" name="divShowPF1" style="display:none; color:black;">
                    	<input type="text" class="form-control-button2 n_wi-date2" name="n_PFStartDate" value="" size="20" readonly >
                    	<span class="space"></span>
						<input type="text" class="form-control-button2" name="n_PFStartHH" value="" size="2" readonly>
						<input type="text" class="form-control-button2" name="n_PFStartNN" value="" size="2" readonly>									
					</div>
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td class="td-assest" valign="top" height="30px">Partially Functioning End : </td>
				<td>
					<?php if ($this->input->post('n_Stoppage') == "ON") { ?>
					<div id="divShowPF2" name="divShowPF2" style="display:block; color:black;">
						<input type="text" class="form-control-button2 n_wi-date2" name="n_PFEndDate" value="<?php echo set_value('n_PFEndDate'); ?>" size="20" readonly>
						<span class="space"></span>
						<input type="text" class="form-control-button2" name="n_PFEndHH" value="<?php echo set_value('n_PFEndHH'); ?>" size="2" readonly>
						<input type="text" class="form-control-button2" name="n_PFEndNN" value="<?php echo set_value('n_PFEndNN'); ?>" size="2" readonly>
					</div>
					<?php } ?>
					<?php if ($this->input->post('n_Stoppage') == "") { ?>
					<div id="divShowPF2" name="divShowPF2" style="display:none; color:black;">
						<input type="text" class="form-control-button2 n_wi-date2" name="n_PFEndDate" value="" size="20" readonly>
						<span class="space"></span>
						<input type="text" class="form-control-button2" name="n_PFEndHH" value="" size="2" readonly>
						<input type="text" class="form-control-button2" name="n_PFEndNN" value="" size="2" readonly>
					</div>
					<?php } ?>
				</td>
			</tr>
			<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">Summary of Time</td></tr>
			<tr>
				<td class="td-assest" valign="top">Down Time : </td>
				<td>System auto-calculate <?php echo $this->input->post('down_time'); ?></td>
			</tr>
			<tr>
				<td class="td-assest" valign="top">Service Time : </td>
				<td>System auto-calculate <?php echo $this->input->post('serv_time'); ?></td>
			</tr>
			<tr>
				<td class="td-assest" valign="top">Completion Time : </td>
				<td>System auto-calculate <?php echo $this->input->post('comp_time'); ?></td>
			</tr>
			<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">QC</td></tr>
			<tr>
				<td class="td-assest" valign="top">QC PPM : </td>
				<td>
					<?php 
                              $QC_PPM = array(
                              '' => '',
                              'QC01' => 'QC01 Equipment not made available',
                              'QC02' => 'QC02 Technical Personnel',
                              'QC03' => 'QC03 Delay closing of Work Order',
                              'QC04' => 'QC04 User Request',
                              'QC05' => 'QC05 Mishandling/vandalism/overload',
                              'QC06' => 'QC06 Vendor Delay',
                              'QC07' => 'QC07 Equipment Down',
                              'QC08' => 'QC08 Breakdown of related support system',
                              'QC11' => 'QC11 Improper procedure',
                              'QC13' => 'QC13 PPM kit/test equipment not available/spares',
                              'QC15' => 'QC15 Force Majeure',
                              'QC16' => 'QC16 Safety, Health and Evironmental Factor',
                              'QC17' => 'QC17 Downtime due to PPM',
                              'QC18' => 'QC18 Downtime due to SCM',
                              'QC19' => 'QC19 Equipment not functional and waiting for BER approved',
                              );
                              ?>	
		              	<?php echo form_dropdown('QC_PPM', $QC_PPM, set_value('QC_PPM') , 'class="dropdown n_wi-date2" disabled'); ?>
				</td>
			</tr>
			<tr>
				<td class="td-assest" valign="top">QC Uptime : </td>
				<td>
					<?php 
							$QC_list = array(
							'' => '',
                  			'QC17' => 'QC17 Downtime due to PPM',
                  			);
						?>		
		              	<?php echo form_dropdown('n_QCUptime', $QC_list, set_value('n_QCUptime') , 'class="dropdown n_wi-date2" disabled'); ?>
				</td>
			</tr>
			<tr><td colspan="3" class="ui-bottom-border-color" style="font-weight: bold;">Acceptance</td></tr>
			<tr>
				<td class="td-assest" valign="top">Accepted By : </td>
				<td><input type="text" class="form-control-button2 n_wi-date2" name="n_Accepted_By" value="<?php echo $this->input->post('n_Accepted_By') ?>" readonly></td>
			</tr>
			<tr>
				<td class="td-assest" valign="top">Designation : </td>
				<td>
					<input type="radio" id="radio-1-7" name="n_Designation" class="regular-radio"<?php echo set_radio('n_Designation', 'Doctor',true); ?>disabled/>   
					<label for="radio-1-7"></label> Doctor<br>
					<input type="radio" id="radio-1-8" name="n_Designation" class="regular-radio"<?php echo set_radio('n_Designation', 'Matron',true); ?>disabled/>   
					<label for="radio-1-8"></label> Matron<br>
					<input type="radio" id="radio-1-9" name="n_Designation" class="regular-radio"<?php echo set_radio('n_Designation', 'Medical Assistant',true); ?>disabled/>   
					<label for="radio-1-9"></label> Medical Assistant<br>
					<input type="radio" id="radio-1-10" name="n_Designation" class="regular-radio"<?php echo set_radio('n_Designation', 'IIUM Officer',true); ?>disabled/>   
					<label for="radio-1-10"></label> IIUM Officer<br>
					<input type="radio" id="radio-1-11" name="n_Designation" class="regular-radio"<?php echo set_radio('n_Designation', 'Sister In-Charge',true); ?>disabled/>   
					<label for="radio-1-11"></label> Sister In-Charge<br>
					<input type="radio" id="radio-1-12" name="n_Designation" class="regular-radio"<?php echo set_radio('n_Designation', 'Sister On Duty',true); ?>disabled/>   
					<label for="radio-1-12"></label> Sister On Duty<br>
					<input type="radio" id="radio-1-13" name="n_Designation" class="regular-radio"<?php echo set_radio('n_Designation', 'Specialist',true); ?>disabled/>   
					<label for="radio-1-13"></label> Specialist<br>
					<input type="radio" id="radio-1-14" name="n_Designation" class="regular-radio"<?php echo set_radio('n_Designation', 'Staff Nurse',true); ?>disabled/>   
					<label for="radio-1-14"></label> Staff Nurse<br>
					<input type="radio" id="radio-1-15" name="n_Designation" class="regular-radio"<?php echo set_radio('n_Designation', 'Supervisor',true); ?>disabled/>   
					<label for="radio-1-15"></label> Supervisor<br>
					<input type="radio" id="radio-1-16" name="n_Designation" class="regular-radio" value = "APSB" <?php echo set_radio('n_Designation', 'APSB', TRUE); ?><?= isset($recordppm[0]->V_ACCEPTED_Designation) && $recordppm[0]->V_ACCEPTED_Designation == 'APSB' ? 'checked' : ''?>/>   
					<label for="radio-1-16"></label> APSB<br>
					<input type="radio" id="radio-1-17" name="n_Designation" class="regular-radio" value = "PMSB" <?php echo set_radio('n_Designation', 'PMSB', TRUE); ?><?= isset($recordppm[0]->V_ACCEPTED_Designation) && $recordppm[0]->V_ACCEPTED_Designation == 'PMSB' ? 'checked' : ''?>/>   
					<label for="radio-1-17"></label> PMSB<br>
					<input type="radio" id="radio-1-18" name="n_Designation" class="regular-radio" value = "APFMS" <?php echo set_radio('n_Designation', 'APFMS', TRUE); ?><?= isset($recordppm[0]->V_ACCEPTED_Designation) && $recordppm[0]->V_ACCEPTED_Designation == 'APFMS' ? 'checked' : ''?>/>   
					<label for="radio-1-18"></label> APFMS<br>
				</td>
			</tr>
			<tr>
				<td class="td-assest" valign="top">Acceptance Date : </td>
				<td><input type="text" class="form-control-button2" name="n_Acceptance_Date" value="<?php echo set_value('n_Acceptance_Date') ?>" readonly></td>
			</tr>
			<tr>
				<td class="td-assest" valign="top">Closed By :</td>
				<td><div class="p-vo-2"><span class="ui-left_mobile">Name : </span>
                   <input type="text" id="n_personnel_code1" name="C_jrequestor1" value="<?php echo set_value('C_jrequestor1') ?>" size="10" class="form-control-button2" readonly>
                   <span style="font-size:14px;"><input type="text" id="n_personnel_name1" name="V_jrequestor1" value="<?php echo set_value('V_jrequestor1') ?>" size="10" class="input-none" readonly></span></div></td>
			</tr>
				<?php } ?>
                  <tr class="ui-header-new" style="height:40px;">
                        <td align="center" colspan="2">
                              <input type="submit" class="btn-button btn-primary-button" name="mysubmit" value="Save" style="width:150px;"/>
                              <input type="button" class="btn-button btn-primary-button" name="Cancel" value="Cancel" onclick="window.history.back()" style="width:150px;"/>
                        </td>
                  </tr>
		</table>
		<?php  echo form_hidden('wrk_ord',$this->input->post('wrk_ord')); ?>
            <?php echo form_hidden ('visit',$this->input->post('visit')); ?>
            <!--<?php echo form_hidden('vppm',$this->input->post('vppm')); ?>-->
            <?php echo form_hidden ('n_Visit_Date',$this->input->post('n_Visit_Date')); ?>
            <?php echo form_hidden('n_Shour',$this->input->post('n_Shour'));?>
            <?php echo form_hidden('n_Smin',$this->input->post('n_Smin'));?>
            <?php echo form_hidden('n_Ehour',$this->input->post('n_Ehour'));?>
            <?php echo form_hidden('n_Emin',$this->input->post('n_Emin'));?>
            <?php echo form_hidden('n_Type_of_Work',$this->input->post('n_Type_of_Work'));?>
            <?php echo form_hidden ('n_Action_Taken',$this->input->post('n_Action_Taken')); ?>
            <?php echo form_hidden ('n_rschDate',$this->input->post('n_rschDate')); ?>
            <?php echo form_hidden ('n_rschReason',$this->input->post('n_rschReason')); ?>
            <?php echo form_hidden ('n_rschReason1',$this->input->post('n_rschReason1')); ?>
            <?php echo form_hidden ('n_rschAuth',$this->input->post('n_rschAuth')); ?>
            <?php echo form_hidden ('C_requestor1',$this->input->post('C_requestor1')); ?>      
            <?php echo form_hidden ('V_requestor1',$this->input->post('V_requestor1')); ?>
            <?php echo form_hidden('n_End_Time_h1',$this->input->post('n_End_Time_h1'));?>
            <?php echo form_hidden('n_End_Time_m1',$this->input->post('n_End_Time_m1'));?>
            <?php echo form_hidden('V_rate1',$this->input->post('V_rate1'));?>
            <?php echo form_hidden('T_rate1',$this->input->post('T_rate1'));?>
            <?php echo form_hidden ('C_requestor2',$this->input->post('C_requestor2')); ?>
            <?php echo form_hidden ('V_requestor2',$this->input->post('V_requestor2')); ?>
            <?php echo form_hidden('n_End_Time_h2',$this->input->post('n_End_Time_h2'));?>
            <?php echo form_hidden('n_End_Time_m2',$this->input->post('n_End_Time_m2'));?>
            <?php echo form_hidden('V_rate2',$this->input->post('V_rate2'));?>
            <?php echo form_hidden('T_rate2',$this->input->post('T_rate2'));?>
            <?php echo form_hidden ('C_requestor3',$this->input->post('C_requestor3')); ?>
            <?php echo form_hidden ('V_requestor3',$this->input->post('V_requestor3')); ?>
            <?php echo form_hidden('n_End_Time_h3',$this->input->post('n_End_Time_h3'));?>
            <?php echo form_hidden('n_End_Time_m3',$this->input->post('n_End_Time_m3'));?>
            <?php echo form_hidden('V_rate3',$this->input->post('V_rate3'));?>
            <?php echo form_hidden('T_rate3',$this->input->post('T_rate3'));?>
            <?php echo form_hidden('V_part',$this->input->post('V_part'));?>
            <?php echo form_hidden('V_partRM',$this->input->post('V_partRM'));?>
            <?php echo form_hidden('V_partRate',$this->input->post('V_partRate'));?>
            <?php echo form_hidden('V_parttotal',$this->input->post('V_parttotal'));?>
            <?php echo form_hidden('C_Vendor',$this->input->post('C_Vendor'));?>
            <?php echo form_hidden('V_Vendor',$this->input->post('V_Vendor'));?>	

            <?php  echo form_hidden('chkbox',$this->input->post('chkbox')); ?>
            <?php  echo form_hidden('wrk_ord',$this->input->post('wrk_ord')); ?>
            <?php  echo form_hidden('d_date',$this->input->post('d_date')); ?>
            <?php  echo form_hidden('duedate',$this->input->post('duedate')); ?>
            <?php  echo form_hidden('n_job_Date',$this->input->post('n_Visit_Date')); ?>
            <?php  echo form_hidden('n_JChour',$this->input->post('n_Ehour')); ?>
            <?php  echo form_hidden('n_JCmin',$this->input->post('n_Emin')); ?>    
            <?php  echo form_hidden('n_jobclose_summary',$this->input->post('n_Action_Taken')); ?>      
            <?php  echo form_hidden('n_performance_test',$this->input->post('n_performance_test')); ?>      
            <?php  echo form_hidden('n_safety_test',$this->input->post('n_safety_test')); ?>
            <?php  echo form_hidden('n_safety_result',$this->input->post('n_safety_result')); ?>
            <?php  echo form_hidden('n_job_type',$this->input->post('n_job_type')); ?>
            <?php  echo form_hidden('n_Stoppage',$this->input->post('n_Stoppage')); ?>
            <?php  echo form_hidden('n_PFStartDate',$this->input->post('n_PFStartDate')); ?>
            <?php  echo form_hidden('n_PFStartHH',$this->input->post('n_PFStartHH')); ?>
            <?php  echo form_hidden('n_PFStartNN',$this->input->post('n_PFStartNN')); ?>
            <?php  echo form_hidden('n_PFEndDate',$this->input->post('n_PFEndDate')); ?>
            <?php  echo form_hidden('n_PFEndHH',$this->input->post('n_PFEndHH')); ?>
            <?php  echo form_hidden('n_PFEndNN',$this->input->post('n_PFEndNN')); ?>
            <?php  echo form_hidden('down_time',$this->input->post('down_time')); ?>
            <?php  echo form_hidden('serv_time',$this->input->post('serv_time')); ?>
            <?php  echo form_hidden('QC_PPM',$this->input->post('QC_PPM')); ?>
            <?php  echo form_hidden('n_QCUptime',$this->input->post('n_QCUptime')); ?>
            <?php  echo form_hidden('n_Accepted_By',$this->input->post('n_Accepted_By')); ?>
            <?php  echo form_hidden('n_Designation',$this->input->post('n_Designation')); ?>
            <?php  echo form_hidden('n_Acceptance_Date',$this->input->post('n_Acceptance_Date')); ?>
            <?php echo form_hidden ('C_jrequestor1',$this->input->post('C_jrequestor1')); ?>      
            <?php echo form_hidden ('V_jrequestor1',$this->input->post('V_jrequestor1')); ?>			
	</div>
</div>
<?php echo form_close(); ?>