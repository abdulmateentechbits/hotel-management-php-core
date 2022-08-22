<?php
include 'db.php';
$id= $_GET['sid'];

$query="UPDATE tour_request SET status='Cancel'WHERE req_id='$id'";
$run= mysqli_query($con,$query);
if ($run) {
	
	
	
	 ?>
	<script type="text/javascript">alert('Your Booking Is Canceled Successfully') </script>
	<?php
}

?>