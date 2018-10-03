<tr class="ui-left_web">
	<?php 
	// $selectedtab = $this->input->get('tab');
	$selectedtab = $mrintype;
	if ($selectedtab == 0) {
		$selectedtab = 3;
	} elseif ($selectedtab == 3) {
		$selectedtab = 0;
	}

	if( $tab ) $selectedtab = $tab;
	// echo "<p style='color:black'>$selectedtab</p>";
	?>
	<?= ($selectedtab == '0') ? '<td class="ui-highlight" align="center" colspan="0" style=" height:30px; width:25%;">' : '<td class="ui-content-menu-desk-color" align="center" colspan="0" style=" height:30px; width:25%;">'?>
	<?php echo anchor ('Procurement?pro=mrin&tab=0'.'&y='.$year.'&m='.$month, 'Pending MRIN'); ?></td>
	<?= ($selectedtab == '1') ? '<td class="ui-highlight" align="center" colspan="0" style="height:30px; width:25%;">' : '<td class="ui-content-menu-desk-color" align="center" colspan="0" style="width:25%;">'?>
	<?php echo anchor ('Procurement?pro=mrin&tab=1'.'&y='.$year.'&m='.$month, 'Approved MRIN'); ?></td>
	<?= ($selectedtab == '2') ? '<td class="ui-highlight" align="center" colspan="0" style="width:25%;">' : '<td class="ui-content-menu-desk-color" align="center" colspan="0" style="width:25%;">'?>
	<?php echo anchor ('Procurement?pro=mrin&tab=2'.'&y='.$year.'&m='.$month, 'Rejected, Returned MRIN'); ?></td>
	<?= ($selectedtab == '3') ? '<td class="ui-highlight" align="center" colspan="0" style="width:25%;">' : '<td class="ui-content-menu-desk-color" align="center" colspan="0" style="width:25%;">'?>
	<?php echo anchor ('Procurement?pro=mrin&tab=3'.'&y='.$year.'&m='.$month, 'All MRIN'); ?></td>
</tr>
<tr class="ui-middle-color">
	<td class="ui-left_mobile">
<?php


