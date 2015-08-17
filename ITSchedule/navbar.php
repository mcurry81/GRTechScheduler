<!--nav bar using only html/css-->
<div class="sidebar">
	<form class="form-inline" role="form" method="post" action="tc116.php">
			<div class="form-group">
				<label for="course"><strong>Course:</strong></label>
				<select class="form-control" id="course">
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
				<select class="form-control" id="inst">
				    <option>Alan Carter</option>
				    <option>Ken Hang</option>
				    <option>Krish Mahadevan</option>
				    <option>Simone Jarzabek</option>
				    <option>Tina Ostrander</option>
				    <option>Tim Mason</option>
				    <option>Angela "Spunky" Robinson</option>
				</select>
			</div>
				        		
			<div class="form-group">
			<label for="location"><strong>Location:</strong></label>
			<select class="form-control" id="location">
				<option>TC 116</option>
				<option>TC 118</option>
				<option>TC 120</option>
				<option>HL 147</option>
			</select>
			</div>
			<div class="form-group">
				<label for="days"><strong>Days:</strong></label>
						<div class="checkbox-lablel">
							<label for="mon" class="checkbox-inline"><input type="checkbox" id="mon" value="mon"/>Mo</label>
				      	</div>
				        <div class="checkbox-label">
				        	<label for="tues"><input type="checkbox" value="tues" />Tu</label>
				        </div>
				        <div class="checkbox-label">
				        	<label for="wed"><input type="checkbox" value="wed" />We</label>
				        </div>
				        <div class="checkbox-label">
				        	<label for="thurs"><input type="checkbox" value="thur" />Th</label>
				        </div>
				        <div class="checkbox-label">
				        	<label for="fri"><input type="checkbox" value="fri" />Fr</label>
				        </div>		   
			<!-- </div> -->
			<br>
			<div class="form-group">
				<label for="start"><strong>Start Time:</strong></label>
				<select class="form-control" id="start">
				    <option>07:00 am</option>
				    <option>08:00 am</option>
				    <option>09:00 am</option>
				    <option>10:00 am</option>
				    <option>11:00 am</option>
				    <option>12:00 pm</option>
				    <option>01:00 pm</option>
				    <option>02:00 pm</option>
				    <option>03:00 pm</option>
				    <option>04:00 pm</option>
				    <option>05:00 pm</option>
				    <option>06:00 pm</option>
				    <option>07:00 pm</option>
				    <option>08:00 pm</option>
				    <option>09:00 pm</option>
				    <option>10:00 pm</option>
				</select>
			</div>
			<div class="form-group">
				<label for="end"><strong>End Time:</strong></label>
				<select class="form-control" id="start">
				    <option>07:50 am</option>
				    <option>08:50 am</option>
				    <option>09:50 am</option>
				    <option>10:50 am</option>
				    <option>11:50 am</option>
				    <option>12:50 pm</option>
				    <option>01:50 pm</option>
				    <option>02:50 pm</option>
				    <option>03:50 pm</option>
				    <option>04:50 pm</option>
				    <option>05:50 pm</option>
				    <option>06:50 pm</option>
				    <option>07:50 pm</option>
				    <option>08:50 pm</option>
				    <option>09:50 pm</option>
				    <option>10:50 pm</option>
				</select>	
			</div>
			<div class = "row" id="navsubmit">
				<button type="button" class = "btn btn-primary btn-md"input type="submit" id="submit">Submit</button>
			</div>

	</form>	
</div>



<!--from jquery tutorial <div class="slide-out-div">
    <a class="handle" href="http://link-for-non-js-users.html">Content</a>
    <h3>Contact me</h3>
    <p>Thanks for checking out my jQuery plugin, I hope you find this useful.
    </p>
    <p>This can be a form to submit feedback, or contact info</p>
