<?php 
require "../../includes/admin-header.php";
require "../../../controllers/Bookingcontroller.php";

if(!isset($_SESSION['adminame'])){
  echo"<script>window.location.href='".ADMINURL."/admins/login-admins.php'</script>";
 }

$Bookingcontroller = new Bookingcontroller();
$allbookings = $Bookingcontroller->listebookingss();

// Vérifier si des données de recherche sont soumises
if(isset($_GET['phone_number'])) {
    // Récupérer le numéro de téléphone soumis dans le formulaire de recherche
    $phone_number = $_GET['phone_number'];
    // Utiliser la méthode de recherche pour obtenir les réservations correspondantes
    $searchResults = $Bookingcontroller->searchBookingsByPhoneNumber($phone_number);
} else {
    // Si aucune donnée de formulaire n'est soumise, afficher toutes les réservations comme avant
    $searchResults = $allbookings;
}
?>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-4 d-inline">Bookings</h5>
                <br>
                <!-- Ajouter le formulaire de recherche -->
                <form method="GET" action="">
                    <div class="form-row align-items-end mb-3">
                        <div class="col-md-6">
                            
                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder=" Phone number..">
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">check in</th>
                            <th scope="col">check out</th>
                            <th scope="col">email</th>
                            <th scope="col">phone number</th>
                            <th scope="col">full name</th>
                            <th scope="col">hotel name</th>
                            <th scope="col">booking name</th>
                            <th scope="col">status</th>
                            <th scope="col">created at</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($searchResults as $booking) : ?>
                        <tr>
                            <th scope="row"><?php echo $booking['id']?></th>
                            <td><?php echo $booking['check_in'] ?></td>
                            <td><?php echo $booking['check_out'] ?></td>
                            <td><?php echo $booking['email'] ?></td>
                            <td><?php echo $booking['phone_number'] ?></td>
                            <td><?php echo $booking['full_name']?></td>
                            <td><?php echo $booking['hotel_name']?></td>
                            <td><?php echo $booking['room_name'] ?></td>
                            <td><?php echo $booking['status']; ?></td>
                            <td><?php echo $booking['created_at']; ?></td>
                            <td><a href="status-bookings.php?id=<?php echo $booking['id']; ?>" class="btn btn-danger text-center">Status</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</div>


