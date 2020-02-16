
<?php
		$include "conn.php"
		$sql = "SELECT * FROM users";
		$query = $conn->query($conn);
		if ($query->num_rows > 0) {
			while ($row = $query->fetch_assoc()) {
				header("location : login.php");
			}
		}
?>