</div> -->
<!--<div id="navbar">
	<form class="form-inline" role="form" method="post" action="tc116.php">
		<div class="form-group">
			<label for="course"><strong>Course:</strong></label>
			<select class="form-control" id="course">
				<option>IT 101</option>
				<option>IT 102</option>
			    <option>IT 114</option>
			    <option>IT 121</option>
			    <option>IT 135</option>
			    <option>IT 141</option>
			    <option>IT 175</option>
			    <option>IT 178</option>
			    <option>IT 190</option>
			    <option>IT 201</option>
			    <option>IT 210</option>
			    <option>IT 245</option>
			    <option>IT 290</option>
			    <option>IT 301</option>
			    <option>IT 305</option>
			    <option>IT 335</option>
			    <option>IT 344</option>
			    <option>IT 355</option>
			    <option>IT 385</option>
			    <option>IT 390</option>
			    <option>IT 405</option>
			    <option>IT 426</option>		        			
			</select>
		</div>
		
		<div class="form-group">
			<label for="inst"><strong>Instructor:</strong></label>
			<select class="form-control" id="inst">
			    <option>Alan Carter</option>
			    <option>Ken Hang</option>
			    <option>Krish Mahadevan</option>
			    <option>Simone Jarzabek</option>
			    <option>Tina Ostrander</option>
			    <option>Tim Mason</option>
			    <option>Angela "Spunky" Robinson</option>
			</select>
		</div>
			        		
		<div class="form-group">
		<label for="location"><strong>Location:</strong></label>
		<select class="form-control" id="location">
			<option>TC 116</option>
			<option>TC 118</option>
			<option>TC 120</option>
			<option>HL 147</option>
		</select>
		</div>
		<div class="form-group">
			<label for="days"><strong>Days:</strong></label>
					<div class="checkbox-label">
						<label for="mon"><input type="checkbox" id="mon" />Mo</label>
			        </div>
			        <div class="checkbox-label">
			        	<label for="tues"><input type="checkbox" id="tues" />Tu</label>
			        </div>
			        <div class="checkbox-label">
			        	<label for="wed"><input type="checkbox" id="wed" />We</label>
			        </div>
			        <div class="checkbox-label">
			        	<label for="thurs"><input type="checkbox" id="thur" />Th</label>
			        </div>
			        <div class="checkbox-label">
			        	<label for="fri"><input type="checkbox" id="fri" />Fr</label>
			        </div>		   
		</div>
		<br>
		<div class="form-group">
			<label for="start"><strong>Start Time:</strong></label>
			<select class="form-control" id="start">
			    <option>07:00 am</option>
			    <option>08:00 am</option>
			    <option>09:00 am</option>
			    <option>10:00 am</option>
			    <option>11:00 am</option>
			    <option>12:00 pm</option>
			    <option>01:00 pm</option>
			    <option>02:00 pm</option>
			    <option>03:00 pm</option>
			    <option>04:00 pm</option>
			    <option>05:00 pm</option>
			    <option>06:00 pm</option>
			    <option>07:00 pm</option>
			    <option>08:00 pm</option>
			    <option>09:00 pm</option>
			    <option>10:00 pm</option>
			</select>
		</div>
		<div class="form-group">
			<label for="end"><strong>End Time:</strong></label>
			<select class="form-control" id="start">
			    <option>07:50 am</option>
			    <option>08:50 am</option>
			    <option>09:50 am</option>
			    <option>10:50 am</option>
			    <option>11:50 am</option>
			    <option>12:50 pm</option>
			    <option>01:50 pm</option>
			    <option>02:50 pm</option>
			    <option>03:50 pm</option>
			    <option>04:50 pm</option>
			    <option>05:50 pm</option>
			    <option>06:50 pm</option>
			    <option>07:50 pm</option>
			    <option>08:50 pm</option>
			    <option>09:50 pm</option>
			    <option>10:50 pm</option>
			</select>	
		</div>
		<div class = "row" id="navsubmit">
			<input type="submit">
		</div>

	</form>
</div>-->