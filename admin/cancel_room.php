<?php
include 'db.php';
$id= $_GET['sid'];

$query="UPDATE roombook SET stat='Cancel'WHERE id='$id'";
$run= mysqli_query($con,$query);
if ($run) {
	
	
	
	 ?>
	<script type="text/javascript">alert('Your Booking Is Canceled Successfully') </script>
	<?php
}

?>