<html>
<?php
include('../orgpage/session.php');
?>
	<head>
		<meta charset="UTF-8">
		<title>Create Thread</title>
		<link href="css/form.css" rel="stylesheet" type="text/css">
		<script src="js/validation.js"></script>
	</head>
<body class="zf-backgroundBg" >

	<!-- Change or deletion of the name attributes in the input tag will lead to empty values on record submission-->
	<div class="zf-templateWidth">
		<form action='thread_save.php' name='form' method='POST' onSubmit='javascript:document.charset="UTF-8"; return zf_ValidateAndSubmit();' accept-charset='UTF-8' enctype='multipart/form-data' id='form'>
		<input type="hidden" name="zf_referrer_name" value="">
		<!-- To Track referrals , place the referrer name within the " " in the above hidden input field -->
		<input type="hidden" name="zf_redirect_url" value="">
		<!-- To redirect to a specific page after record submission , place the respective url within the " " in the above hidden input field -->
		<div class="zf-templateWrapper">
			<!---------template Header Starts Here---------->
			<ul class="zf-tempHeadBdr">
				<li class="zf-tempHeadContBdr">
				<h2 class="zf-frmTitle"><em>Create Thread</em></h2>
				<p class="zf-frmDesc">Please fill in the details of the event!!</p>
				<div class="zf-clearBoth">
				</div>
				</li>
			</ul>
			<!---------template Header Ends Here---------->
			
			<!---------template Container Starts Here---------->
	<div class="zf-subContWrap zf-leftAlign">
	<ul>
		
		<!---------Single Line Starts Here---------->
		
		<li class="zf-tempFrmWrapper zf-medium">
		<label class="zf-labelName">	Event title 	<em class="zf-important">*</em>		</label>
		<div class="zf-tempContDiv">
			<span> 
				<input type="text" name="event_name" checktype="c1" value="" maxlength="255" invlovedinsalesiq=false />
			</span>
			<p id="SingleLine_error" class="zf-errorMessage" style="display:none;">	 Invalid value	</p>
		</div>
		<div class="zf-clearBoth">	</div>
		</li>
		
		<!---------Single Line Ends Here---------->
		
		
		<!---------Multiple Line Starts Here---------->
		<li class="zf-tempFrmWrapper zf-large">
		<label class="zf-labelName">	Event Description 	<em class="zf-important">*</em>		</label>
		<div class="zf-tempContDiv">
			<span>
				<textarea name="event_description" checktype="c1" maxlength="65535">	</textarea>
			</span>
			<p id="MultiLine_error" class="zf-errorMessage" style="display:none;">	Invalid value	</p>
			<p class="zf-instruction">Provide a detailed description of the event.</p>
		</div>	
		<div class="zf-clearBoth"></div>
		</li>
		<!---------Multiple Line Ends Here---------->
			
		<!---------Dropdown Starts Here---------->
		<li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">Club/Department Name	<em class="zf-important">*</em>	</label>
		<div class="zf-tempContDiv">
			<select class="zf-form-sBox" name="club_name" checktype="c1">
			   <option selected="true" value="-Select-">-Select-</option>
			   <option value="cap & nature">CAP & Nature</option>
			   <option value="fine arts">Fine arts</option>
			   <option value="tamil mandram">Tamil Mandram</option>
			   <option value="the bridge">The Bridge</option>
			   <option value="englist literary society">Englist Literary Society</option>
			   <option value="tech music">Tech Music</option>
			   <option value="dramatics">Dramatics</option>
			   <option value="martial arts">Martial Arts</option>
			   <option value="rotaract">Rotaract</option>
			   <option value="entrepreneurs club">Entrepreneurs Club</option>
			   <option value="astronomy">Astronomy</option>
			   <option value="pathshala">Pathshala</option>
			   <option value="global leaders forum">Global Leaders Forum</option>
			   <option value="higher education forum">Higher education forum</option>
			   <option value="animal welfare">Animal Welfare</option>	
			   <option value="women development cell">Women Development Cell</option>
			   <option value="association of senior quizzers">Association Of Senior Quizzers</option>
			   <option value="student research council">Student research council</option>
			   <option value="industry interaction forum">Industry Interaction Forum</option>
			   <option value="radio hub">Radio Hub</option>
			   <option value="book readers club">Book Readers Club</option>	
			   
			  
			   <option value="apparel and fasion design">Apparel & fashion Design</option>
			   <option value="applied mathematics and computational sciences">Applied Mathematics & Computational Sciences</option>
			   <option value="applied science">Applied Science</option>
			   <option value="automobile engineering">Automobile Engineering</option>
			   <option value="bio technology">Bio-Technology</option>
			   <option value="biomedical engineering">Biomedical Engineering</option>
			   <option value="chemistry">Chemistry</option>
			   <option value="civil engineering">Civil Engineering</option>
			   <option value="computer sciences">Computer Applications</option>
			   <option value="computer science and engineering">Computer Science & Engineering</option>
			   <option value="electrical and electronics engineering">Electrical & Electronics Engineering</option>
			   <option value="electronics and commmunication engineering">Electronics & Communication Engineering</option>
			   <option value="english">English</option>
			   <option value="fashion technology">Fashion Technology</option>
			   <option value="humanities">Humanities</option>
			   <option value="information technology">Information Technology</option>
			   <option value="instrumentation and control system engineering">Instrumentation & Control System Engineering</option>
			   <option value="mathematics">Mathematics</option>
			   <option value="mechanical engineering">Mechanical Engineering</option>
			   <option value="metallurgical engineering">Metallurgical Engineering</option>
			   <option value="physics">Physics</option>
			   <option value="production engineering">Production Engineering</option>
			   <option value="robotics and automation engineering">Robotics & Automation Engineering</option>
			   <option value="textile technology">Textile Technology</option>
			   <option value="management sciences">Management Sciences</option>
			   <option value="physiccal education">Physical Education</option>
			</select>
			<p id="Dropdown_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
		</div>
		<div class="zf-clearBoth"></div>
		</li>
		<!---------Dropdown Ends Here---------->
		

		<!---------Date and Time Starts Here---------->      
		<li class="zf-tempFrmWrapper zf-date zf-time">	
		<label class="zf-labelName">Date and Time 	<em class="zf-important">*</em></label>
		<div class="zf-tempContDiv">	
			<span class="zf-subDate"> 
			
				<input type="date" name="conddate" value="<?php echo date('Y-m-d'); ?>" />
			</span>
			<span>
			<input type="time" name="condtime" value="<?php echo date('H:i A'); ?>" />
			</span>
			<div class="zf-clearBoth"> </div>
				<p id="DateTime_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
			</div>
			<div class="zf-clearBoth"> </div>
		</li>
		<!---------Date and Time Ends Here---------->      

		<!---------Dropdown Starts Here---------->
		<li class="zf-tempFrmWrapper zf-small">
		<label class="zf-labelName">	Availability	<em class="zf-important">	*	</em>	</label>
		<div class="zf-tempContDiv">
			<select class="zf-form-sBox" name="availability" id="eavail" checktype="c1">
				<option selected="true" value="-Select-">-Select-</option>
				<option value="To All">To All</option>
				<option value="Specific Club">Specific Club</option>
				<option value="Specific Department">Specific Department</option>
			</select><p id="Dropdown1_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
		</div>
		<div class="zf-clearBoth"></div>
		</li>
		<!---------Dropdown Ends Here---------->
		
		<!--fileupload-->
		<li class="zf-tempFrmWrapper zf-small">
							
						<label class="zf-labelName">Upload image<em class="zf-important">*	</em></label>				
						<input type="file"  name="fileToUpload" id="fileToUpload"/>
						
					
					<div class="zf-clearBoth"></div>
