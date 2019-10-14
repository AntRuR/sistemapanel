<?php //á
$url = "http://crmsche.info/panel/base2/apps/hilo_notificaciones_email.php";
echo "launch : ".$url."<br><br>";

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
$data = curl_exec($curl);
curl_close($curl);

echo $data;
