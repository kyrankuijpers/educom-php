<?php 
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "06-php-ajax-poll-result.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 0) {
  $yes = $yes + 1;
}
if ($vote == 1) {
  $no = $no + 1;
}

$insertvote = $yes."||".$no;
$fp = fopen($filename,"w");
fputs($fp, $insertvote);
fclose($fp);
?>

<h2>Result:</h2>
<table>
<tr>
<td>Yes:</td>
<td>
<?php echo(100*round($yes/($no+$yes),2)); ?>%
</td>
</tr>
<tr>
<td>No:</td>
<td>
<?php echo(100*round($no/($no+$yes),2)); ?>%
</td>
</tr>
</table>
