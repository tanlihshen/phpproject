<?php include 'server.php'; ?>
<?php include 'header.php'; ?>
   
   <!-- picture/
   ================================================== -->
   <section id="hero">

	   <div class="row">

		   <div class="twelve columns">

			   <div class="hero-text">
				   <h1 class="responsive-headline">Login</h1>
			   </div>


            <div class="hero-image">
               
            </div>

		   </div>

	   </div>

   </section> <!-- Homepage Hero end -->

   <!-- Style Guide Section
   ================================================== -->
 <section id="hero" style="background: white;">
   <div class="container" align="center"  >		
			<?php 
			foreach($errors as $errors){
				echo $errors;
			}
			?>
		<p style="font-size:130%;">Welcome Back.</p>
		<form action = "login.php" method = "post">
		<input type = "text" name = "email" placeholder="Email">		
		<input type = "password" name = "password" placeholder="Password">
		<input type = "submit" value = "Login" name = "log_user">
        <input type= "hidden" name="success" value="true">		
		<h3> Not a member? <a href = "register.php"> Register now!</a>
        </div>        
		</form>
        
   </section> <!-- Style Guide Section End-->

<?php include 'footer.php'; ?>
