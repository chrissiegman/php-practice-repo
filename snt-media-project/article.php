<?php

$article = new Article('www.cnn.com/2015/12/02/europe/nato-montenegro-membership-invitation/index.html');

print_r($article->gather_content_by_tag('h1'));
print_r($article->gather_content_by_tag('p'));

class Article {

    function __construct($url) {
        // Retrieve html from given url (ADD ERROR HANDLING)
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $this->html = curl_exec($ch);
        curl_close($ch);

        // Create DOMDocument object (ADD ERROR HANDLING)
        $this->dom = new DOMDocument;
        $this->dom->loadHTML($this->html);
    }

    // Arrange text content into an array
    function gather_content_by_tag($tag) {
        $content_array = array();
        $nodes = $this->dom->getElementsByTagName($tag);
        foreach ($nodes as $node) {
            array_push($content_array, $node->nodeValue);
        }
        return $content_array;
    }

    // Clone page (for debugging)
    function clone_page() {
        echo $this->html;
    }

    function __destruct() {
    }

}


?>
