<!DOCTYPE html>
<html>
	<head>
		<title>Home | Internship</title>
		<?php include 'style.php'?>
	</head>
	<body>
		<div class="header">
			<h1 id="name">Abhishek Tripathi</h1>
			<div class="image">
			<img src="profile.jpg" alt="Profile" width="200px" style="border: 3px solid black;">
			</div>
			<h1 id="job">Professor, Taxation</h1></div>
			<br><br>
		<div class="main">
		<div class="expertise" id="exp">
				<h1>+ <span style="color:Red;">Expertise</span></h1>					
			</div>
		
		
			<h1>About</h1>
			<div class="about_desc">
				<p>Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah<span id="dots">... </span>
				  <span id="more">
					 ... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah... Blah blah...
				</span>
				</p>
				<button type="button" id="read" onclick="read()">More</button>
			</div>
			<h1 style="margin-top: 30px">Post</h1>
			<div class="post_desc">
				<img class="cont1" src="4.png" alt="Image">
				<p><b>20 Tips for CA Inter Preparation.</b></p>
				<br><br>
				<img class="cont2" src="3.png" alt="Image"> 
				<p><b>Why Tradition way of coaching for CA would not work any more.</b></p>
								
			</div>
			
		</div>
		<div class="form">
			<div class="form-content">
			<h2 style="text-align:center;">Expertise Form</h2>
				<form method="post" action="expertiseNRatesDisplay.php">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Expertise : </label>
					<input type="text" name="expertise" placeholder="Expertise" required><br><br>
					<label>Experience</label><br>
					<label>Year : </label>
					<input type="number" name="year" placeholder="Year" required>					
					<label>Month : </label>
					<input type="number" name="month" placeholder="Month" required><br><br>
					<label>Rates : </label><br>
					<label>Remote</label>
					<input type="number" name="remote" required>
					<select name="remote1">
						<option value="Per Hr">Per Hours</option>
						<option value = "Per Chapter">Per Chapter</option>
						<option value = "Per Topic">Per Topic</option>
					</select><br>
					<label>Centre</label>
					<input type="number" name="centre" required>
					<select name="centre1">
						<option value = "Per Week">Per Week</option>
						<option value = "Per Month">Per Month</option>
					</select><br>
					<label>Learner's Place </label>
					<input type="number" name="lerner" required>
						<select name="lerner1">
						<option value = "Per Class">Per Class</option>
						<option value = "Per Hour">Per Hour</option>
					</select><br>
					<label>My Place</label>
					<input type="number" name="my" required>
						<select name="my1">
						<option value = "Per Class">Per Class</option>
						<option value = "Per Hour">Per Hour</option>
					</select><br>
                     <input type="submit" name="submit" id="btn1" value="&#x2714;" style="cursor: pointer" />
                     <input id="btn2" value="&#x2716;" style="cursor: pointer" />
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                </form> 
			</div>
			</div>
	<?php include 'script.php'?>
	</body>
</html>