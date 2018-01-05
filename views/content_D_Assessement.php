<body>
	<div id="Instruction" class="pr-printer">
		<div class="header-pr" style="text-transform:uppercase;">Deduction Assessment Report</div>
		<button onclick="javascript:myFunction('D_Assessement?sev=<?=$this->input->get('sev')?>&mth=<?=$this->input->get('mth')?>&yr=<?=$this->input->get('yr')?>');" class="btn-button btn-primary-button">PRINT</button>
		<button type="cancel" class="btn-button btn-primary-button" onclick="location.href = '<?php base_url();?>acg_report?tabIndex=1';">CANCEL</button>
	</div>
	<div class="">
		<table class="tbl-wo" border="1" align="center" style="border: 1px solid black;margin-top:5px;">
			<tr>
				<td style="padding-left:0px; width:20%;" align="center"><img src="<?php echo base_url(); ?>images/penmedic2.png" style="width:100px; height:30px;"/></td>
				<td>
					<table class="tbl-wo" border="0" align="center">
						<tr>
							<td align="center"><b style="text-transform: uppercase;">Deduction Mapping Report</b></td>
						</tr>
						<tr>
						<?php  if ($service== "FES") {?>
							<td align="center"><b style="text-transform: uppercase;">Facility Engineering Services</b></td>
						<?php  } elseif ($service== "BES") {?>
						  <td align="center"><b style="text-transform: uppercase;">Biomedical Engineering Services</b></td>
						<?php  } elseif ($service== "HKS") {?>
						<td align="center"><b style="text-transform: uppercase;">Housekeeping Services</b></td>
						<?php }?>
						</tr>
					</table>
				</td>
				<td style="padding-left:0px; width:20%;" align="center"><img src="<?php echo base_url(); ?>images/logo.png" style="width:100px; height:40px;"/></td>
			</tr>
		</table>
		<table class="tbl-wo" border="1" align="center" style="border:1px solid black; margin:10 auto;">
			<tr >
				<td style="width:20%; padding-left:5px;">Hospital : </td>
				<td style="width:20%; padding-left:5px; text-align:center;"><?=$this->session->userdata('hosp_code')?> </td>
				<!--<td style="width:20%; padding-left:5px;">Report No </td>
				<td style="padding-left:5px; text-align:center;"> </td>-->
			</tr>
			<tr >
				<!--<td style="padding-left:5px; "></td>
				<td style="padding-left:5px;"> </td>-->
				<td style="padding-left:5px;">Assessment for the Month of</td>
				<td style="padding-left:5px; text-align:center;"><?=$month?>/<?=$year?></td>
			</tr>
		</table>
		<table class="tftable tbl-size" border="" style="text-align:center; width:90%; margin:0 auto; background:white;">
		<tr>
			<th>No</th>
			<th>Key Deduction Indicators</th>
			<th>Weightage</th>
			<th>Parameters</th>
			<th>Indicator Value (RM)</th>
			<th>Ringgit Equivalent</th>
			<th>Demerit Points</th>
			<th>Deduction value (RM)</th>
			<th>Explanation</th>
		</tr>
		<?php $num = 0;?>
		<?php 
						$T_Weightage = 0;
						$T_Parameter = 0;
						$T_MonVal = 0;
						$T_DeductionVal = 0;
						$T_DeductionPer = 0;
						?>
		<?php foreach ($keyindlist as $row): ?>
						<tr class="<?php echo ($num++%2==true ? 'mark' : 'even')?>">
							<td align="center"><?=isset($row->v_IndicatorNo) ? $row->v_IndicatorNo : ''?></td>
							<td align="left"><?=isset($row->v_IndicatorName) ? $row->v_IndicatorName : ''?></td>
							<td align="center"><?=isset($row->n_Weightage) ? $row->n_Weightage : ''?></td>
							<?php //echo $row->n_Weightage;
										//$T_Weightage = $row->n_Weightage + $T_Weightage;
										$DeductionVal = 0; 
							      $DeductionPer = 0; ?>
							<?php if ($acgparam) { ?>
							<?php foreach ($acgparam as $acg): ?>
							<?php if ($row->v_IndicatorNo == $acg->v_IndicatorNo) { ?>
							<td align="center"><?=isset($acg->v_Paramval) ? $acg->v_Paramval : ''?></td>
							<td align="center"><?=isset($acg->n_Parameters) ? number_format($acg->n_Parameters,2) : ''?></td>
							<?php $indno = 'ind'.$row->v_IndicatorNo?>
							<td align="center"><?=number_format($acg->n_Parameters/$acg->v_Paramval,2)?></td>
							<?php
							$Parameter = isset($acg->v_Paramval) ? $acg->v_Paramval : 0;
							$MonValue = isset($acg->n_Parameters) ? $acg->n_Parameters : 0;
							$DemeritPoint = isset($acgreport[0]->$indno) ? $acgreport[0]->$indno : 0;

							$DeductionVal = ($MonValue / $Parameter) * $DemeritPoint;
							$DeductionPer = ($DeductionVal / $MonValue) * 100;

							$T_Parameter += $Parameter;
							$T_MonVal += $MonValue;
							$T_DeductionVal += $DeductionVal;
							$T_DeductionPer += $DeductionPer;
							?> 
							<?php } ?>
							<?php endforeach; ?>
							<?php } else { ?>
							<td align="center"></td>
							<td align="center"></td>
							<?php $indno = 'ind'.$row->v_IndicatorNo?>
							<td align="center"><?=isset($acgreport[0]->$indno) ? $acgreport[0]->$indno : ''?></td>
							<?php } ?>
							<td align="center"><?=number_format($DeductionVal,2)?></td>
							<td align="center"><?=number_format($DeductionPer,2).'%'?></td>
							<?php 
							$n_Weightage = isset($row->n_Weightage) ? $row->n_Weightage : 0;
							$T_Weightage += $n_Weightage;
							?>
							<td align="center"></td>
						</tr>
						<?php endforeach; ?>
		
			<td align="center" colspan="9" style="border-left:1px solid white; border-right:1px solid white; background:white; padding:2px; font-size:1px;">&nbsp;</td>
		</tr>
		<tr>
			<td align="center"></td>
			<td align="center" style="font-weight:bold;">Total</td>
			<td align="center"><?=$T_Weightage?></td>
			<td align="center"></td>
			<td align="center"><?=$T_MonVal?></td>
			<td align="center"></td>
			<td align="center"></td>
			<td align="center"><?=$T_DeductionPer?></td>
			<td align="center"></td>
		</tr>
		<tr>
			<td align="center" colspan="9" style="border-left:1px solid white; border-right:1px solid white; background:white; padding:2px; font-size:1px;">&nbsp;</td>
		</tr>
		<tr>
			<td align="left" colspan="9">Remarks : </td>
		</tr>
		<tr>
			<td align="left" colspan="9" style="padding-left:5px; height:50px;" valign="top"></td>
		</tr>
	</table>
	<table class="tftable tbl-size" border="1" align="center" style="border:1px solid black; margin:10 auto; width:90%;">
			<tr >
				<td style="width:20%; padding-left:5px;">Prepared by : </td>
				<td style="width:20%;" align="center"> </td>
				<td style="width:20%; padding-left:5px;" >Verified By :</td>
				<td style="padding-left:5px; text-align:center;"></td>
			</tr>
			<tr >
				<td style="padding-left:5px; ">Signature</td>
				<td style="padding-left:5px;" align="center"> </td>
				<td style="padding-left:5px;">Signature</td>
				<td style="padding-left:5px; text-align:center;"></td>
			</tr>
			<tr >
				<td style="padding-left:5px; ">Designation</td>
				<td style="padding-left:5px;" align="center"> </td>
				<td style="padding-left:5px;">Designation</td>
				<td style="padding-left:5px; text-align:center;"></td>
			</tr>
			<tr >
				<td style="padding-left:5px; ">Date</td>
				<td style="padding-left:5px;" align="center"> </td>
				<td style="padding-left:5px;">Date</td>
				<td style="padding-left:5px; text-align:center;"></td>
			</tr>
		</table>
	</div>
	<div class="StartNewPage" id="breakpage"><span id="pagebreak">Page Break</span></div>
	</body>
</html>