// if (!is_null($this->input->get('desk'))){//buzlee comment this statement on 01/10/2018
	/*if ($this->input->get('desk') == 0){ 
		// echo "<table class='ui-mobile-content-header' border='0' align='center'>";
		// echo "<tr>";
		// echo "<td style='width:20px;'>";
		// //echo anchor ('contentcontroller/qap3','<span class="icon-arrow-left"></span>');
		// echo "</td>";
		// echo "<td align='center'>";
		// echo $tulis;
		// echo"</td>";
		// echo "<td align='right' style='width:20px;'>";
		// echo anchor ('contentcontroller/desk?deskno='.$this->input->get('deskno').'&desk=1'.'&y='.$year.'&m='.$month,'<span class="icon-arrow-right"></span>');
		// echo "</td>"; 
		// echo "</tr>";
		// echo "</table>";
		echo "<div class='divmenu'>";
		echo "<div class='divmenuleft'>";
		echo "</div>";
		echo $tulis;
		echo "<div class='divmenuright'>";
		echo anchor ('contentcontroller/desk?deskno='.$this->input->get('deskno').'&desk=1'.'&y='.$year.'&m='.$month,'<span class="icon-arrow-right"></span>');
		echo "</div>";
		echo "</div>";
	}
	elseif($this->input->get('desk') == 1){
		// echo "<table class='ui-mobile-content-header' border='0' align='center'>";
		// echo "<tr>";
		// echo "<td style='width:20px;'>";
		// echo anchor ('contentcontroller/desk?deskno='.$this->input->get('deskno').'&desk=0'.'&y='.$year.'&m='.$month,'<span class="icon-arrow-left"></span>');
		// echo "</td>";
		// echo "<td align='center'>";
		// echo $tulis;
		// echo"</td>";
		// echo "<td align='right' style='width:20px;'>";
		// echo anchor ('contentcontroller/desk?deskno='.$this->input->get('deskno').'&desk=2'.'&y='.$year.'&m='.$month,'<span class="icon-arrow-right"></span>');
		// echo "</td>"; 
		// echo "</tr>";
		// echo "</table>";
		echo "<div class='divmenu'>";
		echo "<div class='divmenuleft'>";
		echo anchor ('contentcontroller/desk?deskno='.$this->input->get('deskno').'&desk=0'.'&y='.$year.'&m='.$month,'<span class="icon-arrow-left"></span>');
		echo "</div>";
		echo $tulis;
		echo "<div class='divmenuright'>";
		echo anchor ('contentcontroller/desk?deskno='.$this->input->get('deskno').'&desk=2'.'&y='.$year.'&m='.$month,'<span class="icon-arrow-right"></span>');
		echo "</div>";
		echo "</div>";
	}
	elseif($this->input->get('desk') == 2){
		// echo "<table class='ui-mobile-content-header' border='0' align='center'>";
		// echo "<tr>";
		// echo "<td style='width:20px;'>";
		// echo anchor ('contentcontroller/desk?deskno='.$this->input->get('deskno').'&desk=1'.'&y='.$year.'&m='.$month,'<span class="icon-arrow-left"></span>');
		// echo "</td>";
		// echo "<td align='center'>";
		// echo $tulis;
		// echo"</td>";
		// echo "<td align='right' style='width:20px;'>";
		// //echo anchor ('contentcontroller/desk?deskno='.$this->input->get('deskno').'&desk=3'.'&y='.$year.'&m='.$month,'<span class="icon-arrow-right"></span>');
		// echo "</td>"; 
		// echo "</tr>";
		// echo "</table>";
		echo "<div class='divmenu'>";
		echo "<div class='divmenuleft'>";
		echo anchor ('contentcontroller/desk?deskno='.$this->input->get('deskno').'&desk=1'.'&y='.$year.'&m='.$month,'<span class="icon-arrow-left"></span>');
		echo "</div>";
		echo $tulis;
		echo "<div class='divmenuright'>";
		echo "</div>";
		echo "</div>";
	}*/

	// echo $tab;die();
	if ($selectedtab == 0){
		echo "<div class='divmenu'>";
		echo "<div class='divmenuleft'>";
		echo "</div>";
		echo $tulis;
		echo "<div class='divmenuright'>";
		echo anchor ('Procurement?pro=mrin&tab=1'.'&y='.$year.'&m='.$month, '<span class="icon-arrow-right"></span>');
		echo "</div>";
		echo "</div>";
	}elseif($selectedtab == 1){
		echo "<div class='divmenu'>";
		echo "<div class='divmenuleft'>";
		echo anchor ('Procurement?pro=mrin&tab=0'.'&y='.$year.'&m='.$month, '<span class="icon-arrow-left"></span>');
		echo "</div>";
		echo $tulis;
		echo "<div class='divmenuright'>";
		echo anchor ('Procurement?pro=mrin&tab=2'.'&y='.$year.'&m='.$month, '<span class="icon-arrow-right"></span>');
		echo "</div>";
		echo "</div>";
	}elseif($selectedtab == 2){
		echo "<div class='divmenu'>";
		echo "<div class='divmenuleft'>";
		echo anchor ('Procurement?pro=mrin&tab=1'.'&y='.$year.'&m='.$month, '<span class="icon-arrow-left"></span>');
		echo "</div>";
		echo $tulis;
		echo "<div class='divmenuright'>";
		echo anchor ('Procurement?pro=mrin&tab=3'.'&y='.$year.'&m='.$month, '<span class="icon-arrow-right"></span>');
		echo "</div>";
		echo "</div>";
	}elseif($selectedtab == 3){
		echo "<div class='divmenu'>";
		echo "<div class='divmenuleft'>";
		echo anchor ('Procurement?pro=mrin&tab=2'.'&y='.$year.'&m='.$month, '<span class="icon-arrow-left"></span>');
		echo "</div>";
		echo $tulis;
		echo "<div class='divmenuright'>";
		echo "</div>";
		echo "</div>";
	}
// }
?>
	</td>
</tr>


			