<?php include 'header.php'; ?>
<?php

$okay = TRUE;
$errors = array();
$msg = array();

if(isset($_POST['submito'])){
	if(empty($_POST['first'])){ array_push($errors, " <font color = 'red'> First name is required </font><br>"); $okay = FALSE;}
	if(empty($_POST['last'])){ array_push($errors, " <font color = 'red'>Last name is required </font><br>"); $okay = FALSE;}	
	if(empty($_POST['email'])){ array_push($errors, " <font color = 'red'>Email is required </font><br>"); $okay = FALSE;}
	if(empty($_POST['comment'])){ array_push($errors, " <font color = 'red'>You did not enter anything in comment </font><br>"); $okay = FALSE;}
	
	if($okay){
		array_push($msg, "You have successfully sent an email to us!");
		
		
		
	}
	
}


?>
   
   <!-- picture/
   ================================================== -->
   <section id="hero">

	   <div class="row">

		   <div class="twelve columns">

			   <div class="hero-text">
				   <h1 class="responsive-headline">Share your thoughts</h1>        
			   </div>
		   </div>

	   </div>

   </section> <!-- Homepage Hero end -->

   <section id='features'>

      <div class="row feature design">

         <div class="six columns right">
            <h2>Sent us a message.</h2>
			<p>**Your information will not be shared to the third party.</p>
              <form action = "contact.php" method = "post">
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
			  <input type = "text" name = "first" placeholder="First name">	
			  <input type = "text" name = "last" placeholder="Last name">	
		      <input type = "email" name = "email" placeholder="Email">		
			  <textarea class="form-control" name="comment" rows="5" placeholder="How can we help?"></textarea>
		      <input type = "submit"  name = "Submit">	
			  <input type= "hidden" name="submito" value="true">
             </form>			  
        </div>        


         

         <div class="six columns feature-media left">
             <h2>Visit Our Store</h2>

            <p>322-2 Jalan Jelutong,<br>49711 Georgetown,<br> Penang, Malaysia.
            </p>
			<h2>Dial Us</h2>

            <p>+604-277 5142
            </p>
			<p>Operating Hours:<br>
Weekday: 10:00 AM - 04:00 PM <br>
Weekend: 09:30 AM - 06:00 PM <br>
Closed on Public Holidays
            </p>
			<h2>Email Us</h2>
            <p>pearltravel@gmail.com
            </p>
         </div>

      </div>
   </section>

<?php include 'footer.php'; ?>
