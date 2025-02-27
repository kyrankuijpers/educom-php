<?php

$q = $_GET['q'];

$xmlDoc = new DOMDocument();
$xmlDoc->load("stargate.xml");

$name_elements = $xmlDoc->getElementsByTagName('NAME');

for($i = 0; $i < $name_elements->length; $i++){
    
    $current_name = $name_elements->item($i);
    
    if($current_name->nodeType == 1 && $current_name->nodeValue == $q){
        $selected_character = $current_name->parentNode;
    }
}

$character_info = $selected_character->childNodes; 

for($i = 0; $i < $character_info->length; $i++){
    
    $current_child = $character_info->item($i);
    
    if($current_child->nodeType == 1){
        echo "<b>" . $current_child->nodeName . ":</b> ";
        echo $current_child->nodeValue;
        echo "<br>";
    }
}
?>