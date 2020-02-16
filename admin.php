<?php
include "conn.php";
$sql = "select * from users";
$query = $sql->query($conn);
$result = fetch_assoc($query);
?>