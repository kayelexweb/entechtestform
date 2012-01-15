<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Test Submission Form</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>

	<?php
//Connect To Database
//$hostname='entechtestform.db.3621715.hostedresource.com';
//$username='entechtestform';
//$password='P@ssw0rd!';
//$dbname='entechtestform';
//$usertable='entechtestform';
//$yourfield = 'job_no';

//mysql_connect($hostname,$username, $password) OR DIE ('Unable to connect to database! Please try again later.');
//mysql_select_db($dbname);
//$query =  'SELECT `job_no` FROM `entechtestform`';
//$result = mysql_insert_id($query);
//$result = mysql_query($query);
//$jobresult = mysql_fetch_array($result);



?>

<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Test Submission Form</a></h1>
		<form id="form_325077" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Test Submission Form</h2>
			<p></p>
		</div>						
			<ul >

<li id="li_0" >
		<label class="description" for="element_0">Job Number: 

<?php echo $jobresult; ?>

</label></li>

			
					<li id="li_1" >
		<label class="description" for="element_1">Date </label>
		<span>
			<input id="element_1_1" name="element_1_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_1_1">MM</label>
		</span>
		<span>
			<input id="element_1_2" name="element_1_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_1_2">DD</label>
		</span>
		<span>
	 		<input id="element_1_3" name="element_1_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_1_3">YYYY</label>
		</span>
	
		<span id="calendar_1">
			<img id="cal_img_1" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_1_3",
			baseField    : "element_1",
			displayArea  : "calendar_1",
			button		 : "cal_img_1",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Test Type </label>
		<div>
		<select class="element select medium" id="element_2" name="element_2"> 
			<option value="" selected="selected"></option>
<option value="1" >Full Scale Test</option>
<option value="2" >Sub Scale Test</option>
<option value="3" >Full Scale Build</option>
<option value="4" >Sub Scale Build</option>

		</select>
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Priority </label>
		<div>
		<select class="element select medium" id="element_3" name="element_3"> 
			<option value="" selected="selected"></option>
<option value="1" >1</option>
<option value="2" >2</option>
<option value="3" >3</option>

		</select>
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Model Type </label>
		<div>
		<select class="element select medium" id="element_4" name="element_4"> 
			<option value="" selected="selected"></option>
<option value="1" >ECS 450</option>
<option value="2" >ECS 480</option>
<option value="3" >ECS 900</option>
<option value="4" >ECS 1200</option>
<option value="5" >ECS 1700</option>
<option value="6" >SO5060</option>
<option value="7" >SO4040</option>
<option value="8" >Solatube</option>
<option value="9" >Orion</option>
<option value="10" >Orion w/Collimator</option>
<option value="11" >SO4040 w/Collimator</option>
<option value="12" >SO4040 Egg Crate Beta (ECB)</option>
<option value="13" >SO5060 Egg Crate Beta (ECB)</option>
<option value="14" >SO4040 Egg Crate 2 (EC2)</option>
<option value="15" >SO5060 Egg Crate 2 (EC2)</option>
<option value="16" >3.5" Wedge</option>
<option value="17" >3" Wedge</option>
<option value="18" >2" Wedge</option>

		</select>
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Dome/Outer Diffuser </label>
		<div>
		<select class="element select medium" id="element_5" name="element_5"> 
			<option value="" selected="selected"></option>
<option value="1" >Frosted</option>
<option value="2" >Clear</option>
<option value="3" >Clear Prismatic</option>
<option value="4" >White Prismatic</option>
<option value="5" >SO CC (Clear Prismatic)</option>
<option value="6" >SO CW (Clear-White Prismatic)</option>
<option value="7" >Shower Door</option>
<option value="8" >None</option>

		</select>
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Reflector/Curb Material </label>
		<div>
		<select class="element select medium" id="element_6" name="element_6"> 
			<option value="" selected="selected"></option>
<option value="1" >Alanod</option>
<option value="2" >Mylar</option>
<option value="3" >Rippled Alanod</option>
<option value="4" >Rippled Mylar</option>
<option value="5" >White Painted</option>
<option value="6" >Aluminum</option>

		</select>
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="element_7">Middle Diffuser (Below SO Curb, Below ECS Dome) </label>
		<div>
		<select class="element select medium" id="element_7" name="element_7"> 
			<option value="" selected="selected"></option>
<option value="1" >Clear</option>
<option value="2" >Clear Film</option>
<option value="3" >Clear Prismatic</option>
<option value="4" >White Prismatic</option>
<option value="5" >Frosted</option>
<option value="6" >Shower Door</option>
<option value="7" >Frosted Film</option>
<option value="8" >10X</option>
<option value="9" >None</option>

		</select>
		</div> 
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Collimator </label>
		<div>
		<select class="element select medium" id="element_8" name="element_8"> 
			<option value="" selected="selected"></option>
<option value="1" >Mylar Collimator</option>
<option value="2" >Alanod Collimator</option>
<option value="3" >None</option>

		</select>
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="325077" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer">
					</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>