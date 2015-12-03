<?php

$url = "www.cnn.com/2015/12/02/europe/nato-montenegro-membership-invitation/index.html";
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$html = curl_exec($ch);
curl_close($ch);

$dom = new DOMDocument;
$dom->loadHTML($html);

$headline = $dom->getElementsByTagName('h1');

$h_array = array();
$p_array = array();

foreach ($headline as $headline) {
    array_push($h_array, $headline->nodeValue);
}

$text_paragraphs = $dom->getElementsByTagName('p');

foreach ($text_paragraphs as $p) {
    array_push($p_array, $p->nodeValue);
}

$content_dict = array("headline"=>$h_array, "paragraphs"=>$p_array);
$json = json_encode($content_dict);

print_r($json);

?>
