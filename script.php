<?php
/*
    Criado por Kaique Barreto 
    kaiquebarreto.com | @kaique_barreto
    Versão 1.2 | Atualizado em 14/05/2021

    Create by Kaique Barreto
    kaiquebarreto.com | @kaique_barreto
    Version 1.2 | Update on 14/05/2021

    // https://dev.twitch.tv/console --> Utilize para obter seu id de cliente e seu token
*/



$streamer = 'kaiquepessoa'; // Digite o usuário do Streamer               ||          Enter the Streamer user
$clientId = "CLIENT_ID"; // Digite o seu id de Cliente                    ||          Enter the client ID
$token = "TOKEN"; // Digite o seu token                                   ||          Enter the token



$linkId = "https://api.twitch.tv/kraken/users?login=$streamer";
$host = "$_SERVER[HTTP_HOST]";
        
function capture($link, $x, $y) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);     
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Client-ID: $x",        
            "Authorization: Bearer $y", 
            "Accept: application/vnd.twitchtv.v5+json"     
        ));
    
        $dataId = curl_exec($ch);
        curl_close($ch);
        return $dataId;
    
    }

$captureId = json_decode(capture($linkId, $clientId, $token), true);
$idUser = $captureId['users'][0]['_id'];
$linkWithId = "https://api.twitch.tv/kraken/streams/$idUser";

$jsonStream = json_decode(capture($linkWithId, $clientId, $token), true);
$result = $jsonStream['stream']['stream_type'];


if ($result === 'live') {
    echo 'Live On';
} else {
    echo 'Live Off';
}

?>