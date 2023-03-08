
<html >
<head>
    <title>Document</title>
</head>
<body bgcolor="#F9CD8D" >
    <h1>This Api Developed By Siam Rahman :D</h1>
</body>
</html>
<?php

$phn = $_REQUEST['phone'];
$url = " =>   API URL    <=";
$curl= curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
    "Content-Type: application/json",);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$ps = array(
    "name" => $phn,
    "phoneNumber" => $phn,
    "service" => "redx");
$data = json_encode($ps);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
echo "<h2>$resp</h2>";
print "<h4>Copyright 2023 By Siam Rahman <h4>";

?>
