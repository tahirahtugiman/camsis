<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ajaxspw extends CI_Controller {
	public function masukdata(){	   
	   $m = ($this->input->get('m') <> 0) ? sprintf("%02d", $this->input->get('m')) : date("m");
	   $y = ($this->input->get('y') <> 0) ? $this->input->get('y') : date("Y");	
	//echo 'testt';
		 //$m = (($this->input->post('m')) < 10) ? '0'.$this->input->post('m') : $this->input->post('m');
	
	       $week1 = (($this->input->post('week1')) != '') ? $this->input->post('week1') : NULL;
	       $week2 = (($this->input->post('week2')) != '') ? $this->input->post('week2') : NULL;
	       $week3 = (($this->input->post('week3')) != '') ? $this->input->post('week3') : NULL;
	       $week4 = (($this->input->post('week4')) != '') ? $this->input->post('week4') : NULL;
	   //$date_cap = array('dept_code'=>$_POST['dept'],'dept_code'=>$_POST['dept'],'week_2'=>$week2,'week_4'=>$week4,'month'=>$m,'year'=>$this->input->post('y'));
	      $id = ($this->input->post('id')) ? $this->input->post('id') : '';
		   if($this->input->post('worksscope')){
		   //$date_cap = array('dept_code'=>'WGS2','loc_code'=>'7-WGS2-001','work_scope'=>$this->input->post('worksscope'),'id'=>'null');
		   $date_cap = array('dept_code'=>$this->input->post('dept'),'loc_code'=>$this->input->post('loc'),'work_scope'=>$this->input->post('worksscope'),'id'=>$id,'month'=>$m,'year'=>$y);
		   }
		   else if ($this->input->post('freq')){
		   //$date_cap = array('dept_code'=>'WGS2','loc_code'=>'7-WGS2-001','frequency'=>$this->input->post('freq'),'id'=>$id);
		   $date_cap = array('dept_code'=>$this->input->post('dept'),'loc_code'=>$this->input->post('loc'),'frequency'=>$this->input->post('freq'),'id'=>$id,'month'=>$m,'year'=>$y);
		   }
		    else if ($this->input->post('rmk')){
		   //$date_cap = array('dept_code'=>'WGS2','loc_code'=>'7-WGS2-001','frequency'=>$this->input->post('freq'),'id'=>$id);
		   $date_cap = array('dept_code'=>$this->input->post('dept'),'loc_code'=>$this->input->post('loc'),'remarks'=>$this->input->post('rmk'),'id'=>$id,'month'=>$m,'year'=>$y);
		   }else {
		     $date_cap = array('dept_code'=>$this->input->post('dept'),'loc_code'=>$this->input->post('loc'),'week_1'=>$week1,'week_2'=>$week2,'week_3'=>$week3,'week_4'=>$week4,'id'=>$id);
		   }
		   

		   //echo "<pre>";
		  // print_r($date_cap);
		  //exit();
		    $this->load->model('insert_model');
			$this->insert_model->ins_spw($date_cap);
			echo json_encode($date_cap);
		
	}
	
	public function keluardata(){
	$this->load->model("get_model");
	$data['records'] = $this->get_model->get_sch_spw($this->input->post('dept_code'),$this->input->post('loc_code'),$this->input->post('month'),$this->input->post('year'));
	$data['records2'] = $this->get_model->monthplan2($this->input->post('year'),$this->input->post('month'),$this->input->post('dept_code'));
	$tes = array();
	$tes2 = array();
	$i = 1;
	$x = 1;
	$xno = 0;
	$numberid = 0;
    $dept = $this->input->post('dept_code');
	$loc = $this->input->post('loc_code');
	$m = $this->input->post('month');
	$y = $this->input->post('year');

		foreach ($data['records'] as $row){
		$numberid++;
		$xno = $x++;
		$id = $row->id;
	    $tes2[]=$row->work_scope;
	echo "<tr>";
	echo "<td contenteditable='true'>".$i++."</td>";
	echo "<td class='jom_".$numberid."' contenteditable='true' >".$row->work_scope."</td>";
	echo "<td class='jom2_".$numberid."' contenteditable='true'>".$row->frequency."</td>";
	echo "<td contenteditable='true'><input type='date'  id='week1_".$numberid."' value='".set_value('week_1', ($row->week_1) <> '' ? date('Y-m-d',strtotime($row->week_1)) : '').
    "' style='width:80%;display:inline-block;' onchange='myfungsi(`".$id."`,`".$numberid."`)'></td>";
	echo "<td contenteditable='true'><input type='date'  id='week2_".$numberid."' value='".set_value('week_2', ($row->week_2) <> '' ? date('Y-m-d',strtotime($row->week_2)) : '').
     "' style='width:80%;display:inline-block;' onchange='myfungsi(`".$id."`,`".$numberid."`)'></td>";
	echo "<td contenteditable='true'><input type='date'  id='week3_".$numberid."' value='".set_value('week_3', ($row->week_3) <> '' ? date('Y-m-d',strtotime($row->week_3)) : '').
     "' style='width:80%;display:inline-block;' onchange='myfungsi(`".$id."`,`".$numberid."`)'></td>";
	 	echo "<td contenteditable='true'><input type='date'  id='week4_".$numberid."' value='".set_value('week_4', ($row->week_4) <> '' ? date('Y-m-d',strtotime($row->week_4)) : '').
     "' style='width:80%;display:inline-block;' onchange='myfungsi(`".$id."`,`".$numberid."`)'></td>";
	echo "<td class='jom3_".$numberid."' contenteditable='true'>".$row->remarks."</td>";

			echo "</tr>";	  
	
	echo "<script>
	var timeout = null;
	   	$('.jom_".$numberid."').on('input',function() {
var worksscope = $(this).text();
var id = ".$id.";
var dept = '".$dept."';
var loc = '".$loc."';
var m = '".$m."';
var y = '".$y."';

	   clearTimeout(timeout);

    // Make a new timeout set to go off in 800ms
    timeout = setTimeout(function () {
   $.post('".base_url('index.php/ajaxspw/masukdata')."',
        {
          worksscope: worksscope,
           id: id,
           dept : dept,
           loc : loc,		   
        },
        function(data,status){
	
        //alert(loc);    
		
		//alert(worksscope);
          if (worksscope == 'del'){
		fetch_data('".$dept."','".$loc."','".$m."','".$y."');
		}
        });	
	}, 500);
	
	

   });
</script>	
	";
	
	echo "<script>
	var timeout = null;
	   	$('.jom2_".$numberid."').on('input',function() {
var freq = $(this).text();
var id = ".$row->id.";
var dept = '".$dept."';
var loc = '".$loc."';

	   clearTimeout(timeout);

    // Make a new timeout set to go off in 800ms
    timeout = setTimeout(function () {
   $.post('";
   
   echo base_url('index.php/ajaxspw/masukdata');
   
   echo "',
        {
          freq: freq,
          id: id,
           dept : dept,
           loc : loc		  
        },
        function(data,status){
		//alert(loc);
          
		//fetch_data('WGS2','7-WGS2-001');
        });	
	}, 500);
	
	

   });
</script>	
	";
	
	echo "<script>
	var timeout = null;
	   	$('.jom3_".$numberid."').on('input',function() {
var rmk = $(this).text();
var id = ".$row->id.";
var dept = '".$dept."';
var loc = '".$loc."';

	   clearTimeout(timeout);

    // Make a new timeout set to go off in 800ms
    timeout = setTimeout(function () {
   $.post('";
   
   echo base_url('index.php/ajaxspw/masukdata');
   
   echo "',
        {
          rmk: rmk,
          id: id,
           dept : dept,
           loc : loc		  
        },
        function(data,status){
		//alert(loc);
          
		//fetch_data('WGS2','7-WGS2-001');
        });	
	}, 500);
	
	

   });
</script>	
	";	
		
	}
				if($data['records2'] ){

	for ($it = 1; $it <= $xno; $it++) {
//echo $i;
$tes[] = $it;
}

  foreach ($data['records2'] as  $index => $row2){


  //echo "The number is".$i;
  
if(in_array($row2->scope_name, $tes2))
{continue;}

/* elseif($index == 2 && $row2->Work_Code == 'HD')
{continue;}  */

	echo '<tr>
				<td>'.$i++.'</td>
				<td class="test_0">'.$row2->scope_name.'</td>
				<td contenteditable="false"></td>
				<td contenteditable="false"></td>
				<td contenteditable="false"></td>
				<td contenteditable="false"></td>
				<td contenteditable="false"></td>
				<td contenteditable="false"></td>
			</tr>';

		
		// if ($i > (9) && ) break;
				}

	}	

	echo '<tr>
				<td>'.$i.'</td>
				<td class="jom_0" contenteditable="true"></td>
				<td contenteditable="false"></td>
				<td contenteditable="false"></td>
				<td contenteditable="false"></td>
				<td contenteditable="false"></td>
				<td contenteditable="false"></td>
				<td contenteditable="false"></td>
			</tr>';	
   	
	
		echo "<script>
				var timeout = null;
	   	$('.test_0').click(function(){
var worksscope = $(this).text();
var id = 'NULL';
var dept = '".$dept."';
var loc = '".$loc."';
var m = '".$m."';
var y = '".$y."';
   clearTimeout(timeout);

    // Make a new timeout set to go off in 800ms
    timeout = setTimeout(function () {
   $.post('".base_url('index.php/ajaxspw/masukdata')."',
        {
          worksscope: worksscope,
           id: id,
           dept : dept,
           loc : loc,
           month :m,
           year :y		   
        },
        function(data,status){
	
         //alert(id);    
		
		//alert(worksscope);
          
		fetch_data(dept,loc,m,y);
        });	
	}, 500);
	
	
   });
</script>	
	";
	
	
	
				echo "<script>
				var timeout = null;
	   	$('.jom_0').on('input',function() {
var worksscope = $(this).text();
var id = 'NULL';
var dept = '".$dept."';
var loc = '".$loc."';
var m = '".$m."';
var y = '".$y."';


	   clearTimeout(timeout);

    // Make a new timeout set to go off in 800ms
    timeout = setTimeout(function () {
   $.post('".base_url('index.php/ajaxspw/masukdata')."',
        {
          worksscope: worksscope,
           id: id,
           dept : dept,
           loc : loc,
           month :m,
           year :y		   
        },
        function(data,status){
	
         //alert(id);    
		
		//alert(worksscope);
          
		fetch_data(dept,loc,m,y);
        });	
	}, 500);
	
	

   });
</script>	
	";
	
			
			
	}
}
?>