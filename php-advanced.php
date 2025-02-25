

<?php 
/*
echo "Dutch date format is " . date("d-m-Y");
echo "ISO format is " . date("Y-m-d");
echo "the time is " . date("H:i");

// Files
echo readfile("README.md");
$myfile = fopen("webdictionary.txt", "r") or die('unable');

//echo fread($myfile,filesize("webdictionary.txt"));
//echo fgets($myfile);
// Output one line until end-of-file
    while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
  }


//Output one character until end-of-file
while(!feof($myfile)) {
    echo fgetc($myfile);
  }

fclose($myfile);

*/

$mynewfile = fopen("testfile.txt", "w") or die('unable');
$txt = "iamalunatic@makeamericagayagain.com";
fwrite($mynewfile, $txt);
fclose($mynewfile);

$mynewfile = fopen("testfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($mynewfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($mynewfile, $txt);
fclose($mynewfile);

$mynewfile = fopen("testfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($mynewfile, $txt);
$txt = "Goofy Goof\n";
fwrite($mynewfile, $txt);
fclose($mynewfile);

/********************************************************************** */

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


?>