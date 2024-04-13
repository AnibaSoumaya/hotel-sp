<?php 
require "includes/header.php";
require "../controllers/PaysController.php";

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $paysController = new PaysController();
    $getALLpays = $paysController->getroombyidstatus($id);
}
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/image_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?php echo APPURL; ?>"> Home <i class="fa fa-chevron-right"></i></a></span> <span>Countries <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Country Details</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <h2 class="mb-4">Our Countries</h2>
            </div>
        </div>
        <div class="row">

            <?php if (!empty($allPays)) : ?>
                <?php foreach ($allPays as $pays) : ?>
                    <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
                        <div class="d-block services-wrap text-center">
                            <?php if (isset($pays['img'])) : ?>
                                <div class="img" style="background-image: url(<?php echo PAYSIMAGES . '/' . $pays['img']; ?>);"></div>
                            <?php else : ?>
                                <div class="img" style="background-image: url(default_image.jpg);"></div> <!-- Provide a default image or handle accordingly -->
                            <?php endif; ?>
                            <div class="media-body py-4 px-3">
                                <?php if (isset($pays['name'])) : ?>
                                    <h3 class="heading"><?php echo $pays['name']; ?></h3>
                                <?php endif; ?>
                                <?php if (isset($pays['description'])) : ?>
                                    <p><?php echo $pays['description']; ?></p>
                                <?php endif; ?>
                                <!-- Add other details as needed -->

                                <!-- Example button to view details -->
                                <p><a href="#" class="btn btn-primary">View Country Details</a></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>No countries available.</p>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php require "includes/footer.php"; ?>
