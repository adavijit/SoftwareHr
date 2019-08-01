<?php
require 'dbconnect.php';

$id = $_POST['id'];
echo $id;
$query = mysqli_query($conn,"DELETE FROM fileuploadrecord WHERE id=$id");
?>