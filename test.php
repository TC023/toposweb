<?php
require 'database.php';
$id = 0;
if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}
$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Fetch reservations with 'pendiente' status
$sql = "SELECT fecha_hora FROM reto_reservaciones WHERE estado = 'pendiente'";
$result = $pdo->prepare($sql);
$result->execute(array($id));

// Array to hold the timestamps of pending reservations
$pendingReservations = [];

if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    $pendingReservations[] = $row["fecha_hora"];
  }
} else {
  echo "0 results";
}

Database::disconnect();

// Function to check if a given hour is in the pending reservations
function isPendingReservation($hour, $pendingReservations) {
  foreach ($pendingReservations as $reservation) {
    if (date('H:i', strtotime($reservation)) == $hour) {
      return true;
    }
  }
  return false;
}

// Example usage in HTML/JavaScript
?>
<script>
// Array of pending reservations from PHP
var pendingReservations = <?php echo json_encode($pendingReservations); ?>;

// Function to color the hour slots
function colorPendingSlots() {
  var timeSlots = document.querySelectorAll('#time-slots li');
  for (var i = 0; i < timeSlots.length; i++) {
    var slotHour = timeSlots[i].textContent;
    if (isPendingReservation(slotHour, pendingReservations)) {
      timeSlots[i].style.backgroundColor = 'orange';
    }
  }
}

// Call the function to color the slots
colorPendingSlots();
</script>
