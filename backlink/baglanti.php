<?php

    $conn = mysqli_connect('localhost', 'root', '', 'backlink_generator');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
  }
?>