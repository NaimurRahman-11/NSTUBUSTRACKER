<?php
include('header.php');
?>

	  <div class="sectionOne p-3 mb-2 text-black">

		<br><h1 align="center"><span class="auto-type"></span></h1><br>
		
	  </div>


	  <!-- Carousel Section Starts Here -->

	  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img src="img/Bus.jpg" class="d-block w-100" alt="rural">
			  </div>

			  <div class="carousel-item active">
				<img src="img/Bus2.jpg" class="d-block w-100" alt="rural">
			  </div>
			  
			  
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
			  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
			  <span class="carousel-control-next-icon" aria-hidden="true"></span>
			  <span class="visually-hidden">Next</span>
			</button>
		  </div>

		  <!-- Carousel Section Ends Here -->


	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>


<!-- JS Code for Auto Typed Text -->
<script>
	var typed = new Typed(".auto-type",{
		strings: ["নোয়াখালী বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ের বাস ট্র্যাকিং সাইটে আপনাকে স্বাগতম!"],
		typeSpeed: 100,
	
		loop: true 
	})
</script>
</body>
</html>

<?php

include('footer.php');

?>
