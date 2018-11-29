<?php include 'header.php'; ?>
   
   <!-- picture/
   ================================================== -->
   <section id="hero">

	   <div class="row">

		   <div class="twelve columns">

			   <div class="hero-text">
				   <h1 class="responsive-headline"> Country </h1>
			   </div>
		   </div>
	   </div>
   </section> <!-- Homepage Hero end -->

   <!-- Style Guide Section
   ================================================== -->
   <section id="styles" style="padding: 70px 72px; background: #fff;">
   

      <div class="row section-head">

         <h1>Explore your next journey here.</h1>
  <div class="container" align="center"  >		
<form action="regionalSetting.php" method="post">
			 <select id="foo" name="country">  
			 <option>Country</option>
			 <option value="malaysia.php">Malaysia</option>;
			 <option value="indonesia.php">Indonesia</option>;
			 <option value="vietnam.php">Vietnam</option>;
			 <option value="thailand.php">Thailand</option>;
			 <option value="philippines.php">Philippines</option>;			
			</select>
     <script>
	
    document.getElementById("foo").onchange = function() {
        if (this.selectedIndex!==0) {
            window.location.href = this.value;
        }        
    };
    </script>	
</form>
 </div> 
                 

  </div> 
</section>  <!-- Style Guide Section End-->

<?php include 'footer.php'; ?>
