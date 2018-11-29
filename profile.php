         <?php
		 session_start();
		 
		 if(!isset($_SESSION['email'] )){
			 array_push ($errors, "<font color = 'red'> You must login first </font><br>");
			 header('location: login.php');
		 }
		 if(isset($_GET['logout'])) {
			 
			 session_destroy();
			 unset($_SESSION['email']);
			 header('location: home.php');	
		 }
		 
		 ?>

<?php include 'header.php'; ?>
   
   <!-- picture/
   ================================================== -->
   <section id="hero">

	   <div class="row">

		   <div class="twelve columns">

			   <div class="hero-text">
				   <h1 class="responsive-headline">Profile</h1>

				   <p>This is your profile page</p>
			   </div>


            <div class="hero-image">
               
            </div>

		   </div>

	   </div>

   </section> <!-- Homepage Hero end -->

   <!-- Style Guide Section
   ================================================== -->
   <section id="styles" style="padding: 90px 0 72px; background: #fff;">

    
	  
         <div class="eight columns add-bottom">

			
			<?php
			//remove success session so it's empty again
				if(isset($_SESSION['success'])){
					echo $_SESSION['success']	;
					unset ($_SESSION['success']);
				}				
			?>
			
			<h4> Welcome 
           <?php
				echo $_SESSION['email'];
		   
			?>
			</h4>
			
			<br>
			
			<a href = "profile.php?logout='1'">Logout</a>
         </div>

         
		</form>
         <hr />

      </div> <!-- Row End-->



 


 




   </section> <!-- Style Guide Section End-->

<?php include 'footer.php'; ?>
