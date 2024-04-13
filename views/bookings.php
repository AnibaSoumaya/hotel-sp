<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require "includes/header.php"; 
include_once(__DIR__.'/../models/bookings.php'); 
include_once(__DIR__.'/../database/config/config.php');
include "../controllers/Bookingcontroller.php";

$allBookings = [];

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $bookingCtr = new Bookingcontroller();
    $allBookings = $bookingCtr->listebookings($id);
}
?>

<?php if (count($allBookings) > 0) : ?>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Check-in</th>
                <th scope="col">Check-out</th>
                <th scope="col">Full Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Room Name</th>
                <th scope="col">Hotel Name</th>
                <th scope="col">Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($allBookings as $booking) : ?>
                <tr>
                    <td><?php echo $booking['check_in']; ?></td>
                    <td><?php echo $booking['check_out']; ?></td>
                    <td><?php echo $booking['full_name']; ?></td>
                    <td><?php echo $booking['email']; ?></td>
                    <td><?php echo $booking['phone_number']; ?></td>
                    <td><?php echo $booking['room_name']; ?></td>
                    <td><?php echo $booking['hotel_name']; ?></td>
                    <td><?php echo $booking['created_at']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <div class="alert alert-primary" role="alert">
        Make your Bookings with us Now!
    </div>
<?php endif; ?>

<?php
require "includes/footer.php";
?>

