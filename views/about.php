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

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/0.3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo APPURL ;?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">About Us</h1>
          </div>
        </div>
      </div>
    </section>
   
    <section class="ftco-section ftco-services">
	<div class="container">
    		<div class="row">
			<?php foreach ($allHotels as $h) : ?>
          <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block services-wrap text-center">
              <div class="img" style="background-image: url(<?php echo HOTELSIMAGES; ?>/<?php echo $h['image'];?>);"></div>
              <div class="media-body py-4 px-3">
                <h3 class="heading"><?php echo $h['name'];?></h3>
                <p><?php echo $h['description'];?></p>
                <p><?php echo $h['location'];?></p>
                <p><a href="rooms.php?id=<?php echo $h['id'];?>" class="btn btn-primary">View rooms</a></p>
              </div>
            </div> 
			   
          </div>
		  <?php endforeach;?>   
        </div>
    	</div>
    </section>


    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Happy Clients &amp; Feedbacks</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
							<div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Je recommande fortement "YourVacation" pour leurs excellents services. Ils offrent une large gamme de choix d'hôtels et leur site Web est convivial.</p>
                    <p class="name">Gdoura Ahmed </p>
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_2.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Les services offerts par "YourVacation" étaient tout simplement exceptionnels. Je serais certainement enclin à recourir à leurs services à nouveau dans le futur.</p>
                    <p class="name">Aniba Mounir</p>
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_3.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>Mon expérience avec "your vacation" a été exceptionnelle grâce à la qualité de leurs services. Quand j'ai eu besoin d'ajuster ma réservation, leur équipe d'assistance a réagi rapidement et efficacement.</p>
                    <p class="name">Aniba Hamza</p>
                    
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img" style="background-image: url(images/person_4.jpg)">
                  </div>
                  <div class="text pl-4">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="fa fa-quote-left"></i>
                    </span>
                    <p>J'ai grandement apprécié l'assistance téléphonique de "Your Vacation", toujours disponible en cas de besoin. Mon expérience avec leur service a été très positive.</p>
                    <p class="name">Abed Aymen</p>
                    
                  </div>
                </div>
              </div>
             
						</div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 wrap-about">
						<div class="img img-2 mb-4" style="background-image: url(images/cft.jpg);">
						</div>
						
						
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section">
	          	<div class="pl-md-5">
		            <h2 class="mb-2">What we offer</h2>
	            </div>
	          </div>
	          <div class="pl-md-5">
            <p>Your comfort is our sole focus, and our role is to ensure an excellent vacation for you.</p>
							<div class="row">
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-diet"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Drinks</h3>
		              </div>
		            </div> 
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-workout"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Hot Showers</h3>
		              </div>
		            </div>
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-diet-1"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Laundry</h3>
		              </div>
		            </div>      
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Air Conditioning</h3>
		              </div>
		            </div>
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Free Wifi</h3>
		                <!--<p>A small river named Duden flows by their place and supplies it with the necessary</p>-->
		              </div>
		            </div> 
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Kitchen</h3>
		                <!--<p>A small river named Duden flows by their place and supplies it with the necessary</p>-->
		              </div>
		            </div> 
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Ironing</h3>
		                <!--<p>A small river named Duden flows by their place and supplies it with the necessary</p>-->
		              </div>
		            </div> 
		            <div class="services-2 col-lg-6 d-flex w-100">
		              <div class="icon d-flex justify-content-center align-items-center">
		            		<span class="flaticon-first"></span>
		              </div>
		              <div class="media-body pl-3">
		                <h3 class="heading">Lovkers</h3>
		                <!--<p>A small river named Duden flows by their place and supplies it with the necessary</p>-->             </div>
		            </div>
		          </div>  
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<?php require "includes/footer.php"; ?>
