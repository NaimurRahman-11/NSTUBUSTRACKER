<?php
session_start();

// destroy the session
session_destroy();

header('location: admin.php');
?>