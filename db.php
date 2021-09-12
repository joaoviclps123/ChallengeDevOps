<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  'root',
  'localdb'
) or die(mysqli_erro($mysqli));

?>
