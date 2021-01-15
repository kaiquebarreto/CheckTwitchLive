<?php 

/*
    Criado por Kaique Barreto 
    kaiquebarreto.com | @kaique_barreto 
*/

$streamer = "DIGITE O CANAL AQUI"; // Digite o canal do seu Streamer

function file_get_contents_curl($url) {
	
$cliente_id = "DIGIGE SEU ID DO CLIENTE"; // Digite o seu id, para conseguir um acesse: https://dev.twitch.tv/console/apps

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);     
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Client-ID: $cliente_id",        
        "Authorization: Bearer **************", 
        "Accept: application/vnd.twitchtv.v5+json"     
    ));

    $data = curl_exec($ch);
    curl_close($ch);
    return $data;

}

$url = "https://api.twitch.tv/$streamer/streams/";
$json_array = json_decode(file_get_contents_curl($url), true);

// Mostra se a live esta online ou offline
if (!empty($json_array)) {
    echo "Live Online"; 
} else {
	echo "Live Offline";
}

?>