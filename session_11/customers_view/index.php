<?php
session_start();

echo "welcome ".$_SESSION['username'] ;

header('location:selectAll.php');