</li>
	

	
		<!---------c_id Starts Here---------->  
		<li class="zf-tempFrmWrapper zf-medium">
		<label class="zf-labelName"> Conductor ID	<em class="zf-important">*</em>		</label>
		<div class="zf-tempContDiv">
			<span> 
				<input type="text" name="cid" id="cid" value="" maxlength="255" invlovedinsalesiq=false />
			</span>
			<p id="SingleLine_error" class="zf-errorMessage" style="display:none;">	 Invalid value	</p>
		</div>
		<div class="zf-clearBoth">	</div>
		</li>
		<!---------Cid Ends Here----------> 
		
		<li class="zf-tempFrmWrapper zf-medium">
		<label class="zf-labelName"> Venue	<em class="zf-important">*</em>		</label>
		<div class="zf-tempContDiv">
			<span> 
				<input type="text" name="venue" id="venue" value="" maxlength="255" invlovedinsalesiq=false />
			</span>
			<p id="SingleLine_error" class="zf-errorMessage" style="display:none;">	 Invalid value	</p>
		</div>
		<div class="zf-clearBoth">	</div>
		</li>		
		<!--tags-->
		
		<li class="zf-tempFrmWrapper zf-small">
		<label class="zf-labelName">Tags </label>
		<span style="float:left;padding:30px;"> 
			<input type="checkbox" name="etag[]" id="etag" value="quiz"> Quiz<br>
			<input type="checkbox" name="etag[]" id="etag" value="tamil"> Tamil<br>
			<input type="checkbox" name="etag[]" id="etag" value="english"> English<br>
			<input type="checkbox" name="etag[]" id="etag"  value="code"> Coding<br>
			<input type="checkbox" name="etag[]" id="etag" value="fun"> Fun<br>
			<input type="checkbox" name="etag[]" id="etag" value="art"> Art<br>
			<input type="checkbox" name="etag[]" id="etag" value="music"> Music<br>
			<input type="checkbox" name="etag[]" id="etag" value="dance"> Dance<br>
			<input type="checkbox" name="etag[]" id="etag" value="aptitude"> Aptitude<br>
			<input type="checkbox" name="etag[]" id="etag" value="technical">Technical <br>
			
		</span> 
		</div>
		<div class="zf-clearBoth"></div>
		</li>
		
	</ul>
	</div>
	
	<!---------template Container Starts Here---------->
		<ul>
			<li class="zf-fmFooter">
			<button class="zf-submitColor" >Submit</button>
			</li>
		</ul>
	</div>
	<!-- 'zf-templateWrapper' ends -->
	</form>
	</div><!-- 'zf-templateWidth' ends -->
		<script type="text/javascript">
		var zf_DateRegex = new RegExp("^(([0][1-9])|([1-2][0-9])|([3][0-1]))[-](Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec|JAN|FEB|MAR|APR|MAY|JUN|JUL|AUG|SEP|OCT|NOV|DEC)[-](?:(?:19|20)[0-9]{2})$");
		var zf_MandArray = [ "SingleLine", "MultiLine", "Dropdown", "Radio", "DateTime_date", "DateTime_hours", "DateTime_minutes", "DateTime_meridiem", "Dropdown1", "FileUpload", "Number"]; 
		var zf_FieldArray = [ "SingleLine", "MultiLine", "Dropdown", "Radio", "DateTime_date", "DateTime_hours", "DateTime_minutes", "DateTime_meridiem", "Dropdown1", "FileUpload", "Number", "Email"]; 
		var isSalesIQIntegrationEnabled = false;
		</script>
</body>
</html>