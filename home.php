<?php include 'header.php'; ?>

   <!-- picture/
   ================================================== -->
   <section id="hero">
    

	   <div class="row">
	  

		   <div class="twelve columns">
		    

			   <div class="hero-text">
				   <h1 class="responsive-headline">The perfect travel guide website to choose your next adventure.</h1>

				   <p style="font-size:130%;">Click on country tab to start planning for your adventure!</p>
			   </div>
			

            <div class="buttons">
               <a class="button trial" href="country.php">Country</a>
               <a class="button trial" href="profile.php">Profile</a>
            </div>

            <div class="hero-image">
               <img src="images/.png" alt="" />
            </div>

		   </div>

	   </div>

   </section> <!-- Homepage Hero end -->

   <!-- Style Guide Section
   ================================================== -->
   
   <section id="styles" style="padding: 90px 0 72px; background: #fff;">

      <div class="row section-head">

         <h1>Pearl travel guide</h1>

         <p class="lead add-bottom">
		 We believe that any fun trip and or adventure starts with the planning, Pearl travel guide is the perfect website to help you choose
		 from a wide variety of ASEAN countries, these countries are full of irresistable food and tourist hotspots. 
		 <br><br>
		 Click on the country tab above or use the search button to start planning for your adventure!
         </p><br>
		 
		 
		<form action = "search.php" method = "post">
		
		<input type = "text " name = "search" placeholder = "Search a country">
		
		<input type = "submit" value =" search">
		
		</form>

      </div> <!-- Row End-->

      <div class="row add-bottom">

      	

      </div> <!-- Row End-->

   </section> <!-- Style Guide Section End-->
    <section id='features' style="background: #041f33;">

      <br><div class="row feature design">

         <div class="six columns right">
            <h1 style="color:white;">Our Story</h1>
			<h5 style="color:white;">Pearl Travel are  proud to be one of the leading browser of ideal holidays in South East Asia. Click to read more about our story.</h5>
			<br><div class="buttons">
			<a class="button trial" href="about.php">Read More</a>
			</div>
         </div>

         <div class="six columns feature-media left">
             <img src="images/about.jpg" alt="" />
         </div>

      </div>

     <br> <div class="row feature responsive">

         <div class="six columns left">
            <h1 style="color:white;">CONTACT US</h1>
			<h5 style="color:white;">Tell us what's on your mind, good or bad. We respond to all customer feedback and look forward to hearing from you!</h5>
			<br><div class="buttons">
			<a class="button trial" href="contact.php">Contact us</a>
			</div>  
         </div>

         <div class="six columns feature-media right">
             <img src="images/contact.jpg" alt="" />
         </div>

      </div>
   </section>
        <section id="subscribe" style="background:#FFFFFF">

      <div class="row section-head">

         <div class="twelve columns">

            <h1 style="color:black;" >Not our member yet?</h1>
			<h1 style="color:black;" >Sign up now.</h1>
            <p style="font-size:130%;">Don't be a stranger and be a part of our Pearl Travel Guide's family!</p>
            <p style="font-size:130%;">Register and you won't miss any of our updates!</p>
         </div>
      </div>
      <div class="row">  
         <div class="buttons">
               <a class="button trial" href="register.php">Register</a>
            </div>
            <p><small>Don't worry, we never share your information to any third party or use it to spam you.</small></p>

         </div>

      </div>

   </section> 

<?php include 'footer.php'; ?>
