<?php  
session_start();
ob_start();

//define variables and set to empty values; this is for error messages
$classErr = $instErr = $rmErr = "";
$e = 0;


//initialize session variables 
$_SESSION['class'] = "";
$_SESSION['instructor'] = "";
$_SESSION['room'] = "";
$_SESSION['mon'] = "";
$_SESSION['tues'] = "";
$_SESSION['wed'] = "";
$_SESSION['thurs'] = "";
$_SESSION['fri'] = "";
$_SESSION['stime'] = "";
$_SESSION['etime'] = "";



//validation goes here
//if class has already been assigned
//if teacher already has class at same time and day
//if room already has been assigned at same time and day
//
?>

<!--nav bar using only html/css-->
<div class="sidebar">
	<form class="form-inline" role="form" method="post" action="tc116.php">
			<div class="form-group">
				<label for="course"><strong>Course:</strong></label>
				<select class="form-control" id="course" name="class">
					<option value="102">IT 101</option>
					<option value="114">IT 102</option>
				    <option value="114">IT 114</option>
				    <option value="121">IT 121</option>
				    <option value="135">IT 135</option>
				    <option value="141">IT 141</option>
				    <option value="175">IT 175</option>
				    <option value="178">IT 178</option>
				    <option value="190">IT 190</option>
				    <option value="201">IT 201</option>
				    <option value="210">IT 210</option>
				    <option value="245">IT 245</option>
				    <option value="290">IT 290</option>
				    <option value="301">IT 301</option>
				    <option value="305">IT 305</option>
				    <option value="335">IT 335</option>
				    <option value="344">IT 344</option>
				    <option value="355">IT 355</option>
				    <option value="385">IT 385</option>
				    <option value="390">IT 390</option>
				    <option value="405">IT 405</option>
				    <option value="426">IT 426</option>		        			
				</select>
			</div>
			
			<div class="form-group">
				<label for="inst"><strong>Instructor:</strong></label>
				<select class="form-control" id="inst" name="instructor">
				    <option value="carter">Alan Carter</option>
				    <option value="ken">Ken Hang</option>
				    <option value="krish">Krish Mahadevan</option>
				    <option value="simone">Simone Jarzabek</option>
				    <option value="tina">Tina Ostrander</option>
				    <option value="tim">Tim Mason</option>
				    <option value="spunky">Angela "Spunky" Robinson</option>
				</select>
			</div>
				        		
			<div class="form-group">
				<label for="location"><strong>Location:</strong></label>
				<select class="form-control" id="location" name="room">
					<option value="116">TC 116</option>
					<option value="118">TC 118</option>
					<option value="120">TC 120</option>
					<option value="147">HL 147</option>
				</select>
			</div>

			<div class="form-group">
				<label for="days"><strong>Days:</strong></label>
						<div class="checkbox-label">
							<label for="mon" class="checkbox-inline"><input type="checkbox" value="mon" name="mon"/>Mo</label>
				      	</div>
				        <div class="checkbox-label">
				        	<label for="tues"><input type="checkbox" value="tues" name="tues"/>Tu</label>
				        </div>
				        <div class="checkbox-label">
				        	<label for="wed"><input type="checkbox" value="wed" name="wed"/>We</label>
				        </div>
				        <div class="checkbox-label">
				        	<label for="thurs"><input type="checkbox" value="thur" namee="thurs"/>Th</label>
				        </div>
				        <div class="checkbox-label">
				        	<label for="fri"><input type="checkbox" value="fri" name="fri"/>Fr</label>
				        </div>		   
			<!-- </div> -->
			<br>
			<div class="form-group">
				<label for="start"><strong>Start Time:</strong></label>
				<select class="form-control" id="start" name="stime">
				    <option value="7:00 am">07:00 am</option>
				    <option value="8:00 am">08:00 am</option>
				    <option value="9:00 am">09:00 am</option>
				    <option value="10:00 am">10:00 am</option>
				    <option value="11:00 am">11:00 am</option>
				    <option value="12:00 pm">12:00 pm</option>
				    <option value="1:00 pm">01:00 pm</option>
				    <option value="2:00 pm">02:00 pm</option>
				    <option value="3:00 pm">03:00 pm</option>
				    <option value="4:00 pm">04:00 pm</option>
				    <option value="5:00 pm">05:00 pm</option>
				    <option value="6:00 pm">06:00 pm</option>
				    <option value="7:00 pm">07:00 pm</option>
				    <option value="8:00 pm">08:00 pm</option>
				    <option value="9:00 pm">09:00 pm</option>
				    <option value="10:00 pm">10:00 pm</option>
				</select>
			</div>
			<div class="form-group">
				<label for="end"><strong>End Time:</strong></label>
				<select class="form-control" id="end" name="etime">
				    <option value="7:50 am">07:50 am</option>
				    <option value="8:50 am">08:50 am</option>
				    <option value="9:50 am">09:50 am</option>
				    <option value="10:50 am">10:50 am</option>
				    <option value="11:50 am">11:50 am</option>
				    <option value="12:50 am">12:50 pm</option>
				    <option value="1:50 am">01:50 pm</option>
				    <option value="2:50 am">02:50 pm</option>
				    <option value="3:50 am">03:50 pm</option>
				    <option value="4:50 am">04:50 pm</option>
				    <option value="5:50 am">05:50 pm</option>
				    <option value="6:50 am">06:50 pm</option>
				    <option value="7:50 am">07:50 pm</option>
				    <option value="8:50 am">08:50 pm</option>
				    <option value="9:50 am">09:50 pm</option>
				    <option value="10:50 am">10:50 pm</option>
				</select>	
			</div>
			<div class = "row" id="navsubmit">
				<button type="button" class ="btn btn-primary btn-md"input type="submit" id="submit">Submit</button>
			</div>

	</form>	
</div>



