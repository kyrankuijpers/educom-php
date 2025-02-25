<?php
  $str = "<p>boem</p>";
  $newstr = filter_var($str, FILTER_SANITIZE_STRING);
  echo $newstr;

  $int = 0;

  echo filter_var($int, FILTER_VALIDATE_INT);

  if ((filter_var($int, FILTER_VALIDATE_INT) === 0) || (!filter_var($int, FILTER_VALIDATE_INT) === false)){
    echo("Integer is valid");
  }else {
    echo("Integer is not valid");
  }

  $min = 1;
  $max = 100;
  if(filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false){
    echo " not in range";
  }
  else{
    echo " in range";
  }

  $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

  if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo("$ip is a valid IPv6 address");
  } else {
    echo("$ip is not a valid IPv6 address");
  }

  $url = "https://www.w3schools.com?hoi";

  if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo("$url is a valid URL with a query string");
  } else {
    echo("$url is not a valid URL with a query string");
  }

  $str = "<h1>Hello WorldÆØÅ!</h1>";

  $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
  echo $newstr;

  /*

  $ip = "127.0.0.1";

  if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address");
  } else {
    echo("$ip is not a valid IP address");
  }

  $email = "john.doe@example.com";

  // Remove all illegal characters from email
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  // Validate e-mail
  if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
  } else {
    echo("$email is not a valid email address");
  }

  $url = "https://www.w3schools.com";

  // Remove all illegal characters from a url
  $url = filter_var($url, FILTER_SANITIZE_URL);

  // Validate url
  if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("$url is a valid URL");
  } else {
    echo("$url is not a valid URL");
  }

  */
?>