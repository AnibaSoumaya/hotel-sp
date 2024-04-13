<?php require "includes/header.php";
require "../controllers/roomcontroller.php";

$id = $_GET['id'];

$roomctr = new roomcontroller();
$getALLrooms = $roomctr->getRoomsById($id);
$hotelId = $getALLrooms[0]['hotel_id']; // Supposons que 'hotel_id' soit le champ correspondant dans votre table de chambres
?>

<?php require "../controllers/hotelscontroller.php";
$hotelsctr = new Hotelscontroller();
try {
    $hotel = $hotelsctr->getHotelById($hotelId); // Ajoutez cette fonction pour obtenir les détails de l'hôtel par ID
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
    // Log or handle the error as needed
}
				

?>

<section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo HOTELSIMAGES; ?>/<?php echo $hotel['image']; ?>);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo APPURL; ?>"> Home <i class="fa fa-chevron-right"></i></a></span> <span>Rooms <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread"><?php echo $hotel['name']; ?></h1>
            </div>
        </div>
    </div>
</section>
    <section class="ftco-section bg-light ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-md-0">
				<div class="row no-gutters">
				
					<?php foreach ($getALLrooms as $room)  : ?>

							<div class="col-lg-6">
								<div class="room-wrap d-md-flex">
									<a href="rooms.php" method="POST" class="img order-md-last" style="background-image: url(images/<?php echo $room['image'];?>);"></a>
									<div class="half right-arrow d-flex align-items-center">
										<div class="text p-4 p-xl-5 text-center">
											<p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
											<p class="mb-0"><span class="price mr-1">$<?php echo $room['price'];?></span> <span class="per">per night</span></p>
											<h3 class="mb-3"><a href="rooms/room-single.php?id=<?php echo $room['id'];?>"><?php echo $room['name'];?></a></h3>
												<ul class="list-accomodation">
												<li><span>Max:</span> <?php echo $room['num_persons'];?> Persons</li>
												<li><span>Size:</span> <?php echo $room['size'];?> m2</li>
												<li><span>View:</span> <?php echo $room['view'];?></li>
												<li><span>Bed:</span><?php echo $room['num_beds'];?></li>
											</ul>
											<p class="pt-1"><a href="http://localhost/hotel/views/room-single.php?id=<?php echo $room['id'];?>" class="btn-custom px-3 py-2">Book <span class="icon-long-arrow-right"></span></a></p>
										</div>
									</div>
								</div>
							</div>
					<?php endforeach;?>
					
					

    			</div>
    			
    			
    		</div>
			
		</section>
		
		<?php require "includes/footer.php";?>