<?php include 'header.php'; ?>

<?php
	$search = $_POST['search'];
	
	// make $search lower case 
	function lowerCase($z){
		
		return strtolower($z);
		
	}
	
	// switch case function
	function showCountry($x){
		
		switch($x){
			
			case "malaysia":
				echo ' <h5> <a href ="country_redirect.php?country=malaysia"> Malaysia </a></h5> ';
				break;
			
			case "indonesia":
				echo ' <h5> <a href ="country_redirect.php?country=indonesia"> Indonesia </a></h5> ';
				break;
			
			case "vietnam":
				echo ' <h5> <a href ="country_redirect.php?country=vietnam"> Vietnam </a></h5> ';
				break;			
			
			case "thailand":
				echo ' <h5> <a href ="country_redirect.php?country=thailand"> Thailand </a></h5> ';
				break;			
			
			case "philippines":
				echo ' <h5> <a href ="country_redirect.php?country=philippines"> Philippines </a></h5> ';
				break;			
			
			default: 
				echo 'Country not found';
				break;
			
			
			
		}
		
	}

?>
   
   <!-- picture/
   ================================================== -->
   <section id="hero">

	   <div class="row">

		   <div class="twelve columns">

			   <div class="hero-text">
				   <h1 class="responsive-headline">Search</h1>

				   <p></p>
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

            <h3 class="add-bottom"><?php  echo "Your searched for $search" ?></h3>
			<h4>Search results:</h4>
			<?php 
			
			$searchF = lowerCase($search);
			
			showCountry($searchF);
			
			?>
			<br><Br>
            
			<h4>Search for a different country?</h4>
			<form action = "search.php" method = "post">
			
			<input type = "text " name = "search" placeholder = "Search a country">
		
			<input type = "submit" value =" search">
			
           </form>

         </div>
			
         
		
         <hr />

      </div> <!-- Row End-->



 


 




   </section> <!-- Style Guide Section End-->

<?php include 'footer.php'; ?>
