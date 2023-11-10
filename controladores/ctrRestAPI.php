<?php

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/prograweb/controladores/restContacto.php");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    echo $res = curl_exec($ch);
    curl_close($ch);


?>