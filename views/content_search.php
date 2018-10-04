<?php

if ($this->input->get('parent') == 'asset' or 'contentcontroller/assetsearch/' == $this->uri->slash_segment(1) .$this->uri->slash_segment(2) or 'contentcontroller/assets/' == $this->uri->slash_segment(1) .$this->uri->slash_segment(2)){
	echo "<form action=".$url = site_url('contentcontroller/assetsearch')." method='post' id='myform'>";
	echo "<div class='search-form'>";
	echo "<div class='form-group'>";
	echo "<input type='text' class='form-control login-field' autofocus='autofocus' id='searchquestion' placeholder='Search Assets' name='searchquestion' size='22' style='height:50px;'/>"; 
	echo "<label class='login-field-icon' for='login-pass' style='margin-top:10px;'><span align='center' class='icon-search' style='color:; margin-left:-35px;' id='mylink'></span></label>";
	echo "</div>";
	echo "</div></form>";
}
elseif ($this->input->get('parent') == 'desk' or $this->input->get('desk') or 'contentcontroller/desksearch/' == $this->uri->slash_segment(1) .$this->uri->slash_segment(2) or 'contentcontroller/desk/' == $this->uri->slash_segment(1) .$this->uri->slash_segment(2)){
	echo "<form action=".$url = site_url('contentcontroller/desksearch')." method='post' id='myform'>";
	echo "<div class='search-form'>";
	echo "<div class='form-group'>";
	echo "<input type='text' class='form-control login-field' id='searchquestion' placeholder='Search Help Desk' name='searchquestion' size='22' style='height:50px;'/>"; 
	echo "<label class='login-field-icon' for='login-pass' style='margin-top:10px;'><span align='center' class='icon-search' style='color:; margin-left:-35px;' id='mylink'></span></label>";
	echo "</div>";
	echo "</div></form>";
}
elseif ($this->input->get('work-a') or 'contentcontroller/workorder/' == $this->uri->slash_segment(1) .$this->uri->slash_segment(2) or 'contentcontroller/worksearch/' == $this->uri->slash_segment(1) .$this->uri->slash_segment(2)){
	echo "<form action=".$url = site_url('contentcontroller/worksearch')." method='post' id='myform'>";
	echo "<div class='search-form'>";
	echo "<div class='form-group'>";
	echo "<input type='text' class='form-control login-field' id='searchquestion' placeholder='Search Work Order' name='searchquestion' size='22' style='height:50px;'/>"; 
	echo "<label class='login-field-icon' for='login-pass' style='margin-top:10px;'><span align='center' class='icon-search buzz' style='color:; margin-left:-35px;' id='mylink'></span></label>";
	echo "</div>";
	echo "</div></form>";
}
elseif ($this->input->get('ppm') or 'contentcontroller/catalogppm/' == $this->uri->slash_segment(1) .$this->uri->slash_segment(2)  or 'contentcontroller/ppmsearch/' == $this->uri->slash_segment(1) .$this->uri->slash_segment(2)){
	echo "<form action=".$url = site_url('contentcontroller/ppmsearch')." method='post' id='myform'>";
	echo "<div class='search-form'>";
	echo "<div class='form-group'>";
	echo "<input type='text' class='form-control login-field' id='searchquestion' placeholder='Search PPM ' name='searchquestion' size='22' style='height:50px;'/>"; 
	echo "<label class='login-field-icon' for='login-pass' style='margin-top:10px;'><span align='center' class='icon-search' style='color:; margin-left:-35px;' id='mylink'></span></label>";
	echo "</div>";
	echo "</div></form>";
}
elseif ('contentcontroller/Store/' == $this->uri->slash_segment(1) .$this->uri->slash_segment(2)){
	echo "<form action=".$url = site_url('contentcontroller/Store')." method='post' id='myform'>";
	echo "<div class='search-form'>";
	echo "<div class='form-group'>";
	echo "<input type='text' class='form-control login-field' autofocus='autofocus' id='searchquestion' placeholder='Search Item Catalog' name='searchquestion' size='22' style='height:50px;'/>"; 
	echo "<label class='login-field-icon' for='login-pass' style='margin-top:10px;'><span align='center' class='icon-search' style='color:; margin-left:-35px;' id='mylink'></span></label>";
	echo "</div>";
	echo "</div></form>";
}
elseif ('Procurement?pro=mrin' == str_replace("/", "", $this->uri->slash_segment(1)).'?pro='.$this->input->get('pro')){
	echo "<form action=".$url = site_url('Procurement?pro=mrin')." method='post' id='myform'>";
	echo "<div class='search-form'>";
	echo "<div class='form-group'>";
	echo "<input type='text' class='form-control login-field' value='".$this->input->post('searchquestion')."' autofocus='autofocus' id='searchquestion' placeholder='Search MRIN' name='searchquestion' size='22' style='height:50px;'/>"; 
	echo "<label class='login-field-icon' for='login-pass' style='margin-top:10px;'><span align='center' class='icon-search' style='color:; margin-left:-35px;' id='mylink'></span></label>";
	echo "</div>";
	echo "</div></form>";
}
elseif ('contentcontroller/new_item/' == $this->uri->slash_segment(1) .$this->uri->slash_segment(2)){
	echo "<form action=".$url = site_url('contentcontroller/new_item')." method='post' id='myform'>";
	echo "<div class='search-form'>";
	echo "<div class='form-group'>";
	echo "<input type='text' class='form-control login-field' autofocus='autofocus' id='searchquestion' placeholder='Search Item Catalog' name='searchquestion' size='22' style='height:50px;' value='".$this->input->post('searchquestion')."' />"; 
	echo "<label class='login-field-icon' for='login-pass' style='margin-top:10px;'><span align='center' class='icon-search' style='color:; margin-left:-35px;' id='mylink'></span></label>";
	echo "</div>";
	echo "</div></form>";
}
?>
<?php $array = [['contentcontroller/assets/'],
				['contentcontroller/assetsearch/'],
				['contentcontroller/desksearch/'],
				['contentcontroller/workorder/'],
				['contentcontroller/worksearch/'],
				['contentcontroller/ppmsearch/'],
				['contentcontroller/catalogppm/'],
				['contentcontroller/Store/'],
				['contentcontroller/new_item/'],
				['Procurement?pro=mrin'],
]?>
<?php //echo str_replace("/", "", $this->uri->slash_segment(1)).'?pro='.$this->input->get('pro');die;//echo "<pre>";var_export($array);die;?>
<?php foreach ($array as $list) {?>
<?php if($list[0] == $this->uri->slash_segment(1) .$this->uri->slash_segment(2) || $list[0]==str_replace("/", "", $this->uri->slash_segment(1)).'?pro='.$this->input->get('pro')){?>
<script>
window.onload = function() {
    document.getElementById('mylink').onclick = function() {
        document.getElementById('myform').submit();
        return false;
    };
};
</script>
<?php } }?>
