<?php

// Example usage of scraper:

$url = 'www.cnn.com/2015/12/02/europe/nato-montenegro-membership-invitation/index.html';
$scraper = new Scraper($url);
print_r($scraper->produce_json());


class Scraper {

    function __construct($url) {

        // Retrieve html from given url
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $this->html = curl_exec($ch);
        curl_close($ch);
        
        // Create DOMDocument object
        $this->dom = new DOMDocument;
        $this->dom->loadHTML($this->html);
    }

    // Arrange text content into an array
    function gather_text_by_tag($tag) {
        $content_array = array();
        $nodes = $this->dom->getElementsByTagName($tag);
        foreach ($nodes as $node) {
            array_push($content_array, $node->nodeValue);
        }
        return $content_array;
    }

    function gather_images() {
        $images_array = array();
        $images = $this->dom->getElementsByTagName('img');
        foreach ($images as $image) {
            $image_source = $image->getAttribute('src');

            // filters out unuseable img tags
            $pos = strpos($image_source, 'jpg');
            if ($pos == true) {
                array_push($images_array, $image_source);
            }
            
        }
        return $images_array;
    }

    // Creates associative array suitable for JSON encoding
    function format_content() {
        $h_array = self::gather_text_by_tag('h1');
        $p_array = self::gather_text_by_tag('p');
        $i_array = self::gather_images();
        return array('headline'=>$h_array, 'paragraphs'=>$p_array, 'images'=>$i_array);
    }

    function produce_json() {
        return json_encode(self::format_content());
    }

    function __destruct() {
    }

}
?>
