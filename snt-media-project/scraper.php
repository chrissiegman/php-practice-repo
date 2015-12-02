<?php

$url = "http://www.cnn.com/2015/12/02/europe/nato-montenegro-membership-invitation/index.html";
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$curl_scraped_page = curl_exec($ch);
curl_close($ch);

$html = $curl_scraped_page;

$dom = new DOMDocument;
$dom->loadHTML($html);

$headline = $dom->getElementsByTagName('h1');

$h_array = array();
$p_array = array();

foreach ($headline as $headline) {
    array_push($h_array, $headline->nodeValue);
    //echo $headline->nodeValue;
    //echo "<br>";
}

$text_paragraphs = $dom->getElementsByTagName('p');

foreach ($text_paragraphs as $p) {
    array_push($p_array, $p->nodeValue);
    //echo "<br>";
    //echo $p->nodeValue;
    //echo "<br>";
}

$content_dict = array("headline"=>$h_array, "paragraphs"=>$p_array);
$json = json_encode($content_dict);

print_r($json);

?>
