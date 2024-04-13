<?php require "includes/header.php"; ?>
<?php require "../controllers/hotelscontroller.php";
require "../controllers/roomcontroller.php";
 

	$hotelsctr=new Hotelscontroller();
	$roomsctr=new roomcontroller();

	try {
		$allHotels = $hotelsctr->hotelsbydisp();
		$allRooms = $roomsctr->roomsbydisp();
	} catch (Exception $e) {
		echo "Error: " . $e->getMessage();
		// Log or handle the error as needed
	}


	?>
    <div class="hero-wrap js-fullheight" style="background-image: url('images/0.3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<h2 class="subheading">Welcome to YourVacation</h2>
          	<h1 class="mb-4">Rent a room for your vacation</h1>
						<li class="nav-item">
							<a href="<?php echo APPURL;?>/about.php" class="btn btn-primary">Learn more</a>
							<a href="<?php echo APPURL;?>/contact.php" class="btn btn-white">Contact us</a></p>
          </div>
        </div>
      </div>
    </div>
  
    

    


  <?php require "includes/footer.php"; ?>