<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("links.xml");

$x = $xmlDoc->getElementsByTagName('link');
$search = $_GET['search'];

if(strlen($search) > 0){
    $hint = "";

    for($i = 0; $i < $x->length; $i++){
        $title=$x->item($i)->getElementsByTagName('title');
        $url=$x->item($i)->getElementsByTagName('url');
        if($title->item(0)->nodeType == 1){
            if(stristr($title->item(0)->textContent, $search)){
                if($hint == ""){
                    $hint = "<a href='" . $url->item(0)->textContent . "' target='_blank'>" . $title->item(0)->textContent . "</a>";
                } else{
                    $hint = $hint . "<br /><a href='" . $url->item(0)->textContent . "' target='_blank'>" . $title->item(0)->textContent . "</a>";
                }
            }
        }
    }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
    $response = "no suggestion";
  } else {
    $response = $hint;
  }
  
  //output the response
  echo $response;
?>
