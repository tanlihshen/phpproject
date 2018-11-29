<?php include ('server.php') ?>
<?php include 'header.php'; ?>
   
   <!-- picture/
   ================================================== -->
   <section id="hero">

	   <div class="row">

		   <div class="twelve columns">

			   <div class="hero-text">
				   <h1 class="responsive-headline">Be one of the<br> Pearl Travel Guide's community</h1>				   
			   </div>
		   </div>
	   </div>

   </section> <!-- Homepage Hero end -->

   <!-- Style Guide Section
   ================================================== -->
   <section id="hero" style="background: white;">
   <div class="container" align="center"  >
		<form action = "register.php" method = "post">
			<?php 
			foreach($errors as $errors){
				echo $errors;
			}
			?>
			
			<?php 
			foreach($msg as $msg){
				echo $msg;
			}
			?>
		<p style="font-size:130%;">Fill in our information below to create an account.</p>
		<input type = "text" name = "name" placeholder="Username"> 		
		<input type = "text" name = "email" placeholder="Email">
		<input type = "password" name = "password" placeholder="Password">

		DOB
		<br>
		  
           <select name="day">
		   <option value="">Day</option>
		   <?php
		    for($i=1; $i<=31; $i++){
				echo"<option value=\"$i\">$i</option>\n";
			}
			?>
			</select>
		    
            <select name="month">
            <option value="">Month</option>
            <?php
		    for($i=1; $i<=12; $i++){
				echo"<option value=\"$i\">$i</option>\n";
			}
			?>
			</select>			
		    
            <select name="year">
            <option value="">Year</option>
            <?php
		    for($i=1900; $i<=2018; $i++){
				echo"<option value=\"$i\">$i</option>\n";
			}
			?>
			</select>
		<input type = "submit" value = "register" name = "reg_user">
		<input type= "hidden" name="success" value="true">
		<h3> Already a member? <a href = "login.php"> Sign in</a>
		</form>	
	</div>
</section> <!-- Style Guide Section End-->
<?php include 'footer.php'; ?>
